<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Sekolah;
use App\Models\Karya;

class KontrolKarya extends Controller
{
    public function daftarKaryaSuperAdmin (Request $req) {
        $karya = $this -> daftarKarya($req);

        return json_encode($karya);
    }

    public function daftarKaryaAdmin (Request $req) {
        $karya = $this -> daftarKarya($req);

        return json_encode($karya);
    }

    public function daftarKarya (Request $req) {
        $pengguna = Auth::user();

        $karya = Karya::where(function (Builder $query) use ($req, $pengguna) {
            if ($pengguna -> akses === 'admin') {
                $query -> where('sekolah', $pengguna -> sekolah);
            } else if ($req -> filterSekolah) {
                $query -> where('sekolah', (int) $req -> filterSekolah);
            }
            if ($req -> pencarian) {
                $query -> where(function (Builder $query) use ($req) {
                    $query -> where('nama', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('deskripsi', 'LIKE', '%' . $req -> pencarian . '%');
                });
            }
        }) -> latest() -> paginate(10);

        return $karya;
    }

    public function lihatSatu ($id) {
        $pengguna = Auth::user();
        $karya = Karya::find($id);

        if ($karya) {
            if ($pengguna -> sekolah !== $karya -> sekolah) {
                $karya = null;
            }
        }

        return $karya;
    }

    public function tambah (Request $req) {
        $pengguna = Auth::user();
        $validasi = $req -> validate ([
            'nama' => 'required',
            'gambar' => 'required',
            'deskripsi' => 'required'
        ]);

        if ($req -> file('gambar')) {
            $validasi['gambar'] = $req -> file('gambar') -> store('karya');
        }

        $validasi['pemilik'] = $pengguna -> id;
        $validasi['sekolah'] = $pengguna -> sekolah;

        Karya::create($validasi);
        
        return redirect('/admin-karya-slb');
    }

    public function ubah (Request $req) {
        $pengguna = Auth::user();
        $validasi = $req -> validate ([
            'id' => 'required',
        ]);

        $karya = Karya::find($validasi['id']);

        if ($karya){
            if ($karya -> sekolah === $pengguna -> sekolah) {
                if ($req['nama']) {
                    $karya -> nama = $req['nama'];
                }
                if ($req['deskripsi']) {
                    $karya -> deskripsi = $req['deskripsi'];
                }
                if ($req -> file('gambar')) {
                    Storage::delete($karya -> gambar);
                    $req['gambar'] = $req -> file('gambar') -> store('karya');
                    $karya -> gambar = $req['gambar'];
                }

                $karya -> save();

                return 'true';
            }
        }

        return 'false';
    }

    public function hapus ($id) {
        $pengguna = Auth::user();

        $karya = Karya::find($id);

        if ($karya) {
            if ($karya -> sekolah === $pengguna -> sekolah) {
                if ($karya -> gambar) {
                    Storage::delete($karya -> gambar);
                }
                Karya::find($id) -> delete();

                return 'true';
            }
        }

        return 'false';
    }
}
