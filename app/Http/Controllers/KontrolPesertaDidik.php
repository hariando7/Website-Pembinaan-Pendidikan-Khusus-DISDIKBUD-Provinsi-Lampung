<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Sekolah;
use App\Models\PesertaDidik;

class KontrolPesertaDidik extends Controller
{
    // $dummyData = [
    //     [
    //         'id' => 1,
    //         'tahun' => '2023',
    //         'namaSiswa' => 'Rizkyaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',
    //         'jenisKelamin' => 'Laki-laki',
    //         'jenisKetunaan' => 'Tuna Rungu',
    //         'kelas' => 'XII-A',
    //         'romble' => '1A',
    //     ],
    // ];
    public function daftarPesertaDidikSuperAdmin (Request $req) {
        $pesertaDidik = $this -> daftarPesertaDidik($req);

        return json_encode($pesertaDidik);
    }

    public function daftarPesertaDidikAdmin (Request $req) {
        $pesertaDidik = $this -> daftarPesertaDidik($req);

        $dummyData = array_map(function ($data) {
            return [
                'id' => $data -> id,
                'tahun' => $data -> created_at,
                'namaSiswa' => $data -> nama,
                'jenisKelamin' => $data -> jenisKelamin,
                'jenisKetunaan' => $data -> jenisKetunaan,
                'kelas' => $data -> kelas,
                'romble' => $data -> rombel,
            ];
        }, $pesertaDidik -> items());

        // return json_encode($pesertaDidik);
        return view('pages/dashboard/admin-slb/peserta-didik/admin-pesertadidik-slb', [
            'dummyData' => $dummyData,
            'DATA' => $pesertaDidik
        ]);
    }

    public function daftarPesertaDidik (Request $req) {
        $pengguna = Auth::user();

        $pesertaDidik = PesertaDidik::where(function (Builder $query) use ($req, $pengguna) {
            if ($pengguna -> akses === 'admin') {
                $query -> where('sekolah', $pengguna -> sekolah);
            } else if ($req -> filterSekolah) {
                $query -> where('sekolah', (int) $req -> filterSekolah);
            }
            if ($req -> pencarian) {
                $query -> where(function (Builder $query) use ($req) {
                    $query -> where('nama', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('jenisKelamin', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('jenisKetunaan', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('kelas', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('rombel', 'LIKE', '%' . $req -> pencarian . '%');
                });
            }
        }) -> latest() -> paginate(10);

        return $pesertaDidik;
    }

    public function lihatSatu ($id) {
        $pengguna = Auth::user();
        $pesertaDidik = PesertaDidik::find($id);

        if ($pesertaDidik) {
            if ($pengguna -> sekolah !== $pesertaDidik -> sekolah) {
                $pesertaDidik = null;
            }
        }

        return $pesertaDidik;
    }

    public function tambah (Request $req) {
        $pengguna = Auth::user();
        $validasi = $req -> validate ([
            'nama' => 'required',
            'jenisKelamin' => 'required',
            'jenisKetunaan' => 'required',
            'kelas' => 'required',
            'rombel' => 'required'
        ]);

        $validasi['pemilik'] = $pengguna -> id;
        $validasi['sekolah'] = $pengguna -> sekolah;

        PesertaDidik::create($validasi);
        
        return redirect('/admin-pesertadidik-slb');
    }

    public function tampilanEdit ($id) {
        $pesertaDidik = PesertaDidik::find($id);
        return view('pages/dashboard/admin-slb/peserta-didik/edit/edit-pesertadidik-slb', [
            'id' => $id,
            'DATA' => $pesertaDidik
        ]);
    }

    public function ubah (Request $req) {
        $pengguna = Auth::user();
        $validasi = $req -> validate ([
            'id' => 'required',
        ]);

        // dd($validasi);

        $pesertaDidik = PesertaDidik::find($validasi['id']);

        if ($pesertaDidik){
            if ($pesertaDidik -> sekolah === $pengguna -> sekolah) {
                if ($req['nama']) {
                    $pesertaDidik -> nama = $req['nama'];
                }
                if ($req['jenisKelamin']) {
                    $pesertaDidik -> jenisKelamin = $req['jenisKelamin'];
                }
                if ($req['jenisKetunaan']) {
                    $pesertaDidik -> jenisKetunaan = $req['jenisKetunaan'];
                }
                if ($req['kelas']) {
                    $pesertaDidik -> kelas = $req['kelas'];
                }
                if ($req['rombel']) {
                    $pesertaDidik -> rombel = $req['rombel'];
                }

                $pesertaDidik -> save();

                return redirect('/admin-pesertadidik-slb');
            }
        }

        return back();
    }

    public function hapus ($id) {
        $pengguna = Auth::user();

        $pesertaDidik = PesertaDidik::find($id);

        if ($pesertaDidik) {
            if ($pesertaDidik -> sekolah === $pengguna -> sekolah) {
                PesertaDidik::find($id) -> delete();

                return redirect('/admin-pesertadidik-slb');
            }
        }

        return back();
    }
}
