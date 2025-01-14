<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function admin()
    {
        return "You are admin..!!";
    }
    public function operator()
    {
        return "You are operator!!";
    }
    public function manager()
    {
        return "You are manager..!!";
    }
    public function verifikator()
    {
        return "You are verifikator..!!";
    }
    public function login()
    {
        return view('auth.login');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
