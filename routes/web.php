<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GeneralPage;
use App\Http\Controllers\KontrolOtentifikasi;
use App\Http\Controllers\KontrolPengguna;
use App\Http\Controllers\KontrolPesertaDidik;
use App\Http\Controllers\KontrolGuru;
use App\Http\Controllers\KontrolTenagaPendidik;
use App\Http\Controllers\KontrolKebutuhanGuru;
use App\Http\Controllers\KontrolKarya;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [GeneralPage::class, 'home']);

Route::controller(GeneralPage::class) -> group(function () {
    // Awal Landing Page
    Route::get('/', 'home');
    Route::get('/sekolah-luar-biasa', 'slb');
    Route::get('/karya-slb', 'karyaslb');
    Route::get('/tentang-bidang-pembinaan-pendidikan-khusus', 'tentang');
    // Akhir Landing Page

    // Awal Auth Admin SLB dan SA
    Route::get('/login', 'login') -> name('login');
    Route::get('/lupa-password', 'lupapassword');
    Route::get('/otp', 'otp');
    Route::get('/new-password', 'newpassword');
    // Akhir Auth Admin SLB dan SA

    // Auth Sekolah Inklusi
    Route::get('/pendataan-sekolah-inklusi', 'pendataansekolahinklusi');
    // Akhir Auth Sekolah Inklusi

    // Awal Admin Home SLB
    Route::get('/admin-home-slb', 'adminhomeslb') -> middleware('admin');
    // Guru
    // Route::get('/admin-guru-slb', 'adminguruslb');
    Route::get('/admin-guru-slb/tambah', 'admintambahguruslb');
    // Route::get('/admin-guru-slb/edit', 'admineditguruslb');
    // Kebutuhan guru
    // Route::get('/admin-kebutuhan-guru-slb', 'adminkebutuhanguruslb');
    Route::get('/admin-kebutuhan-guru-slb/tambah', 'admintambahkebutuhanguruslb');
    // Route::get('admin-kebutuhan-guru-slb/edit', 'admineditkebutuhanguruslb');
    // Peserta Didik
    // Route::get('/admin-pesertadidik-slb', 'adminpesertadidikslb');
    Route::get('/admin-pesertadidik-slb/tambah', 'admintambahpesertadidikslb') -> middleware('admin');
    // Route::get('/admin-pesertadidik-slb/edit', 'admineditpesertadidikslb');
    // Sarpras
    Route::get('/admin-sarpras-slb', 'adminsarprasslb');
    Route::get('/admin-sarpras-slb/tambah', 'admintambahsarprasslb');
    Route::get('/admin-sarpras-slb/edit', 'admineditsarprasslb');
    // Tendik
    // Route::get('/admin-tendik-slb', 'admintendikslb');
    Route::get('/admin-tendik-slb/tambah', 'admintambahtendikslb');
    // Route::get('/admin-tendik-slb/edit', 'adminedittendikslb');
    // Karya
    Route::get('/admin-karya-slb', 'adminkaryaslb');
    Route::get('/admin-karya-slb/tambah', 'admintambahkaryaslb');
    Route::get('/admin-karya-slb/edit', 'admineditkaryaslb');
    // Akhir Admin Home SLB

    // Awal Super Admin
    // Awal sa kelola sistem    
    Route::get('/sa-kelola-notifikasi', 'sakelolanotifikasi');
    Route::get('/sa-kelola-notifikasi-slb', 'sakelolanotifikasislb');
    Route::get('/sa-kelola-notifikasi-slb/tambah', 'sakelolanotifikasislbtambah');
    Route::get('/sa-kelola-notifikasi-slb/edit', 'sakelolanotifikasislbedit');
    Route::get('/sa-kelola-notifikasi-si', 'sakelolanotifikasisi');
    Route::get('/sa-kelola-notifikasi-si/tambah', 'sakelolanotifikasisitambah');
    Route::get('/sa-kelola-notifikasi-si/edit', 'sakelolanotifikasisiedit');
    // akhir sa kelola notifikasi

    // Kelola Admin SLB
    // Route::get('/kelola-admin-slb', 'kelolaadminslb');
    Route::get('/kelola-admin-slb/tambah', 'tambahadminslb');
    Route::get('/kelola-admin-slb/edit', 'editadminslb');
    Route::get('/kelola-admin-slb/lihat', 'lihatadminslb');

    // SLB Dashboard
    Route::get('/sa-dashboard-slb', 'sadashboardslb');
    // statistik
    Route::get('/sa-statistik-slb', 'sastatistikslb');
    Route::get('/sa-statistik-guru', 'sastatistikguru');
    Route::get('/sa-statistik-kebutuhan-guru', 'sastatistikkebutuhanguru');
    Route::get('/sa-statistik-peserta-didik', 'sastatistikpesertadidik');
    Route::get('/sa-statistik-sarpras', 'sastatistiksarpras');
    Route::get('/sa-statistik-tendik', 'sastatistiktendik');
    Route::get('/sa-statistik-karya', 'sastatistikkarya');

    // Awal Super admin data SLB
    // Data Guru SLB
    // Route::get('/sa-guru-slb', 'saguruslb');
    // Data Kebutuhan Guru
    // Route::get('/sa-kebutuhan-guru-slb', 'sakebutuhanguruslb');
    // Data Peserta Didik SLB
    // Route::get('/sa-peserta-didik-slb', 'sapesertadidikslb');
    // Data Sarpras SLB
    Route::get('/sa-sarpras-slb', 'sasarprasslb');
    // Data Tendik SLB
    // Route::get('/sa-tendik-slb', 'satendikslb');
    // Data Karya SLB
    Route::get('/sa-karya-slb', 'sakaryaslb');
    // Akhir Super Admin data SLB

    // Awal Super Admin Sekolah Inklusi
    Route::get('/sa-pendataan-si', 'sapendataansi');
    Route::get('/sa-pendataan-si/edit', 'sapendataansiedit');
    Route::get('/sa-pendataan-si/lihat', 'sapendataansilihat');
    // Akhir Super Admin Sekolah Inklusi
});

