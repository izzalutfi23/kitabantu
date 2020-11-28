<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donasimodel;
use App\Models\Acaramodel;

class Admincontroller extends Controller
{
    // Menampilkan halaman admin
    public function index(){
        return view('admin/index');
    }

    // Menampilkan halaman admin menu donasi
    public function donasi(){
        $donasi = Donasimodel::all();
        return view('admin/donasi', ['donasi' => $donasi]);
    }

    // Menampilkan detail donasi
    public function detaildonasi(Donasimodel $donasimodel){
        return view('admin.detaildonasi', ['donasi' => $donasimodel]);
    }

    // Mengubah status donasi yang awlanya pengajuan menjadi aktif
    public function changestatus(Donasimodel $donasimodel){
        Donasimodel::whereId($donasimodel->id)->update([
            'status' => 'aktif'
        ]);

        return redirect('/dashboard/donasi')->with('msg', 'Status berhasil diperbarui!');
    }

    // Hapus data donasi
    public function deletedonasi(Donasimodel $donasimodel){
        Donasimodel::destroy('id', $donasimodel->id);
        return redirect('/dashboard/donasi')->with('msg', 'Donasi berhasil dihapus!');
    }
}
