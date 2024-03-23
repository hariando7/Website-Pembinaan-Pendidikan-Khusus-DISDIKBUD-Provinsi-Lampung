<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Sekolah;
use App\Models\PesertaDidik;

class KontrolPesertaDidik extends Controller
{
    public function daftarPesertaDidikSuperAdmin (Request $req) {
        $pesertaDidik = $this -> daftarPesertaDidik($req);

        return json_encode($pesertaDidik);
    }

    public function daftarPesertaDidikAdmin (Request $req) {
        $pesertaDidik = $this -> daftarPesertaDidik($req);

        return json_encode($pesertaDidik);
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
        
        return 'true';
    }

    public function ubah (Request $req) {
        $pengguna = Auth::user();
        $validasi = $req -> validate ([
            'id' => 'required',
        ]);

        $pesertaDidik = PesertaDidik::find($validasi['id']);

        if ($pesertaDidik){
            if ($pesertaDidik -> sekolah === $pengguna -> sekolah) {
                if ($validasi['nama']) {
                    $pesertaDidik -> nama = $validasi['nama'];
                }
                if ($validasi['jenisKelamin']) {
                    $pesertaDidik -> jenisKelamin = $validasi['jenisKelamin'];
                }
                if ($validasi['jenisKetunaan']) {
                    $pesertaDidik -> jenisKetunaan = $validasi['jenisKetunaan'];
                }
                if ($validasi['kelas']) {
                    $pesertaDidik -> kelas = $validasi['kelas'];
                }
                if ($validasi['rombel']) {
                    $pesertaDidik -> rombel = $validasi['rombel'];
                }

                $pesertaDidik -> save();

                return 'true';
            }
        }

        return 'false';
    }

    public function hapus ($id) {
        $pengguna = Auth::user();

        $pesertaDidik = PesertaDidik::find($id);

        if ($pesertaDidik) {
            if ($pesertaDidik -> sekolah === $pengguna -> sekolah) {
                PesertaDidik::find($id) -> delete();

                return 'true';
            }
        }

        return 'false';
    }
}
