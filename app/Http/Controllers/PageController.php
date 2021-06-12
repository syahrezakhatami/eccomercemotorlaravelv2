<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('dashboard');
    }

    public function yamaha()
    {
        return view('motoryamaha');
    }

    public function honda()
    {
        return view('motorhonda');
    }

    public function suzuki()
    {
        return view('motorsuzuki');
    }

    public function ducati()
    {
        return view('motorducati');
    }

    public function aprilia()
    {
        return view('motoraprilia');
    }

    public function ktpsaya()
    {
        return view('ktp');
    }

    public function simsaya()
    {
        return view('sim');
    }

    public function main()
    {
        return view('login');
    }

    public function regis()
    {
        return view('register');
    }

    public function create()
    {
        return view ('tambah');
    }

    public function edit()
    {
        return view ('ubah');
    }

    
    
    
}

