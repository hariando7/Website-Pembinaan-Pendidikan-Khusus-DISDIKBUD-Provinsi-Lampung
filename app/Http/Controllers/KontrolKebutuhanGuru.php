<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Sekolah;
use App\Models\KebutuhanGuru;

class KontrolKebutuhanGuru extends Controller
{
    public function daftarKebutuhanGuruSuperAdmin (Request $req) {
        $kebutuhanGuru = $this -> daftarKebutuhanGuru($req);

        return json_encode($kebutuhanGuru);
    }

    public function daftarKebutuhanGuruAdmin (Request $req) {
        $kebutuhanGuru = $this -> daftarKebutuhanGuru($req);

        return json_encode($kebutuhanGuru);
    }

    public function daftarKebutuhanGuru (Request $req) {
        $pengguna = Auth::user();

        $kebutuhanGuru = KebutuhanGuru::where(function (Builder $query) use ($req, $pengguna) {
            if ($pengguna -> akses === 'admin') {
                $query -> where('sekolah', $pengguna -> sekolah);
            } else if ($req -> filterSekolah) {
                $query -> where('sekolah', (int) $req -> filterSekolah);
            }
            if ($req -> pencarian) {
                $query -> where(function (Builder $query) use ($req) {
                    $query -> where('mataPelajaran', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('jumlahDibutuhkan', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('jumlahSaatIni', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('lebihKurang', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('keterangan', 'LIKE', '%' . $req -> pencarian . '%');
                    });
                }
            }) -> latest() -> paginate(10);
            
            return $kebutuhanGuru;
        }
        
        public function lihatSatu ($id) {
            $pengguna = Auth::user();
        $kebutuhanGuru = KebutuhanGuru::find($id);

        if ($kebutuhanGuru) {
            if ($pengguna -> sekolah !== $kebutuhanGuru -> sekolah) {
                $kebutuhanGuru = null;
            }
        }
        
        return $kebutuhanGuru;
    }
    
    public function tambah (Request $req) {
        $pengguna = Auth::user();
        $validasi = $req -> validate ([
            'mataPelajaran' => 'required',
            'jumlahDibutuhkan' => 'required',
            'jumlahSaatIni' => 'required',
            'lebihKurang' => 'required',
            'keterangan' => 'required'
        ]);
        
        $validasi['pemilik'] = $pengguna -> id;
        $validasi['sekolah'] = $pengguna -> sekolah;
        
        KebutuhanGuru::create($validasi);
        
        return 'true';
    }
    
    public function ubah (Request $req) {
        $pengguna = Auth::user();
        $validasi = $req -> validate ([
            'id' => 'required',
        ]);
        
        $kebutuhanGuru = KebutuhanGuru::find($validasi['id']);
        
        if ($kebutuhanGuru){
            if ($kebutuhanGuru -> sekolah === $pengguna -> sekolah) {
                if ($req['mataPelajaran']) {
                    $kebutuhanGuru -> mataPelajaran = $req['mataPelajaran'];
                }
                if ($req['jumlahDibutuhkan']) {
                    $kebutuhanGuru -> jumlahDibutuhkan = $req['jumlahDibutuhkan'];
                }
                if ($req['jumlahSaatIni']) {
                    $kebutuhanGuru -> jumlahSaatIni = $req['jumlahSaatIni'];
                }
                if ($req['lebihKurang']) {
                    $kebutuhanGuru -> lebihKurang = $req['lebihKurang'];
                }
                if ($req['keterangan']) {
                    $kebutuhanGuru -> keterangan = $req['keterangan'];
                }

                $kebutuhanGuru -> save();

                return 'true';
            }
        }

        return 'false';
    }

    public function hapus ($id) {
        $pengguna = Auth::user();

        $kebutuhanGuru = KebutuhanGuru::find($id);

        if ($kebutuhanGuru) {
            if ($kebutuhanGuru -> sekolah === $pengguna -> sekolah) {
                KebutuhanGuru::find($id) -> delete();

                return 'true';
            }
        }

        return 'false';
    }
}
