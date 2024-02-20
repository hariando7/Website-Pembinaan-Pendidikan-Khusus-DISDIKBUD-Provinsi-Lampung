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
    Route::get('/', 'home');
    Route::get('/slb', 'slb');

    Route::get('/login', 'login');
    Route::get('/lupa-password', 'lupapassword');
    Route::get('/otp', 'otp');
    Route::get('/new-password', 'newpassword');

    // Home Admin SLB
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


});

// Route::get('/slb', function () {
//     return view('pages/landing/slb');
// });

Route::get('/sekolah-inklusi', function () {
    return view('pages/landing/sekolah-inklusi');
});

Route::get('/tentang', function () {
    return view('pages/landing/tentang');
});

// Route::get('/login', function () {
//     return view('pages/dashboard/login');
// });
