<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('pages/landing/home');
});

Route::get('/slb', function () {
    return view('pages/landing/slb');
});

Route::get('/sekolah-inklusi', function () {
    return view('pages/landing/sekolah-inklusi');
});

Route::get('/tentang', function () {
    return view('pages/landing/tentang');
});

Route::get('/login', function () {
    return view('pages/dashboard/login');
});
