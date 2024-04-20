<?php

use App\Http\Controllers\GeneralPage;
use App\Http\Controllers\KontrolGuru;
use App\Http\Controllers\KontrolKarya;
use App\Http\Controllers\KontrolKebutuhanGuru;
use App\Http\Controllers\KontrolPesertaDidik;
use App\Http\Controllers\KontrolSaranaPrasarana;
use App\Http\Controllers\KontrolSekolahInklusi;
use App\Http\Controllers\KontrolTenagaPendidik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/peserta-didik', [KontrolPesertaDidik::class, 'lihatSemua']);
Route::get('/guru', [KontrolGuru::class, 'lihatSemua']);
Route::get('/tenaga-pendidik', [KontrolTenagaPendidik::class, 'lihatSemua']);
Route::get('/sarana-prasarana', [KontrolSaranaPrasarana::class, 'lihatSemua']);
Route::get('/kebutuhan-guru', [KontrolKebutuhanGuru::class, 'lihatSemua']);
Route::get('/karya', [KontrolKarya::class, 'lihatSemua']);
Route::get('/sekolah-inklusi', [KontrolSekolahInklusi::class, 'lihatSemua']);

Route::get('/daftar-tahun', [GeneralPage::class, 'daftarTahun']);
Route::get('/daftar-sekolah', [GeneralPage::class, 'daftarSekolah']);

Route::get('/statistik-peserta-didik-sekolah', [KontrolPesertaDidik::class, 'statistikSekolah']);
Route::get('/statistik-peserta-didik-kelas', [KontrolPesertaDidik::class, 'statistikKelas']);
Route::get('/statistik-peserta-didik-jenisKetunaan', [KontrolPesertaDidik::class, 'statistikJenisKetunaan']);
Route::get('/statistik-peserta-didik-tahun', [KontrolPesertaDidik::class, 'statistikTahun']);



Route::get('/statistik-guru', [KontrolGuru::class, 'statistik']);
Route::get('/statistik-tenaga-pendidik', [KontrolTenagaPendidik::class, 'statistik']);
Route::get('/statistik-sarana-prasarana', [KontrolSaranaPrasarana::class, 'statistik']);
Route::get('/statistik-kebutuhan-guru', [KontrolKebutuhanGuru::class, 'statistik']);
Route::get('/statistik-karya', [KontrolKarya::class, 'statistik']);