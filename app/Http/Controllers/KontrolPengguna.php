<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

use App\Models\User;
use App\Models\Sekolah;

class KontrolPengguna extends Controller
{
    public function daftarPenggunaSuperAdmin (Request $req) {
        $admin = $this -> daftarPengguna($req);

        return json_encode($admin);
    }

    public function daftarPengguna (Request $req) {
        $admin = User::where(function (Builder $query) use ($req) {
            $query -> where('akses', 'admin');
            if ($req -> filterSekolah) {
                $query -> where('sekolah', (int) $req -> filterSekolah);
            }
            if ($req -> pencarian) {
                $query -> where('email', 'LIKE', '%' . $req -> pencarian . '%');
            }
        }) -> latest() -> paginate(10);

        return $admin;
    }

    public function lihatSatu ($id) {
        $admin = User::find($id);

        return $admin;
    }

    public function tambah (Request $req) {
        $validasi = $req -> validate([
            'email' => 'required|email|unique:pengguna',
            'password' => 'required',
            'nama' => 'required',
            // 'npsn' => 'required',
            // 'kota' => 'required',
            // 'kecamatan' => 'required',
            // 'alamat' => 'required',
            // 'jenisKetunaan' => 'required',
            // 'linkWebsiteSekolah' => 'required'
        ]);

        $sekolah = Sekolah::firstWhere('nama', $validasi['nama']);
        if (!$sekolah) {
            Sekolah::create($req -> except(['email', 'password']));
            $sekolah = Sekolah::firstWhere('nama', $validasi['nama']);
        }

        User::create([
            'email' => $validasi['email'],
            'password' => Hash::make($validasi['password']),
            'sekolah' => $sekolah -> id,
            'akses' => 'admin'
        ]);

        return 'true';
    }

    public function ubah (Request $req) {
        $validasi = $req -> validate ([
            'id' => 'required',
        ]);

        $admin = User::find($validasi['id']);

        if ($admin){
            if ($validasi['email']) {
                $admin -> email = $validasi['email'];
            }
            $admin -> save();
            
            $sekolah = Sekolah::find($admin -> sekolah);

            if ($validasi['nama']) {
                $sekolah -> nama = $validasi['nama'];
            }
            if ($validasi['npsn']) {
                $sekolah -> npsn = $validasi['npsn'];
            }
            if ($validasi['kota']) {
                $sekolah -> kota = $validasi['kota'];
            }
            if ($validasi['kecamatan']) {
                $sekolah -> kecamatan = $validasi['kecamatan'];
            }
            if ($validasi['alamat']) {
                $sekolah -> alamat = $validasi['alamat'];
            }
            if ($validasi['jenisKetunaan']) {
                $sekolah -> jenisKetunaan = $validasi['jenisKetunaan'];
            }
            if ($validasi['linkWebsiteSekolah']) {
                $sekolah -> linkWebsiteSekolah = $validasi['linkWebsiteSekolah'];
            }
            $sekolah -> save();

            return 'true';
        }

        return 'false';
    }

    public function hapus ($id) {
        $admin = User::find($id);

        if ($admin) {
            $daftarAdmin = User::where('sekolah', $admin -> sekolah) -> get();

            if ($daftarAdmin -> length() === 1) {
                Sekolah::find($admin -> sekolah) -> delete();
            }

            User::find($id) -> delete();

            return 'true';
        }

        return 'false';
    }
}
