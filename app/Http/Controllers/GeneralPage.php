<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralPage extends Controller
{
    function home () {
        return view('pages/landing/home');
    }

    function slb () {
        return view('pages/landing/slb');
    }
    function adminguruslb () {
        return view('pages/dashboard/admin-slb/guru/admin-guru-slb');
    }
    function adminkebutuhanguruslb () {
        return view('pages/dashboard/admin-slb/kebutuhan-guru/admin-kebutuhan-guru-slb');
    }
    function adminpesertadidikslb () {
        return view('pages/dashboard/admin-slb/peserta-didik/admin-pesertadidik-slb');
    }
    function adminsarprasslb () {
        return view('pages/dashboard/admin-slb/sarpras/admin-sarpras-slb');
    }       
    function admintendikslb () {
        return view('pages/dashboard/admin-slb/tendik/admin-tendik-slb');
    }
}
