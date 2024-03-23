<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

use App\Mail\OtpSender;

use App\Models\User;

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

            return 'true';
        }

        return 'false';
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

            return true;
        }

        return false;
    }

    public function verifikasiOtp (Request $req) {
        $validasi = $req -> validate([
            'email' => 'required|email',
            'otp' => 'required'
        ]);

        $pengguna = User::firstWhere('email', $validasi['email']);

        if ($pengguna) {
            if ($pengguna -> otp === $validasi['otp']) {
                return true;
            }
        }

        return false;
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

                return true;
            }
        }

        return false;
    }

    public function keluar () {
        Auth::logout();
 
        request() -> session() -> invalidate();
     
        request() -> session() -> regenerateToken();
     
        return back();
    }
}
