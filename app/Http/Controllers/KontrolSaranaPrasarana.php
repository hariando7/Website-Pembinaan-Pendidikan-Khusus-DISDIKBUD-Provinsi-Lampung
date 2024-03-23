<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;

use App\Models\Sekolah;
use App\Models\SaranaPrasarana;
use App\Models\GambarSaranaPrasarana;

class KontrolSaranaPrasarana extends Controller
{
    public function daftarSaranaPrasaranaSuperAdmin (Request $req) {
        $saranaPrasarana = $this -> daftarSaranaPrasarana($req);

        return json_encode($saranaPrasarana);
    }

    public function daftarSaranaPrasaranaAdmin (Request $req) {
        $saranaPrasarana = $this -> daftarSaranaPrasarana($req);

        return json_encode($saranaPrasarana);
    }

    public function daftarSaranaPrasarana (Request $req) {
        $pengguna = Auth::user();

        $saranaPrasarana = SaranaPrasarana::where(function (Builder $query) use ($req, $pengguna) {
            if ($pengguna -> akses === 'admin') {
                $query -> where('sekolah', $pengguna -> sekolah);
            } else if ($req -> filterSekolah) {
                $query -> where('sekolah', (int) $req -> filterSekolah);
            }
            if ($req -> pencarian) {
                $query -> where(function (Builder $query) use ($req) {
                    $query -> where('nama', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('jumlah', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('kondisi', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('keterangan', 'LIKE', '%' . $req -> pencarian . '%');
                });
            }
        }) -> latest() -> paginate(10);

        return $saranaPrasarana;
    }

    public function lihatSatu ($id) {
        $pengguna = Auth::user();
        $saranaPrasarana = SaranaPrasarana::find($id);

        if ($saranaPrasarana) {
            if ($pengguna -> sekolah !== $saranaPrasarana -> sekolah) {
                $saranaPrasarana = null;
            }
        }

        return $saranaPrasarana;
    }

    public function tambah (Request $req) {
        $pengguna = Auth::user();
        $validasi = $req -> validate ([
            'nama' => 'required',
            'jumlah' => 'required',
            'kondisi' => 'required',
            'keterangan' => 'required'
        ]);

        $validasi['pemilik'] = $pengguna -> id;
        $validasi['sekolah'] = $pengguna -> sekolah;

        SaranaPrasarana::create($validasi);

        $saranaPrasarana = SaranaPrasarana::firstWhere([
            'nama' => $validasi['nama'],
            'jumlah' => $validasi['jumlah'],
            'kondisi' => $validasi['kondisi'],
            'keterangan' => $validasi['keterangan']
        ]);

        if ($req -> hasFile('daftarGambar')) {
            foreach ($req -> file('daftarGambar') as $gambar) {
                $url = $gambar -> store('saranaPrasarana');
                
                GambarSaranaPrasarana::create([
                    'saranaPrasarana' => $saranaPrasarana -> id,
                    'gambar' => $url
                ]);
            }
        }
        
        return 'true';
    }

    public function ubah (Request $req) {
        $pengguna = Auth::user();
        $validasi = $req -> validate ([
            'id' => 'required',
        ]);

        $saranaPrasarana = SaranaPrasarana::find($validasi['id']);

        if ($saranaPrasarana){
            if ($saranaPrasarana -> sekolah === $pengguna -> sekolah) {
                if ($req['nama']) {
                    $saranaPrasarana -> nama = $req['nama'];
                }
                if ($req['jumlah']) {
                    $saranaPrasarana -> jumlah = $req['jumlah'];
                }
                if ($req['kondisi']) {
                    $saranaPrasarana -> kondisi = $req['kondisi'];
                }
                if ($req['keterangan']) {
                    $saranaPrasarana -> keterangan = $req['keterangan'];
                }

                if ($req -> hasFile('daftarGambar')) {
                    $daftarGambar = GambarSaranaPrasarana::where('saranaPrasarana', $saranaPrasarana -> id) -> get();

                    foreach ($daftarGambar as $gambar) {
                        Storage::delete($gambar -> gambar);
                    }
                    GambarSaranaPrasarana::where('saranaPrasarana', $saranaPrasarana -> id) -> delete();

                    foreach ($req -> file('daftarGambar') as $gambar) {
                        $url = $gambar -> store('saranaPrasarana');
                        
                        GambarSaranaPrasarana::create([
                            'saranaPrasarana' => $saranaPrasarana -> id,
                            'gambar' => $url
                        ]);
                    }
                }

                $saranaPrasarana -> save();

                return 'true';
            }
        }

        return 'false';
    }

    public function hapus ($id) {
        $pengguna = Auth::user();

        $saranaPrasarana = SaranaPrasarana::find($id);

        if ($saranaPrasarana) {
            if ($saranaPrasarana -> sekolah === $pengguna -> sekolah) {
                $daftarGambar = GambarSaranaPrasarana::where('saranaPrasarana', $saranaPrasarana -> id) -> get();

                foreach ($daftarGambar as $gambar) {
                    Storage::delete($gambar -> gambar);
                }

                GambarSaranaPrasarana::where('saranaPrasarana', $saranaPrasarana -> id) -> delete();
                SaranaPrasarana::find($id) -> delete();

                return 'true';
            }
        }

        return 'false';
    }
}
