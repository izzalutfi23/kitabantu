<?php

namespace App\Http\Controllers;

use App\Models\Donasimodel;
use App\Models\Relawandonasi;
use Illuminate\Http\Request;

class Relawancontroller extends Controller
{
    // Halaman awal
    public function index(){
        $donasi = Donasimodel::offset(0)->limit(3)->orderBy('id', 'DESC')->get();
        return view('relawan.index', ['donasi' => $donasi]);
    }

    // Halaman kontribusi
    public function kontribusi(){
        return view('relawan.kontribusi');
    }

    // Halaman donasi
    public function donasi(){
        $donasi = Donasimodel::orderBy('id', 'DESC')->get();
        return view('relawan.donasi', ['donasi' => $donasi]);
    }

    // Detail donasi
    public function detaildonasi(Donasimodel $donasimodel){
        return view('relawan.detaildonasi', ['donasi' => $donasimodel]);
    }

    // Input donasi
    public function inputdonasi(Donasimodel $donasimodel){
        return view('relawan.adddonasi', ['donasi' => $donasimodel]);
    }

    // Insert donasi
    public function storedonasi(Request $request){
        Relawandonasi::create([
            'id_user' => $request->id_user,
            'id_donasi' => $request->id_donasi,
            'jml_uang' => $request->jml_uang,
            'barang' => $request->barang,
            'harapan' => $request->harapan
        ]);

        return redirect('donasi/input/'.$request->id_donasi)->with('msg', 'Donasi berhasil ditambahkan, silahkan cek riwayat donasi anda di menu kontribusi saya');
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
