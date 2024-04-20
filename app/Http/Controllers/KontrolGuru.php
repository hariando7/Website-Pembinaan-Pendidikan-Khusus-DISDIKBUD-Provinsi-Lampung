<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\Tahun;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Sekolah;
use App\Models\Guru;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class KontrolGuru extends Controller
{
    // $dummyData = [
    //                             [
    //         'id' => 1,
    //         'tahun' => '2024-03-13 23.59',
    //         'namaGuru' => 'John Doe',
    //         'jenisKelamin' => 'Laki-laki',
    //         'NIP' => '1234567890',
    //         'statusPNS' => 'PNS',
    //         'sertifikasi' => 'Sertifikasi',
    //         'bidangStudi' => 'Matematika',
    //     ],
    // ];
    public function statistik()
    {
        $guru = Guru::all();
        $sekolah = Sekolah::all();

        $data = array_map(function ($data) use ($guru) {
            $perempuan = $guru->where('sekolah', $data['id'])->where('jenisKelamin', 'Perempuan')->all();
            $lakiLaki = $guru->where('sekolah', $data['id'])->where('jenisKelamin', 'Laki-laki')->all();
            return [
                'namaSekolah' => $data['nama'],
                'lakiLaki' => count($lakiLaki),
                'perempuan' => count($perempuan),
            ];
        }, $sekolah->toArray());

        return json_encode($data);
    }
    public function lihatSemua()
    {
        $guru = Guru::all();
        $sekolah = Sekolah::all();

        $dummyData = array_map(function ($data) use ($sekolah) {
            $temp = $sekolah->find($data['sekolah']);
            return [
                'id' => $data['id'],
                'namaSekolah' => $temp['nama'],
                'tahun' => $data['tahun'],
                'namaGuru' => $data['nama'],
                'jenisKelamin' => $data['jenisKelamin'],
                'NIP' => $data['nip'],
                'statusPNS' => $data['statusPNS'],
                'sertifikasi' => $data['sertifikasi'],
                'bidangStudi' => $data['bidangStudi'],
            ];
        }, $guru->toArray());

        return json_encode($dummyData);
    }

    public function daftarGuruSuperAdmin(Request $req)
    {
        $guru = $this->daftarGuru($req);
        $sekolah = Sekolah::all();

        $dummyData = array_map(function ($data) use ($sekolah) {
            $temp = $sekolah->find($data->sekolah);
            return [
                'id' => $data->id,
                'namaSekolah' => $temp->nama,
                'tahun' => $data->tahun,
                'namaGuru' => $data->nama,
                'jenisKelamin' => $data->jenisKelamin,
                'NIP' => $data->nip,
                'statusPNS' => $data->statusPNS,
                'sertifikasi' => $data->sertifikasi,
                'bidangStudi' => $data->bidangStudi,
            ];
        }, $guru->items());
        $tahun = Tahun::all();

        // return json_encode($guru);
        return view('pages/dashboard/super-admin/slb/guru/sa-guru-slb', [
            'dummyData' => $dummyData,
            'DATA' => $guru,
            'sekolah' => $sekolah,
            'daftarTahun' => $tahun,
        ]);
    }

    public function daftarGuruAdmin(Request $req)
    {
        $guru = $this->daftarGuru($req);

        $dummyData = array_map(function ($data) {
            return [
                'id' => $data->id,
                'tahun' => $data->tahun,
                'namaGuru' => $data->nama,
                'jenisKelamin' => $data->jenisKelamin,
                'NIP' => $data->nip,
                'statusPNS' => $data->statusPNS,
                'sertifikasi' => $data->sertifikasi,
                'bidangStudi' => $data->bidangStudi,
            ];
        }, $guru->items());

        $time = new \DateTime("now", new \DateTimeZone('Asia/Jakarta'));
        $notif = Pengumuman::where('sistem', 'slb')
            ->where('tanggalMulai', '<', $time)
            ->where('tanggalAkhir', '>', $time)->latest()->get();
        $tahun = Tahun::all();

        // return json_encode($guru);
        return view('pages/dashboard/admin-slb/guru/admin-guru-slb', [
            'dummyData' => $dummyData,
            'DATA' => $guru,
            'daftarTahun' => $tahun,
            'pengumuman' => $notif
        ]);
    }

    public function daftarGuru(Request $req)
    {
        $pengguna = Auth::user();

        $guru = Guru::where(function (Builder $query) use ($req, $pengguna) {
            if ($pengguna->akses === 'admin') {
                $query->where('sekolah', $pengguna->sekolah);
            } else if ($req->filterSekolah) {
                $query->where('sekolah', (int) $req->filterSekolah);
            }
            if ($req->tahun) {
                $query->where('tahun', $req->tahun);
            }
            if ($req->pencarian) {
                $query->where(function (Builder $query) use ($req) {
                    $query->where('nama', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('jenisKelamin', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('nip', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('statusPNS', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('sertifikasi', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('bidangStudi', 'LIKE', '%' . $req->pencarian . '%');
                });
            }
        })->latest()->paginate(10);

        return $guru;
    }

    public function lihatSatu($id)
    {
        $pengguna = Auth::user();
        $guru = Guru::find($id);

        if ($guru) {
            if ($pengguna->sekolah !== $guru->sekolah) {
                $guru = null;
            }
        }

        return $guru;
    }

    public function tambah(Request $req)
    {
        $pengguna = Auth::user();
        $validasi = $req->validate([
            'tahun' => 'required',
            'nama' => 'required',
            'jenisKelamin' => 'required',
            'nip' => 'required',
            'statusPNS' => 'required',
            'sertifikasi' => 'required',
            'bidangStudi' => 'required'
        ]);

        $validasi['pemilik'] = $pengguna->id;
        $validasi['sekolah'] = $pengguna->sekolah;

        Tahun::firstOrCreate(['tahun' => $req['tahun']]);

        Guru::create($validasi);

        // return 'true';
        Session::flash('toast-tambah', [
            'type' => 'toast-tambah',
            'message' => 'Berhasil Menambahkan Data'
        ]);
        return redirect('/admin-guru-slb');
    }

    public function tampilanEdit($id)
    {
        $guru = Guru::find($id);
        return view('pages/dashboard/admin-slb/guru/edit/edit-guru-slb', [
            'id' => $id,
            'DATA' => $guru
        ]);
    }

    public function ubah(Request $req)
    {
        $pengguna = Auth::user();
        $validasi = $req->validate([
            'id' => 'required',
        ]);

        $guru = Guru::find($validasi['id']);

        if ($guru) {
            if ($guru->sekolah === $pengguna->sekolah) {
                if ($req['tahun']) {
                    Tahun::firstOrCreate(['tahun' => $req['tahun']]);
                    $guru->tahun = $req['tahun'];
                }
                if ($req['nama']) {
                    $guru->nama = $req['nama'];
                }
                if ($req['jenisKelamin']) {
                    $guru->jenisKelamin = $req['jenisKelamin'];
                }
                if ($req['nip']) {
                    $guru->nip = $req['nip'];
                }
                if ($req['statusPNS']) {
                    $guru->statusPNS = $req['statusPNS'];
                }
                if ($req['sertifikasi']) {
                    $guru->sertifikasi = $req['sertifikasi'];
                }
                if ($req['bidangStudi']) {
                    $guru->bidangStudi = $req['bidangStudi'];
                }

                $guru->save();

                // return 'true';
                Session::flash('toast-edit', [
                    'type' => 'toast-edit',
                    'message' => 'Berhasil Edit Data'
                ]);
                return redirect('/admin-guru-slb');
            }
        }

        // return 'false';
        // return back();
    }

    public function hapus($id)
    {
        $pengguna = Auth::user();
        $guru = Guru::find($id);

        if ($guru) {
            if ($guru->sekolah === $pengguna->sekolah) {
                Guru::find($id)->delete();

                // return 'true';
                Session::flash('toast-hapus', [
                    'type' => 'toast-hapus',
                    'message' => 'Berhasil Hapus Data'
                ]);
                return redirect('/admin-guru-slb');
            }
        }

        // return back();
    }
}
