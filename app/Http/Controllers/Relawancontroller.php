<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Relawancontroller extends Controller
{
    public function index(){
        return view('relawan/index');
    }
}
