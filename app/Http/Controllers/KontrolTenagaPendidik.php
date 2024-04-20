<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use App\Models\Tahun;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Sekolah;
use App\Models\TenagaPendidik;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class KontrolTenagaPendidik extends Controller
{
    // $dummyData = [
    //     [
    //         'id' => 1,
    //         'tahun' => '2023',
    //         'namaTendik' => 'John Doe',
    //         'jenisKelamin' => 'Laki-laki',
    //         'nip' => '1234567890',
    //         'status' => 'PNS',
    //         'bidangTugas' => 'Guru',
    //     ],
    // ];
    public function statistik()
    {
        $tenagaPendidik = TenagaPendidik::all();
        $sekolah = Sekolah::all();

        $data = array_map(function ($data) use ($tenagaPendidik) {
            $perempuan = $tenagaPendidik->where('sekolah', $data['id'])->where('jenisKelamin', 'Perempuan')->all();
            $lakiLaki = $tenagaPendidik->where('sekolah', $data['id'])->where('jenisKelamin', 'Laki-laki')->all();
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
        $tenagaPendidik = TenagaPendidik::all();
        $sekolah = Sekolah::all();

        $dummyData = array_map(function ($data) use ($sekolah) {
            $temp = $sekolah->find($data['sekolah']);
            return [
                'id' => $data['id'],
                'namaSekolah' => $temp['nama'],
                'tahun' => $data['tahun'],
                'namaTendik' => $data['nama'],
                'jenisKelamin' => $data['jenisKelamin'],
                'nip' => $data['nip'],
                'status' => $data['statusPNS'],
                'bidangTugas' => $data['bidangPekerjaan'],
            ];
        }, $tenagaPendidik->toArray());

        return json_encode($dummyData);
    }
    public function daftarTenagaPendidikSuperAdmin(Request $req)
    {
        $tenagaPendidik = $this->daftarTenagaPendidik($req);
        $sekolah = Sekolah::all();

        $dummyData = array_map(function ($data) use ($sekolah) {
            $temp = $sekolah->find($data->sekolah);
            return [
                'id' => $data->id,
                'namaSekolah' => $temp->nama,
                'tahun' => $data->tahun,
                'namaTendik' => $data->nama,
                'jenisKelamin' => $data->jenisKelamin,
                'nip' => $data->nip,
                'status' => $data->statusPNS,
                'bidangTugas' => $data->bidangPekerjaan,
            ];
        }, $tenagaPendidik->items());
        $tahun = Tahun::all();

        // return json_encode($tenagaPendidik);
        return view('pages/dashboard/super-admin/slb/tendik/sa-tendik-slb', [
            'dummyData' => $dummyData,
            'DATA' => $tenagaPendidik,
            'daftarTahun' => $tahun,
            'sekolah' => $sekolah
        ]);
    }

    public function daftarTenagaPendidikAdmin(Request $req)
    {
        $tenagaPendidik = $this->daftarTenagaPendidik($req);

        $dummyData = array_map(function ($data) {
            return [
                'id' => $data->id,
                'tahun' => $data->tahun,
                'namaTendik' => $data->nama,
                'jenisKelamin' => $data->jenisKelamin,
                'nip' => $data->nip,
                'status' => $data->statusPNS,
                'bidangTugas' => $data->bidangPekerjaan,
            ];
        }, $tenagaPendidik->items());

        $time = new \DateTime("now", new \DateTimeZone('Asia/Jakarta'));
        $notif = Pengumuman::where('sistem', 'slb')
            ->where('tanggalMulai', '<', $time)
            ->where('tanggalAkhir', '>', $time)->latest()->get();
        $tahun = Tahun::all();

        // return json_encode($tenagaPendidik);
        return view('pages/dashboard/admin-slb/tendik/admin-tendik-slb', [
            'dummyData' => $dummyData,
            'DATA' => $tenagaPendidik,
            'daftarTahun' => $tahun,
            'pengumuman' => $notif
        ]);
    }

    public function daftarTenagaPendidik(Request $req)
    {
        $pengguna = Auth::user();

        $tenagaPendidik = TenagaPendidik::where(function (Builder $query) use ($req, $pengguna) {
            if ($pengguna->akses === 'admin') {
                $query->where('sekolah', $pengguna->sekolah);
            } else if ($req->filterSekolah) {
                $query->where('sekolah', (int) $req->filterSekolah);
            }
            if ($req->tahun) {
                $query->where('tahun', (int) $req->tahun);
            }
            if ($req->pencarian) {
                $query->where(function (Builder $query) use ($req) {
                    $query->where('nama', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('jenisKelamin', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('nip', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('statusPNS', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('bidangPekerjaan', 'LIKE', '%' . $req->pencarian . '%');
                });
            }
        })->latest()->paginate(10);

        return $tenagaPendidik;
    }

    public function lihatSatu($id)
    {
        $pengguna = Auth::user();
        $tenagaPendidik = TenagaPendidik::find($id);

        if ($tenagaPendidik) {
            if ($pengguna->sekolah !== $tenagaPendidik->sekolah) {
                $tenagaPendidik = null;
            }
        }

        return $tenagaPendidik;
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
            'bidangPekerjaan' => 'required'
        ]);

        $validasi['pemilik'] = $pengguna->id;
        $validasi['sekolah'] = $pengguna->sekolah;

        Tahun::firstOrCreate(['tahun' => $req['tahun']]);

        TenagaPendidik::create($validasi);

        Session::flash('toast-tambah', [
            'type' => 'toast-tambah',
            'message' => 'Berhasil Menambahkan Data'
        ]);

        // return 'true';
        return redirect('/admin-tendik-slb');
    }

    public function tampilanEdit($id)
    {
        $tenagaPendidik = TenagaPendidik::find($id);
        return view('pages/dashboard/admin-slb/tendik/edit/edit-tendik-slb', [
            'id' => $id,
            'DATA' => $tenagaPendidik
        ]);
    }

    public function ubah(Request $req)
    {
        $pengguna = Auth::user();
        $validasi = $req->validate([
            'id' => 'required',
        ]);

        $tenagaPendidik = TenagaPendidik::find($validasi['id']);

        if ($tenagaPendidik) {
            if ($tenagaPendidik->sekolah === $pengguna->sekolah) {
                if ($req['tahun']) {
                    Tahun::firstOrCreate(['tahun' => $req['tahun']]);
                    $tenagaPendidik->tahun = $req['tahun'];
                }
                if ($req['nama']) {
                    $tenagaPendidik->nama = $req['nama'];
                }
                if ($req['jenisKelamin']) {
                    $tenagaPendidik->jenisKelamin = $req['jenisKelamin'];
                }
                if ($req['nip']) {
                    $tenagaPendidik->nip = $req['nip'];
                }
                if ($req['statusPNS']) {
                    $tenagaPendidik->statusPNS = $req['statusPNS'];
                }
                if ($req['bidangPekerjaan']) {
                    $tenagaPendidik->bidangPekerjaan = $req['bidangPekerjaan'];
                }

                $tenagaPendidik->save();

                // return 'true';
                Session::flash('toast-edit', [
                    'type' => 'toast-edit',
                    'message' => 'Berhasil Edit Data'
                ]);

                return redirect('/admin-tendik-slb');
            }
        }

        // return 'false';
        // return back();
    }

    public function hapus($id)
    {
        $pengguna = Auth::user();

        $tenagaPendidik = TenagaPendidik::find($id);

        if ($tenagaPendidik) {
            if ($tenagaPendidik->sekolah === $pengguna->sekolah) {
                TenagaPendidik::find($id)->delete();

                // return 'true';

                Session::flash('toast-hapus', [
                    'type' => 'toast-hapus',
                    'message' => 'Berhasil Hapus Data'
                ]);

                return redirect('/admin-tendik-slb');
            }
        }

        // return 'false';
        // return back();
    }
}
