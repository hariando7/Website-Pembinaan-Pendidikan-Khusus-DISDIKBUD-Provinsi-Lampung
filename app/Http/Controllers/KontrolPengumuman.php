<?php

namespace App\Http\Controllers;

use App\Mail\NotifikasiMailer;
use App\Models\Pengumuman;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class KontrolPengumuman extends Controller
{
    public function index () {
        return view('pages/dashboard/super-admin/kelola-notifikasi/kelola-notifikasi');    
    }

    public function daftarPengumuman (Request $req, $sistem) {
        $pengumuman = Pengumuman::where(function (Builder $query) use ($req, $sistem) {
            $query -> where('sistem', $sistem);
            if ($req -> pencarian) {
                $query -> where(function (Builder $query) use ($req) {
                    $query -> where('tanggalMulai', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('tanggalAkhir', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('nama', 'LIKE', '%' . $req -> pencarian . '%')
                        -> orWhere('detail', 'LIKE', '%' . $req -> pencarian . '%');
                });
            }
        }) -> latest() -> paginate(10);

        return $pengumuman;
    }

    public function daftarSLB (Request $req) {
        $pengumuman = $this -> daftarPengumuman($req, 'slb');

        $time = new \DateTime("now", new \DateTimeZone('Asia/Jakarta'));
        $notif = Pengumuman::where('sistem', 'slb')
                        -> where('tanggalMulai', '<', $time)
                        -> where('tanggalAkhir', '>', $time) -> latest() -> get();

        return view('pages/dashboard/super-admin/kelola-notifikasi/slb/kelola-notifikasi-slb', [
            'dummyData' => $pengumuman,
            'pengumuman' => $notif
        ]);
    }

    public function tampilanTambahSLB () {
        return view('pages/dashboard/super-admin/kelola-notifikasi/slb/tambah/kelola-notifikasi-slb-tambah');
    }

    public function tambahSLB (Request $req) {
        $validate = $req -> validate([
            'tanggalMulai' => 'required|date',
            'tanggalAkhir' => 'required',
            'nama' => 'required',
            'detail' => 'required',
        ]);

        $validate['sistem'] = 'slb';
        $validate['kirimEmail'] = isset($req['kirimEmail']) ? 'yes' : 'no';

        Pengumuman::create($validate);

        $date = Carbon::parse($validate['tanggalMulai']);

        if ($validate['kirimEmail'] === 'yes') {
            $users = User::where('akses', 'admin')->pluck('email')->each(function ($email) use ($validate, $date) {
                try{
                    Mail::to($email)->later($date, new NotifikasiMailer($validate));
                } catch(\Exception $e) {
                    
                }
            });
        }

        Session::flash('toast-tambah', [
            'type' => 'toast-tambah',
            'message' => 'Berhasil Menambahkan Data'
        ]);

        return redirect('/sa-kelola-notifikasi-slb');
    }

    public function tampilanEditSLB ($id) {
        $pengumuman = Pengumuman::find($id);

        if ($pengumuman) {
            return view('pages/dashboard/super-admin/kelola-notifikasi/slb/edit/kelola-notifikasi-slb-edit', [
                'DATA' => $pengumuman
            ]);
        }

        return back();
    }

    public function editSLB (Request $req, $id) {
        $pengumuman = Pengumuman::find($id);

        if ($pengumuman) {
            if ($req['tanggalMulai']) {
                $pengumuman -> tanggalMulai = $req['tanggalMulai'];
            }
            if ($req['tanggalAkhir']) {
                $pengumuman -> tanggalAkhir = $req['tanggalAkhir'];
            }
            if ($req['nama']) {
                $pengumuman -> nama = $req['nama'];
            }
            if ($req['detail']) {
                $pengumuman -> detail = $req['detail'];
            }

            $pengumuman -> kirimEmail = isset($req['kirimEmail']) ? 'yes' : 'no';

            $pengumuman -> save();

            Session::flash('toast-edit', [
                'type' => 'toast-edit',
                'message' => 'Berhasil Edit Data'
            ]);

            return redirect('/sa-kelola-notifikasi-slb');
        }
    }

    public function hapusSLB ($id) {
        if (Pengumuman::find($id)) {
            Pengumuman::find($id) -> delete();
        }

        Session::flash('toast-hapus', [
            'type' => 'toast-hapus',
            'message' => 'Berhasil Hapus Data'
        ]);

        return redirect('/sa-kelola-notifikasi-slb');
    }

    public function daftarSI (Request $req) {
        $pengumuman = $this -> daftarPengumuman($req, 'si');

        $time = new \DateTime("now", new \DateTimeZone('Asia/Jakarta'));
        $notif = Pengumuman::where('sistem', 'si')
                        -> where('tanggalMulai', '<', $time)
                        -> where('tanggalAkhir', '>', $time) -> latest() -> get();

        return view('pages/dashboard/super-admin/kelola-notifikasi/sekolah-inklusi/kelola-notifikasi-si', [
            'dummyData' => $pengumuman,
            'pengumuman' => $notif
        ]);
    }

    public function tampilanTambahSI () {
        return view('pages/dashboard/super-admin/kelola-notifikasi/sekolah-inklusi/tambah/tambah-notifikasi-si');
    }

    public function tambahSI (Request $req) {
        $validate = $req -> validate([
            'tanggalMulai' => 'required',
            'tanggalAkhir' => 'required',
            'nama' => 'required',
            'detail' => 'required'
        ]);

        $validate['sistem'] = 'si';

        Pengumuman::create($validate);

        Session::flash('toast-tambah', [
            'type' => 'toast-tambah',
            'message' => 'Berhasil Menambahkan Data'
        ]);

        return redirect('/sa-kelola-notifikasi-si');
    }

    public function tampilanEditSI ($id) {
        $pengumuman = Pengumuman::find($id);

        if ($pengumuman) {
            return view('pages/dashboard/super-admin/kelola-notifikasi/sekolah-inklusi/edit/edit-notifikasi-si', [
                'DATA' => $pengumuman
            ]);    
        }

        return back();
    }

    public function editSI (Request $req, $id) {
        $pengumuman = Pengumuman::find($id);

        if ($pengumuman) {
            if ($req['tanggalMulai']) {
                $pengumuman -> tanggalMulai = $req['tanggalMulai'];
            }
            if ($req['tanggalAkhir']) {
                $pengumuman -> tanggalAkhir = $req['tanggalAkhir'];
            }
            if ($req['nama']) {
                $pengumuman -> nama = $req['nama'];
            }
            if ($req['detail']) {
                $pengumuman -> detail = $req['detail'];
            }

            $pengumuman -> save();

            Session::flash('toast-edit', [
                'type' => 'toast-edit',
                'message' => 'Berhasil Edit Data'
            ]);

            return redirect('/sa-kelola-notifikasi-si');
        }
    }

    public function hapusSI ($id) {
        if (Pengumuman::find($id)) {
            Pengumuman::find($id) -> delete();
        }

        Session::flash('toast-hapus', [
            'type' => 'toast-hapus',
            'message' => 'Berhasil Hapus Data'
        ]);

        return redirect('/sa-kelola-notifikasi-si');
    }
}
