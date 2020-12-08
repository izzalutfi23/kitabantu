<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donasimodel;
use App\Models\Acaramodel;
use App\Models\Relawandonasi;
use App\Models\Relawanacara;

class Organisasicontroller extends Controller
{
    public function index(){
        $donasi = Donasimodel::where('id_user', Auth()->user()->id)->get();
        $acara = Acaramodel::where('id_user', Auth()->user()->id)->get();
        $rdonasi = Relawandonasi::all();
        $racara = Relawanacara::all();
        $data = [
            'acara' => $acara,
            'donasi' => $donasi,
            'racara' => $racara,
            'rdonasi' => $rdonasi
        ];
        return view('organisasi/index', $data);
        // return $rdonasi;
    }
}
