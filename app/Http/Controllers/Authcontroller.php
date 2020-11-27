<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class Authcontroller extends Controller
{
    public function index(){
        return view('login');
    }

    public function postlogin(Request $request){
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password, 'role' => 'admin'])){
    		return redirect('/dashboard');
    	}else if(Auth::attempt(['username' => $request->username, 'password' => $request->password, 'role' => 'organisasi'])){
            return redirect('/organisasi');
        }
        else if(Auth::attempt(['username' => $request->username, 'password' => $request->password, 'role' => 'relawan'])){
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }

    public function logout(){
    	Auth::logout();
    	return redirect('/');
    }
}
