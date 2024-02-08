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
}
