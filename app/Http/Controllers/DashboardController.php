<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function home()
    {
        return view('home');
    }

    public function akun()
    {
        return view('akun');
    }

    public function tambahakun()
    {
        return view('tambahakun');
    }
}
