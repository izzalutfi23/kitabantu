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

    // Halaman acara
    public function acara(){
        $acara = Acaramodel::all();
        return view('admin/acara', ['acara' => $acara]);
    }

    // Menampilkan detail acara
    public function showacara(Acaramodel $acaramodel){
        return view('admin.detailacara', ['acara' => $acaramodel]);
    }

    // Ubah status acara yg awalnya pengajuan menjadi aktif
    public function statusacara(Acaramodel $acaramodel){
        Acaramodel::whereId($acaramodel->id)->update([
            'status' => 'aktif'
        ]);

        return redirect('/dashboard/acara')->with('msg', 'Status berhasil diperbarui!');
    }

    // Hapus data acara
    public function destroyacara(Acaramodel $acaramodel){
        Acaramodel::destroy($acaramodel->id);

        return redirect('/dashboard/acara')->with('msg', 'Data acara berhasil dihapus!');
    }
}