Route::get('/home', function () {
    return redirect('/login');
});

Route::controller(KontrolOtentifikasi::class) -> group(function () {
    Route::post('/login', 'otentifikasi');
    Route::get('/logout', 'keluar');
});

Route::controller(KontrolPengguna::class) -> group(function () {
    Route::middleware('superAdmin') -> group(function () {
        Route::get('/kelola-admin-slb', 'daftarPenggunaSuperAdmin');
        Route::post('/kelola-admin-slb/tambah', 'tambah');
    });
});

Route::controller(KontrolPesertaDidik::class) -> group(function () {
    Route::middleware('admin') -> group(function () {
        Route::get('/admin-pesertadidik-slb', 'daftarPesertaDidikAdmin');
        Route::post('/admin-pesertadidik-slb/tambah', 'tambah');
        Route::get('/admin-pesertadidik-slb/delete/{id}', 'hapus');
        Route::get('/admin-pesertadidik-slb/edit/{id}', 'tampilanEdit');
        Route::put('/admin-pesertadidik-slb/edit/{id}', 'ubah');
    });
});

Route::controller(KontrolGuru::class) -> group(function () {
    Route::middleware('admin') -> group(function () {
        Route::get('/admin-guru-slb', 'daftarGuruAdmin');
        Route::post('/admin-guru-slb/tambah', 'tambah');
        Route::get('/admin-guru-slb/delete/{id}', 'hapus');
        Route::get('/admin-guru-slb/edit/{id}', 'tampilanEdit');
        Route::put('/admin-guru-slb/edit/{id}', 'ubah');
    });
});

Route::controller(KontrolTenagaPendidik::class) -> group(function () {
    Route::middleware('admin') -> group(function () {
        Route::get('/admin-tendik-slb', 'daftarTenagaPendidikAdmin');
        Route::post('/admin-tendik-slb/tambah', 'tambah');
        Route::get('/admin-tendik-slb/delete/{id}', 'hapus');
        Route::get('/admin-tendik-slb/edit/{id}', 'tampilanEdit');
        Route::put('/admin-tendik-slb/edit/{id}', 'ubah');
    });
});

Route::controller(KontrolKebutuhanGuru::class) -> group(function () {
    Route::middleware('admin') -> group(function () {
        Route::get('/admin-kebutuhan-guru-slb', 'daftarKebutuhanGuruAdmin');
        Route::post('/admin-kebutuhan-guru-slb/tambah', 'tambah');
        Route::get('/admin-kebutuhan-guru-slb/delete/{id}', 'hapus');
        Route::get('/admin-kebutuhan-guru-slb/edit/{id}', 'tampilanEdit');
        Route::put('/admin-kebutuhan-guru-slb/edit/{id}', 'ubah');
    });
});

Route::controller(KontrolKarya::class) -> group(function () {
    Route::middleware('admin') -> group(function () {
        Route::post('/admin-karya-slb/tambah', 'tambah');
    });
});




Route::controller(KontrolPesertaDidik::class) -> group(function () {
    Route::middleware('superAdmin') -> group(function () {
        Route::get('/sa-peserta-didik-slb', 'daftarPesertaDidikSuperAdmin');
    });
});
Route::controller(KontrolGuru::class) -> group(function () {
    Route::middleware('superAdmin') -> group(function () {
        Route::get('/sa-guru-slb', 'daftarGuruSuperAdmin');
    });
});
Route::controller(KontrolTenagaPendidik::class) -> group(function () {
    Route::middleware('superAdmin') -> group(function () {
        Route::get('/sa-tendik-slb', 'daftarTenagaPendidikSuperAdmin');
    });
});
Route::controller(KontrolKebutuhanGuru::class) -> group(function () {
    Route::middleware('superAdmin') -> group(function () {
        Route::get('/sa-kebutuhan-guru-slb', 'daftarKebutuhanGuruSuperAdmin');
    });
});




// Route::get('/slb', function () {
//     return view('pages/landing/slb');
// });
Route::get('/play-sound/{text}', 'SoundController@playSound')->name('play-sound');
