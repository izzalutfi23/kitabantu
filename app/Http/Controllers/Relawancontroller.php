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

    // Detail donasi
    public function detaildonasi(){
        return view('relawan.detaildonasi');
    }

    // Input donasi
    public function inputdonasi(){
        return view('relawan.adddonasi');
    }

    // Halaman acara
    public function acara(){
        return view('relawan.acara');
    }

    // Detail acara
    public function detailacara(){
        return view('relawan.detailacara');
    }

    // Input acara
    public function inputacara(){
        return view('relawan.addacara');
    }

    // Pilih akun
    public function pilihakun(){
        return view('relawan.pilihakun');
    }

    // Halaman registrasi donasi
    public function regisdonasi(){
        return view('relawan.registrasi');
    }

    // Halaman registrasi organisasi
    public function regisorganisasi(){
        return view('relawan.registrasi');
    }
}
