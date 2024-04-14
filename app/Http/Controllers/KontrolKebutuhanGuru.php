<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Sekolah;
use App\Models\KebutuhanGuru;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class KontrolKebutuhanGuru extends Controller
{
    // $dummyData = [
    //                                 [
    //                                     'id' => 1,
    //                                     'tahun' => '2023',
    //                                     'guruMapel' => 'Guru 1',
    //                                     'jumlahDibutuhkan' => '10',
    //                                     'jumlahYangAda' => '8',
    //                                     'lebihKurang' => '8',
    //                                     'keterangan' => 'Kurang',
    //                                 ],
    //                             ];
    public function statistik()
    {
        $kebutuhanGuru = KebutuhanGuru::all();
        $sekolah = Sekolah::all();

        $data = array_map(function ($data) use ($kebutuhanGuru) {
            $arr = $kebutuhanGuru->where('sekolah', $data['id'])->all();
            $jumlahDibutuhkan = 0;
            $jumlahYangAda = 0;
            foreach ($arr as $key => $value) {
                $jumlahDibutuhkan += $value['jumlahDibutuhkan'];
                $jumlahYangAda += $value['jumlahYangAda'];
            }
            return [
                'namaSekolah' => $data['nama'],
                'jumlahDibutuhkan' => $jumlahDibutuhkan,
                'jumlahYangAda' => $jumlahYangAda,
            ];
        }, $sekolah->toArray());

        return json_encode($data);
    }
    public function lihatSemua()
    {
        $kebutuhanGuru = KebutuhanGuru::all();
        $sekolah = Sekolah::all();

        $dummyData = array_map(function ($data) use ($sekolah) {
            $temp = $sekolah->find($data['sekolah']);
            return [
                'id' => $data['id'],
                'namaSekolah' => $temp['nama'],
                'tahun' => Carbon::parse($data['created_at'])->setTimezone('Asia/Jakarta')->format('d-m-Y H:i:s'),
                'mataPelajaran' => $data['mataPelajaran'],
                'jumlahDibutuhkan' => $data['jumlahDibutuhkan'],
                'jumlahYangAda' => $data['jumlahSaatIni'],
                'lebihKurang' => $data['lebihKurang'],
                'keterangan' => $data['keterangan'],
            ];
        }, $kebutuhanGuru->toArray());

        return json_encode($dummyData);
    }
    public function daftarKebutuhanGuruSuperAdmin(Request $req)
    {
        $kebutuhanGuru = $this->daftarKebutuhanGuru($req);
        $sekolah = Sekolah::all();

        $dummyData = array_map(function ($data) use ($sekolah) {
            $temp = $sekolah->find($data->sekolah);
            return [
                'id' => $data->id,
                'namaSekolah' => $temp->nama,
                'tahun' => Carbon::parse($data->created_at)->setTimezone('Asia/Jakarta')->format('d-m-Y H:i:s'),
                'mataPelajaran' => $data->mataPelajaran,
                'jumlahDibutuhkan' => $data->jumlahDibutuhkan,
                'jumlahYangAda' => $data->jumlahSaatIni,
                'lebihKurang' => $data->lebihKurang,
                'keterangan' => $data->keterangan,
            ];
        }, $kebutuhanGuru->items());

        // return json_encode($kebutuhanGuru);
        return view('pages/dashboard/super-admin/slb/kebutuhan-guru/sa-kebutuhan-guru-slb', [
            'dummyData' => $dummyData,
            'DATA' => $kebutuhanGuru,
            'sekolah' => $sekolah
        ]);
    }

    public function daftarKebutuhanGuruAdmin(Request $req)
    {
        $kebutuhanGuru = $this->daftarKebutuhanGuru($req);

        $dummyData = array_map(function ($data) {
            return [
                'id' => $data->id,
                'tahun' => Carbon::parse($data->created_at)->setTimezone('Asia/Jakarta')->format('d-m-Y H:i:s'),
                // 'tahun' => $data -> created_at,
                'mataPelajaran' => $data->mataPelajaran,
                'jumlahDibutuhkan' => $data->jumlahDibutuhkan,
                'jumlahYangAda' => $data->jumlahSaatIni,
                'lebihKurang' => $data->lebihKurang,
                'keterangan' => $data->keterangan,
            ];
        }, $kebutuhanGuru->items());

        $time = new \DateTime("now", new \DateTimeZone('Asia/Jakarta'));
        $notif = Pengumuman::where('sistem', 'slb')
            ->where('tanggalMulai', '<', $time)
            ->where('tanggalAkhir', '>', $time)->latest()->get();

        // return json_encode($kebutuhanGuru);
        return view('pages/dashboard/admin-slb/kebutuhan-guru/admin-kebutuhan-guru-slb', [
            'dummyData' => $dummyData,
            'DATA' => $kebutuhanGuru,
            'pengumuman' => $notif
        ]);
    }

    public function daftarKebutuhanGuru(Request $req)
    {
        $pengguna = Auth::user();

        $kebutuhanGuru = KebutuhanGuru::where(function (Builder $query) use ($req, $pengguna) {
            if ($pengguna->akses === 'admin') {
                $query->where('sekolah', $pengguna->sekolah);
            } else if ($req->filterSekolah) {
                $query->where('sekolah', (int) $req->filterSekolah);
            }
            if ($req->pencarian) {
                $query->where(function (Builder $query) use ($req) {
                    $query->where('mataPelajaran', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('jumlahDibutuhkan', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('jumlahSaatIni', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('lebihKurang', 'LIKE', '%' . $req->pencarian . '%')
                        ->orWhere('keterangan', 'LIKE', '%' . $req->pencarian . '%');
                });
            }
        })->latest()->paginate(10);

        return $kebutuhanGuru;
    }

    public function lihatSatu($id)
    {
        $pengguna = Auth::user();
        $kebutuhanGuru = KebutuhanGuru::find($id);

        if ($kebutuhanGuru) {
            if ($pengguna->sekolah !== $kebutuhanGuru->sekolah) {
                $kebutuhanGuru = null;
            }
        }

        return $kebutuhanGuru;
    }

    public function tambah(Request $req)
    {
        $pengguna = Auth::user();
        $validasi = $req->validate([
            'mataPelajaran' => 'required',
            'jumlahDibutuhkan' => 'required',
            'jumlahSaatIni' => 'required',
            'lebihKurang' => 'required',
            'keterangan' => 'required'
        ]);

        $validasi['pemilik'] = $pengguna->id;
        $validasi['sekolah'] = $pengguna->sekolah;

        KebutuhanGuru::create($validasi);

        Session::flash('toast-tambah', [
            'type' => 'toast-tambah',
            'message' => 'Berhasil Menambahkan Data'
        ]);

        // return 'true';
        return redirect('/admin-kebutuhan-guru-slb');
    }

    public function tampilanEdit($id)
    {
        $kebutuhanGuru = KebutuhanGuru::find($id);
        return view('pages/dashboard/admin-slb/kebutuhan-guru/edit/edit-kebutuhan-guru-slb', [
            'id' => $id,
            'DATA' => $kebutuhanGuru
        ]);
    }

    public function ubah(Request $req)
    {
        $pengguna = Auth::user();
        $validasi = $req->validate([
            'id' => 'required',
        ]);

        $kebutuhanGuru = KebutuhanGuru::find($validasi['id']);

        if ($kebutuhanGuru) {
            if ($kebutuhanGuru->sekolah === $pengguna->sekolah) {
                if ($req['mataPelajaran']) {
                    $kebutuhanGuru->mataPelajaran = $req['mataPelajaran'];
                }
                if ($req['jumlahDibutuhkan']) {
                    $kebutuhanGuru->jumlahDibutuhkan = $req['jumlahDibutuhkan'];
                }
                if ($req['jumlahSaatIni']) {
                    $kebutuhanGuru->jumlahSaatIni = $req['jumlahSaatIni'];
                }
                if ($req['lebihKurang']) {
                    $kebutuhanGuru->lebihKurang = $req['lebihKurang'];
                }
                if ($req['keterangan']) {
                    $kebutuhanGuru->keterangan = $req['keterangan'];
                }

                $kebutuhanGuru->save();

                // return 'true';
                Session::flash('toast-edit', [
                    'type' => 'toast-edit',
                    'message' => 'Berhasil Edit Data'
                ]);

                return redirect('/admin-kebutuhan-guru-slb');
            }
        }

        // return 'false';
        // return back();
    }

    public function hapus($id)
    {
        $pengguna = Auth::user();

        $kebutuhanGuru = KebutuhanGuru::find($id);

        if ($kebutuhanGuru) {
            if ($kebutuhanGuru->sekolah === $pengguna->sekolah) {
                KebutuhanGuru::find($id)->delete();

                // return 'true';

                Session::flash('toast-hapus', [
                    'type' => 'toast-hapus',
                    'message' => 'Berhasil Hapus Data'
                ]);

                return redirect('/admin-kebutuhan-guru-slb');
            }
        }

        // return 'false';
        // return back();
    }
}
