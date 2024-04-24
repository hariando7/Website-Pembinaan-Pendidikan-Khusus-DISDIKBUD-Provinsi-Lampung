<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use App\Mail\OtpSender;

use App\Models\User;

use Illuminate\Support\Facades\Session;

class KontrolOtentifikasi extends Controller
{
    public function otentifikasi (Request $req) {
        $validasi = $req -> validate([
            'email' => 'required|email|exists:pengguna',
            'password' => 'required'
        ]);

        $pengguna = User::firstWhere('email', $validasi['email']);

        if (Auth::attempt($validasi) && $pengguna && Hash::check($validasi['password'], $pengguna -> password)) {
            $req -> session() -> regenerate();

            if ($pengguna -> akses === 'superAdmin') {
                Session::flash('toast-login-sukses', [
                    'type' => 'toast-login-sukses',
                    'message' => 'Berhasil Login Super Admin. Selamat Datang'
                ]);
                return redirect('/sa-kelola-notifikasi');
            }
            Session::flash('toast-login-sukses', [
                    'type' => 'toast-login-sukses',
                    'message' => 'Berhasil Login Admin. Selamat Datang'
                ]);
            return redirect('/admin-home-slb');
        } else {
        Session::flash('toast-login-gagal', [
            'type' => 'toast-login-gagal',
            'message' => 'Login Gagal, Kesalahan Data.'
        ]);
        return redirect('/login');
        }
    }

    public function lupaPassword (Request $req) {
        $validasi = $req -> validate([
            'email' => 'required|email'
        ]);

        $pengguna = User::firstWhere('email', $validasi['email']);

        if ($pengguna) {
            $temp = ['otp' => $pengguna -> otp];
            if (!$pengguna -> otp) {
                $otp = rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9) . rand(0,9);
                $temp = ['otp' => $otp];

                User::where('email', $validasi['email']) -> update($temp);
            }
            Mail::to($validasi['email']) -> send(new OtpSender($temp));

            return redirect('/otp?email=' . $validasi['email']);
        }

        return back();
    }

    public function verifikasiOtp (Request $req) {
        $validasi = $req -> validate([
            'email' => 'required|email',
            'otp' => 'required'
        ]);

        $pengguna = User::firstWhere('email', $validasi['email']);

        if ($pengguna) {
            if ($pengguna -> otp === $validasi['otp']) {
                return redirect('/new-password?email=' . $validasi['email'] . '&otp=' . $validasi['otp']);
            }
        }

        return back();
    }

    public function ubahKataSandi (Request $req) {
        $validasi = $req -> validate([
            'email' => 'required|email',
            'password' => 'required',
            'otp' => 'required'
        ]);

        $pengguna = User::firstWhere('email', $validasi['email']);

        if ($pengguna) {
            if ($pengguna -> otp === $validasi['otp']) {
                User::find($pengguna -> id)->update([
                    'password' => Hash::make($validasi['password']),
                    'otp' => null
                ]);

                return redirect('/login');
            }
        }

        return back();
    }

    public function keluar () {
        Auth::logout();

        request() -> session() -> invalidate();

        request() -> session() -> regenerateToken();

        return back();
    }
}
