<?php

namespace App\Http\Controllers;

use App\Models\Donasimodel;
use App\Models\Relawandonasi;
use App\Models\User;
use App\Models\Acaramodel;
use App\Models\Relawanacara;
use Illuminate\Http\Request;

class Relawancontroller extends Controller
{
    // Halaman awal
    public function index(){
        $donasi = Donasimodel::where('status', 'aktif')->offset(0)->limit(3)->orderBy('id', 'DESC')->get();
        return view('relawan.index', ['donasi' => $donasi]);
    }

    // Halaman kontribusi
    public function kontribusi(){
        $acara = Relawanacara::where('id_user', Auth()->user()->id)->get();
        $donasi = Relawandonasi::where('id_user', Auth()->user()->id)->get();
        return view('relawan.kontribusi', ['donasi' => $donasi, 'acara' => $acara]);
    }

    // Halaman donasi
    public function donasi(){
        $donasi = Donasimodel::where('status', 'aktif')->orderBy('id', 'DESC')->withCount('r_donasi')->get();
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
        $acara = Acaramodel::where('status', 'aktif')->orderBy('id', 'DESC')->withCount(['r_acara' => function($q){
            $q->where('status', 1);
        }])->with('organisasi')->get();
        return view('relawan.acara', ['acara' => $acara]);
        // return $acara;
    }

    // Detail acara
    public function detailacara(Acaramodel $acaramodel){
        $acara = Acaramodel::whereId($acaramodel->id)->withCount(['r_acara' => function($q){
            $q->where('status', 1);
        }])->with('organisasi')->first();
        // return $acara;
        return view('relawan.detailacara', ['acara' => $acara]);
    }

    // Input acara
    public function inputacara(Acaramodel $acaramodel){
        $acara = Acaramodel::whereId($acaramodel->id)->withCount(['r_acara' => function($q){
            $q->where('status', 1);
        }])->with('organisasi')->first();
        return view('relawan.addacara', ['acara' => $acara]);
    }

    // Insert acara
    public function storeacara(Request $request){
        Relawanacara::create([
            'id_user' => $request->id_user,
            'id_acara' => $request->id_acara,
            'status' => '0',
            'harapan' => $request->harapan
        ]);

        return redirect('acara/input/'.$request->id_acara)->with('msg', 'Anda berhasil mendaftarkan diri, silahkan cek status pendaftaran anda di menu kontribusi saya');
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

    // Registrasi
    public function storeregistrasi(Request $request){
        $this->validate($request, [
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'username' => 'required'
        ]);

        $image = $request->file('foto');
        $image->storeAs('public/user', $image->hashName());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'tgl_lahir' => $request->tgl_lahir,
            'foto' => $image->hashName(),
            'role' => $request->role,
            'id_provinsi' => $request->id_provinsi,
            'id_kota' => $request->id_kota,
            'id_kecamatan' => $request->id_kecamatan,
            'id_kelurahan' => $request->id_kelurahan
        ]);
        
        return redirect('/registrasi/'.$request->role)->with('msg', 'Registrasi berhasil, silahkan login!');
    }
}
