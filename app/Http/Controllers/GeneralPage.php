<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralPage extends Controller
{
    // Awal Landing page
    function home () {
        return view('pages/landing/home');
    }
    function slb () {
        return view('pages/landing/slb');
    }
    function karyaslb () {
        return view('pages/landing/karya-slb');
    }
    function tentang () {
        return view('pages/landing/tentang');
    }
    // Akhir landing page

    // Awal Auth Admin SLB dan SA
    function login () {
        return view('pages/dashboard/login');
    }
    function lupapassword () {
        return view('pages/dashboard/lupa-password');
    }
    function otp () {
        return view('pages/dashboard/otp');
    }
    function newpassword () {
        return view('pages/dashboard/new-password');
    }
    // Akhir Auth Admin SLB dan SA

    // Awal Admin Home SLB
    function adminhomeslb () {
        return view('pages/dashboard/admin-slb/admin-home-slb');
    }
    // Guru
    function adminguruslb () {
        return view('pages/dashboard/admin-slb/guru/admin-guru-slb');
    }
    function admintambahguruslb () {
        return view('pages/dashboard/admin-slb/guru/tambah/tambah-guru-slb');
    }
    function admineditguruslb () {
        return view('pages/dashboard/admin-slb/guru/edit/edit-guru-slb');
    }
    // Kebutuhan guru
    function adminkebutuhanguruslb () {
        return view('pages/dashboard/admin-slb/kebutuhan-guru/admin-kebutuhan-guru-slb');
    }
    function admintambahkebutuhanguruslb () {
        return view('pages/dashboard/admin-slb/kebutuhan-guru/tambah/tambah-kebutuhan-guru-slb');
    }
    function admineditkebutuhanguruslb () {
        return view('pages/dashboard/admin-slb/kebutuhan-guru/edit/edit-kebutuhan-guru-slb');
    }
    // Peserta didik
    function adminpesertadidikslb () {
        return view('pages/dashboard/admin-slb/peserta-didik/admin-pesertadidik-slb');
    }
    function admintambahpesertadidikslb () {
        return view('pages/dashboard/admin-slb/peserta-didik/tambah/tambah-pesertadidik-slb');
    }
    function admineditpesertadidikslb () {
        return view('pages/dashboard/admin-slb/peserta-didik/edit/edit-pesertadidik-slb');
    }
    // sarpras
    function adminsarprasslb () {
        return view('pages/dashboard/admin-slb/sarpras/admin-sarpras-slb');
    }      
    function admintambahsarprasslb () {
        return view('pages/dashboard/admin-slb/sarpras/tambah/tambah-sarpras-slb');
    }
    function admineditsarprasslb () {
        return view('pages/dashboard/admin-slb/sarpras/edit/edit-sarpras-slb');
    } 
    // Tendik
    function admintendikslb () {
        return view('pages/dashboard/admin-slb/tendik/admin-tendik-slb');
    }
    function admintambahtendikslb () {
        return view('pages/dashboard/admin-slb/tendik/tambah/tambah-tendik-slb');
    }
    function adminedittendikslb () {
        return view('pages/dashboard/admin-slb/tendik/edit/edit-tendik-slb');
    } 
    // Akhir Admin Home SLB

    // Awal Super Admin
    // Kelola Admin SLB
    function kelolaadminslb () {
        return view('pages/dashboard/super-admin/kelola-admin-slb/kelola-admin-slb');
    }
    function tambahadminslb () {
        return view('pages/dashboard/super-admin/kelola-admin-slb/tambah/tambah-admin-slb');
    }
    function editadminslb () {
        return view('pages/dashboard/super-admin/kelola-admin-slb/edit/edit-admin-slb');
    }
    // SLB Dashboard
    function sadashboardslb () {
        return view('pages/dashboard/super-admin/slb/sa-dashboard-slb');
    }
    // statistik
    function sastatistikslb () {
        return view('pages/dashboard/super-admin/slb/statistik-slb/sa-statistik-slb');
    }
    function sastatistikguru () {
        return view('pages/dashboard/super-admin/slb/statistik-slb/sa-statistik-guru');
    }
    function sastatistikkebutuhanguru () {
        return view('pages/dashboard/super-admin/slb/statistik-slb/sa-statistik-kebutuhan-guru');
    }
    function sastatistikpesertadidik () {
        return view('pages/dashboard/super-admin/slb/statistik-slb/sa-statistik-peserta-didik');
    }
    function sastatistiksarpras () {
        return view('pages/dashboard/super-admin/slb/statistik-slb/sa-statistik-sarpras');
    }
    function sastatistiktendik () {
        return view('pages/dashboard/super-admin/slb/statistik-slb/sa-statistik-tendik');
    }
    // Data Guru SLB
    function saguruslb () {
        return view('pages/dashboard/super-admin/slb/guru/sa-guru-slb');
    }
    // Data Kebutuhan Guru
    function sakebutuhanguruslb () {
        return view('pages/dashboard/super-admin/slb/kebutuhan-guru/sa-kebutuhan-guru-slb');
    }
    // Data Peserta Didik SLB
    function sapesertadidikslb () {
        return view('pages/dashboard/super-admin/slb/peserta-didik/sa-peserta-didik-slb');
    }
    // Data Sarpras SLB
    function sasarprasslb () {
        return view('pages/dashboard/super-admin/slb/sarpras/sa-sarpras-slb');
    }
    // Data Tendik SLB
    function satendikslb () {
        return view('pages/dashboard/super-admin/slb/tendik/sa-tendik-slb');
    }

    // sa Sekolah Inklusi
    function sapendataansi () {
        return view('pages/dashboard/super-admin/sekolah-inklusi/sa-pendataan-si');
    }
    function sapendataansiedit() {
        return view('pages/dashboard/super-admin/sekolah-inklusi/edit/edit-pendataan-si');
    }
    function sapendataansilihat() {
        return view('pages/dashboard/super-admin/sekolah-inklusi/lihat/lihat-pendataan-si');
    }
    
    // Awal sa kelola sistem    
    function sakelolasistem () {
        return view('pages/dashboard/super-admin/kelola-sistem/kelola-sistem');
    }
    function saonoffsistem () {
        return view('pages/dashboard/super-admin/kelola-sistem/onoff/onoff-sistem');
    }
    function sakelolapengumumanslb () {
        return view('pages/dashboard/super-admin/kelola-sistem/slb/kelola-pengumuman-slb');
    }
    function sakelolapengumumanslbtambah () {
        return view('pages/dashboard/super-admin/kelola-sistem/slb/tambah/kelola-pengumuman-slb-tambah');
    }
    function sakelolapengumumanslbedit () {
        return view('pages/dashboard/super-admin/kelola-sistem/slb/edit/kelola-pengumuman-slb-edit');
    }
    function sakelolapengumumansi () {
        return view('pages/dashboard/super-admin/kelola-sistem/sekolah-inklusi/kelola-pengumuman-si');
    }
    function sakelolapengumumansitambah () {
        return view('pages/dashboard/super-admin/kelola-sistem/sekolah-inklusi/tambah/kelola-pengumuman-si-tambah');
    }
    function sakelolapengumumansiedit () {
        return view('pages/dashboard/super-admin/kelola-sistem/sekolah-inklusi/edit/kelola-pengumuman-si-edit');
    }
    // Akhir sa kelola sistem
    // Akhir Super Admin

    // Awal Auth Admin Sekolah Inklusi
    function loginsi () {
        return view('pages/dashboard/admin-sekolah-inklusi/login-si');
    }
    function registrasisi () {
        return view('pages/dashboard/admin-sekolah-inklusi/registrasi-si');
    }
    function lupapasswordsi () {
        return view('pages/dashboard/admin-sekolah-inklusi/lupa-password-si');
    }
    function otpsi () {
        return view('pages/dashboard/admin-sekolah-inklusi/otp-si');
    }
    function newpasswordsi () {
        return view('pages/dashboard/admin-sekolah-inklusi/new-password-si');
    }
    // Akhir Auth Admin Sekolah Inklusi

    // Awal Admin Sekolah Inklusi
    function pendataansekolahinklusi () {
        return view('pages/dashboard/admin-sekolah-inklusi/pendataan-sekolah-inklusi');
    }
    // Akhir Admin Sekolah Inklusi
    
}
