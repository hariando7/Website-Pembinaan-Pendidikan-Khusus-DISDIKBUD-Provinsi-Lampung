<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GeneralPage;

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
    // Awal Landing
    Route::get('/', 'home');
    Route::get('/slb', 'slb');
    Route::get('/portal-sekolah-inklusi', 'portalsekolahinklusi');
    Route::get('/tentang', 'tentang');
    // Akhir Landing

    // Awal Auth Admin SLB dan SA
    Route::get('/login', 'login');
    Route::get('/lupa-password', 'lupapassword');
    Route::get('/otp', 'otp');
    Route::get('/new-password', 'newpassword');
    // Akhir Auth Admin SLB dan SA

    // Awal Admin Home SLB
    Route::get('/admin-home-slb', 'adminhomeslb');
    // Guru
    Route::get('/admin-guru-slb', 'adminguruslb');
    Route::get('/admin-tambah-guru-slb', 'admintambahguruslb');
    Route::get('/admin-edit-guru-slb', 'admineditguruslb');
    // Kebutuhan guru
    Route::get('/admin-kebutuhan-guru-slb', 'adminkebutuhanguruslb');
    Route::get('/admin-tambah-kebutuhan-guru-slb', 'admintambahkebutuhanguruslb');
    Route::get('/admin-edit-kebutuhan-guru-slb', 'admineditkebutuhanguruslb');
    // Peserta Didik
    Route::get('/admin-pesertadidik-slb', 'adminpesertadidikslb');
    Route::get('/admin-tambah-pesertadidik-slb', 'admintambahpesertadidikslb');
    Route::get('/admin-edit-pesertadidik-slb', 'admineditpesertadidikslb');
    // Sarpras
    Route::get('/admin-sarpras-slb', 'adminsarprasslb');
    Route::get('/admin-tambah-sarpras-slb', 'admintambahsarprasslb');
    Route::get('/admin-edit-sarpras-slb', 'admineditsarprasslb');
    // Tendik
    Route::get('/admin-tendik-slb', 'admintendikslb');
    Route::get('/admin-tambah-tendik-slb', 'admintambahtendikslb');
    Route::get('/admin-edit-tendik-slb', 'adminedittendikslb');

    // Awal Super Admin
    // Kelola Admin SLB
    Route::get('/kelola-admin-slb', 'kelolaadminslb');
    Route::get('/tambah-admin-slb', 'tambahadminslb');
    Route::get('/edit-admin-slb', 'editadminslb');
    // SLB Dashboard
    Route::get('/sa-dashboard-slb', 'sadashboardslb');
    // Kelola Pengumuman SLB
    Route::get('/sa-kelola-pengumuman-slb', 'sakelolapengumumanslb');
    // statistik
    Route::get('/sa-statistik-slb', 'sastatistikslb');
    Route::get('/sa-statistik-guru', 'sastatistikguru');
    Route::get('/sa-statistik-kebutuhan-guru', 'sastatistikkebutuhanguru');
    Route::get('/sa-statistik-peserta-didik', 'sastatistikpesertadidik');
    Route::get('/sa-statistik-sarpras', 'sastatistiksarpras');
    Route::get('/sa-statistik-tendik', 'sastatistiktendik');
    // Data Guru SLB
    Route::get('/sa-guru-slb', 'saguruslb');
    // Data Kebutuhan Guru
    Route::get('/sa-kebutuhan-guru-slb', 'sakebutuhanguruslb');
    // Data Peserta Didik SLB
    Route::get('/sa-peserta-didik-slb', 'sapesertadidikslb');
    // Data Sarpras SLB
    Route::get('/sa-sarpras-slb', 'sasarprasslb');
    // Data Tendik SLB
    Route::get('/sa-tendik-slb', 'satendikslb');

    // Sekolah Inklusi
    Route::get('/sa-dashboard-si', 'sadashboardsi');
    Route::get('/sa-kelola-admin-si', 'sakelolaadminsi');
    Route::get('/sa-laporan-pendataan-si', 'salaporanpendataansi');
    Route::get('/sa-detail-laporan-pendataan-si', 'sadetaillaporanpendataansi');
    Route::get('/sa-lihat-pendataan-si', 'salihatpendataansi');
    Route::get('/sa-detail-lihat-pendataan-si', 'sadetaillihatpendataansi');
});

// Route::get('/slb', function () {
//     return view('pages/landing/slb');
// });