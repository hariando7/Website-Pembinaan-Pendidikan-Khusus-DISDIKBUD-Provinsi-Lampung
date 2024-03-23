<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Sekolah;
use App\Models\Guru;

class KontrolGuru extends Controller
{
    public function daftarGuruSuperAdmin (Request $req) {
        $guru = $this -> daftarGuru($req);

        return json_encode($guru);
    }

    public function daftarGuruAdmin (Request $req) {
        $guru = $this -> daftarGuru($req);

        return json_encode($guru);
    }

    public function daftarGuru (Request $req) {
        $pengguna = Auth::user();

        $guru = Guru::where(function (Builder $query) use ($req, $pengguna) {
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
                        -> orWhere('sertifikasi', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('bidangStudi', 'LIKE', '%' . $req -> pencarian . '%');
                });
            }
        }) -> latest() -> paginate(10);

        return $guru;
    }

    public function lihatSatu ($id) {
        $pengguna = Auth::user();
        $guru = Guru::find($id);

        if ($guru) {
            if ($pengguna -> sekolah !== $guru -> sekolah) {
                $guru = null;
            }
        }

        return $guru;
    }

    public function tambah (Request $req) {
        $pengguna = Auth::user();
        $validasi = $req -> validate ([
            'nama' => 'required',
            'jenisKelamin' => 'required',
            'nip' => 'required',
            'statusPNS' => 'required',
            'sertifikasi' => 'required',
            'bidangStudi' => 'required'
        ]);

        $validasi['pemilik'] = $pengguna -> id;
        $validasi['sekolah'] = $pengguna -> sekolah;

        Guru::create($validasi);
        
        return 'true';
    }

    public function ubah (Request $req) {
        $pengguna = Auth::user();
        $validasi = $req -> validate ([
            'id' => 'required',
        ]);

        $guru = Guru::find($validasi['id']);

        if ($guru){
            if ($guru -> sekolah === $pengguna -> sekolah) {
                if ($req['nama']) {
                    $guru -> nama = $req['nama'];
                }
                if ($req['jenisKelamin']) {
                    $guru -> jenisKelamin = $req['jenisKelamin'];
                }
                if ($req['nip']) {
                    $guru -> nip = $req['nip'];
                }
                if ($req['statusPNS']) {
                    $guru -> statusPNS = $req['statusPNS'];
                }
                if ($req['sertifikasi']) {
                    $guru -> sertifikasi = $req['sertifikasi'];
                }
                if ($req['bidangStudi']) {
                    $guru -> bidangStudi = $req['bidangStudi'];
                }

                $guru -> save();

                return 'true';
            }
        }

        return 'false';
    }

    public function hapus ($id) {
        $pengguna = Auth::user();

        $guru = Guru::find($id);

        if ($guru) {
            if ($guru -> sekolah === $pengguna -> sekolah) {
                Guru::find($id) -> delete();

                return 'true';
            }
        }

        return 'false';
    }
}
