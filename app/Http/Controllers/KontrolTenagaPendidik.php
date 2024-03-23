<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Sekolah;
use App\Models\TenagaPendidik;

class KontrolTenagaPendidik extends Controller
{
    public function daftarTenagaPendidikSuperAdmin (Request $req) {
        $tenagaPendidik = $this -> daftarTenagaPendidik($req);

        return json_encode($tenagaPendidik);
    }

    public function daftarTenagaPendidikAdmin (Request $req) {
        $tenagaPendidik = $this -> daftarTenagaPendidik($req);

        return json_encode($tenagaPendidik);
    }

    public function daftarTenagaPendidik (Request $req) {
        $pengguna = Auth::user();

        $tenagaPendidik = TenagaPendidik::where(function (Builder $query) use ($req, $pengguna) {
            if ($pengguna -> akses === 'admin') {
                $query -> where('sekolah', $pengguna -> sekolah);
            } else if ($req -> filterSekolah) {
                $query -> where('sekolah', (int) $req -> filterSekolah);
            }
            if ($req -> pencarian) {
                $query -> where(function (Builder $query) use ($req) {
                    $query -> where('nama', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('jenisKelamin', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('nip', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('statusPNS', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('bidangPekerjaan', 'LIKE', '%' . $req -> pencarian . '%');
                });
            }
        }) -> latest() -> paginate(10);

        return $tenagaPendidik;
    }

    public function lihatSatu ($id) {
        $pengguna = Auth::user();
        $tenagaPendidik = TenagaPendidik::find($id);

        if ($tenagaPendidik) {
            if ($pengguna -> sekolah !== $tenagaPendidik -> sekolah) {
                $tenagaPendidik = null;
            }
        }

        return $tenagaPendidik;
    }

    public function tambah (Request $req) {
        $pengguna = Auth::user();
        $validasi = $req -> validate ([
            'nama' => 'required',
            'jenisKelamin' => 'required',
            'nip' => 'required',
            'statusPNS' => 'required',
            'bidangPekerjaan' => 'required'
        ]);

        $validasi['pemilik'] = $pengguna -> id;
        $validasi['sekolah'] = $pengguna -> sekolah;

        TenagaPendidik::create($validasi);
        
        return 'true';
    }

    public function ubah (Request $req) {
        $pengguna = Auth::user();
        $validasi = $req -> validate ([
            'id' => 'required',
        ]);

        $tenagaPendidik = TenagaPendidik::find($validasi['id']);

        if ($tenagaPendidik){
            if ($tenagaPendidik -> sekolah === $pengguna -> sekolah) {
                if ($req['nama']) {
                    $tenagaPendidik -> nama = $req['nama'];
                }
                if ($req['jenisKelamin']) {
                    $tenagaPendidik -> jenisKelamin = $req['jenisKelamin'];
                }
                if ($req['nip']) {
                    $tenagaPendidik -> nip = $req['nip'];
                }
                if ($req['statusPNS']) {
                    $tenagaPendidik -> statusPNS = $req['statusPNS'];
                }
                if ($req['bidangPekerjaan']) {
                    $tenagaPendidik -> bidangPekerjaan = $req['bidangPekerjaan'];
                }

                $tenagaPendidik -> save();

                return 'true';
            }
        }

        return 'false';
    }

    public function hapus ($id) {
        $pengguna = Auth::user();

        $tenagaPendidik = TenagaPendidik::find($id);

        if ($tenagaPendidik) {
            if ($tenagaPendidik -> sekolah === $pengguna -> sekolah) {
                TenagaPendidik::find($id) -> delete();

                return 'true';
            }
        }

        return 'false';
    }
}
