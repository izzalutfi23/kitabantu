<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Usercontroller extends Controller
{
    public function index(){
        $user = User::all();
        return view('admin.akun', ['user' => $user]);
    }

    // Hapus akun
    public function destroy(User $user){
        User::destroy($user->id);

        return redirect('/dashboard/akun')->with('msg', 'Akun berhasil dihapus!');
    }
}
