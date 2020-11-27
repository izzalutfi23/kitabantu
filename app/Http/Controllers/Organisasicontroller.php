<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Organisasicontroller extends Controller
{
    public function index(){
        return view('organisasi/index');
    }
}
