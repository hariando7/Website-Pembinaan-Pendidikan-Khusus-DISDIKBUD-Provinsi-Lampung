<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralPage extends Controller
{
    function home () {
        return view('pages/landing/home');
    }

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

    function slb () {
        return view('pages/landing/slb');
    }

    // Admin Home SLB
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

}
