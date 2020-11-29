<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Relawancontroller extends Controller
{
    // Halaman awal
    public function index(){
        return view('relawan.index');
    }

    // Halaman kontribusi
    public function kontribusi(){
        return view('relawan.kontribusi');
    }

    // Halaman donasi
    public function donasi(){
        return view('relawan.donasi');
    }
}
