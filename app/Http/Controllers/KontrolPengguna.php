<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Karya;
use App\Models\KebutuhanGuru;
use App\Models\PesertaDidik;
use App\Models\SaranaPrasarana;
use App\Models\TenagaPendidik;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;

use App\Models\User;
use App\Models\Sekolah;

use Illuminate\Support\Facades\Session;

class KontrolPengguna extends Controller
{
    public function daftarPenggunaSuperAdmin(Request $req)
    {
        $admin = $this->daftarPengguna($req);
        $sekolah = Sekolah::all();

        $dummyData = array_map(function ($data) use ($sekolah) {
            $temp = $sekolah->find($data->sekolah);
            return [
                'id' => $data->id,
                'idSekolah' => $temp->id,
                'nama_sekolah' => $temp->nama,
                'npsn' => $temp->npsn,
                'email' => $data->email
            ];
        }, $admin->items());

        return view('pages/dashboard/super-admin/kelola-admin-slb/kelola-admin-slb', [
            'dummyData' => $dummyData,
            'DATA' => $admin,
            'sekolah' => $sekolah
        ]);
    }

    public function daftarPengguna(Request $req)
    {
        $admin = User::where(function (Builder $query) use ($req) {
            $query->where('akses', 'admin');
            if ($req->filterSekolah) {
                $query->where('sekolah', (int) $req->filterSekolah);
            }
            if ($req->pencarian) {
                $query->where('email', 'LIKE', '%' . $req->pencarian . '%');
            }
        })->latest()->paginate(10);

        return $admin;
    }

    public function lihatSatu($id)
    {
        $admin = User::find($id);

        return $admin;
    }

    public function tambah(Request $req)
    {
        $validasi = $req->validate([
            'email' => 'required|email|unique:pengguna',
            'password' => 'required',
            'nama' => 'required',
            'npsn' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'alamat' => 'required',
            'jenisKetunaan' => 'required',
            'linkWebsiteSekolah' => 'required'
        ]);

        // dd($req);

        $sekolah = Sekolah::firstWhere('nama', $validasi['nama']);
        if (!$sekolah) {
            Sekolah::create($req->except(['email', 'password']));
            $sekolah = Sekolah::firstWhere('nama', $validasi['nama']);
        }

        User::create([
            'email' => $validasi['email'],
            'password' => Hash::make($validasi['password']),
            'sekolah' => $sekolah->id,
            'akses' => 'admin'
        ]);

        Session::flash('toast-tambah', [
            'type' => 'toast-tambah',
            'message' => 'Berhasil Menambahkan Data'
        ]);

        return redirect('/kelola-admin-slb');
    }

    public function tampilanEdit($id)
    {
        $admin = User::find($id);
        $sekolah = Sekolah::find($admin->sekolah);

        if ($admin && $sekolah) {
            return view('pages/dashboard/super-admin/kelola-admin-slb/edit/edit-admin-slb', [
                'id' => $id,
                'DATA' => [
                    'id' => $admin->id,
                    'email' => $admin->email,
                    'nama' => $sekolah->nama,
                    'npsn' => $sekolah->npsn,
                    'kota' => $sekolah->kota,
                    'kecamatan' => $sekolah->kecamatan,
                    'alamat' => $sekolah->alamat,
                    'jenisKetunaan' => $sekolah->jenisKetunaan,
                    'linkWebsiteSekolah' => $sekolah->linkWebsiteSekolah
                ]
            ]);
        }

        return back();
    }

    public function tampilanLihat($id)
    {
        $admin = User::find($id);
        $sekolah = Sekolah::find($admin->sekolah);

        if ($admin && $sekolah) {
            return view('pages/dashboard/super-admin/kelola-admin-slb/lihat/lihat-admin-slb', [
                'id' => $id,
                'DATA' => [
                    'id' => $admin->id,
                    'email' => $admin->email,
                    'nama' => $sekolah->nama,
                    'npsn' => $sekolah->npsn,
                    'kota' => $sekolah->kota,
                    'kecamatan' => $sekolah->kecamatan,
                    'alamat' => $sekolah->alamat,
                    'jenisKetunaan' => $sekolah->jenisKetunaan,
                    'linkWebsiteSekolah' => $sekolah->linkWebsiteSekolah
                ]
            ]);
        }

        return back();
    }

    public function ubah(Request $req)
    {
        $validasi = $req->validate([
            'id' => 'required',
        ]);

        $admin = User::find($validasi['id']);

        if ($admin) {
            if ($req['email']) {
                $admin->email = $req['email'];
            }
            $admin->save();

            $sekolah = Sekolah::find($admin->sekolah);

            if ($req['nama']) {
                $sekolah->nama = $req['nama'];
            }
            if ($req['npsn']) {
                $sekolah->npsn = $req['npsn'];
            }
            if ($req['kota']) {
                $sekolah->kota = $req['kota'];
            }
            if ($req['kecamatan']) {
                $sekolah->kecamatan = $req['kecamatan'];
            }
            if ($req['alamat']) {
                $sekolah->alamat = $req['alamat'];
            }
            if ($req['jenisKetunaan']) {
                $sekolah->jenisKetunaan = $req['jenisKetunaan'];
            }
            if ($req['linkWebsiteSekolah']) {
                $sekolah->linkWebsiteSekolah = $req['linkWebsiteSekolah'];
            }
            $sekolah->save();

            // return 'true';

            Session::flash('toast-edit', [
                'type' => 'toast-edit',
                'message' => 'Berhasil Edit Data'
            ]);


            return redirect('/kelola-admin-slb');
        }

        // return 'false';
        // return back();
    }

    public function hapus($id)
    {
        $admin = User::findOrFail($id);

        $daftarAdmin = User::where('sekolah', $admin->sekolah)->get();

        if ($daftarAdmin->count() === 1) {
            Guru::where('sekolah', $admin->sekolah)->delete();
            Karya::where('sekolah', $admin->sekolah)->delete();
            KebutuhanGuru::where('sekolah', $admin->sekolah)->delete();
            PesertaDidik::where('sekolah', $admin->sekolah)->delete();
            SaranaPrasarana::where('sekolah', $admin->sekolah)->delete();
            TenagaPendidik::where('sekolah', $admin->sekolah)->delete();

            Sekolah::findOrFail($admin->sekolah)->delete();
        }

        $admin->delete();

        Session::flash('toast-hapus', [
            'type' => 'toast-hapus',
            'message' => 'Berhasil Hapus Data'
        ]);

        return redirect('/kelola-admin-slb');
    }
}
