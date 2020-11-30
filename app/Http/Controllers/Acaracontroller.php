<?php

namespace App\Http\Controllers;

use App\Models\Acaramodel;
use App\Models\Desa;
use App\Models\Relawanacara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Acaracontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $acara = Acaramodel::where('id_user', Auth()->user()->id)->get();
        return view('organisasi.acara', ['acara' => $acara]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organisasi.addacara');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'foto' => 'required|image|mimes:png,jpg,jpeg',
            'judul' => 'required',
            'keterangan' => 'required',
            'target' => 'required',
            'batas_waktu' => 'required',
            'id_provinsi' => 'required',
            'id_kota' => 'required',
            'id_kecamatan' => 'required',
            'id_kelurahan' => 'required'
        ]);

        $image = $request->file('foto');
        $image->storeAs('public/acara', $image->hashName());

        Acaramodel::create([
            'id_user' => $request->id_user,
            'foto' => $image->hashName(),
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'target' => $request->target,
            'batas_waktu' => $request->batas_waktu,
            'status' => 'pengajuan',
            'id_provinsi' => $request->id_provinsi,
            'id_kota' => $request->id_kota,
            'id_kecamatan' => $request->id_kecamatan,
            'id_kelurahan' => $request->id_kelurahan
        ]);

        return redirect('/organisasi/acara')->with('msg', 'Data acara berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acaramodel  $acaramodel
     * @return \Illuminate\Http\Response
     */
    public function showrelawan($id)
    {
        $relawan = Relawanacara::where('id_acara', $id)->get();
        return view('organisasi.pendaftaracara', ['relawan' => $relawan]);
    }

    // Ubah status pendaftar
    public function changests(Relawanacara $relawanacara){
        return $relawanacara;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acaramodel  $acaramodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Acaramodel $acaramodel)
    {
        return view('organisasi/editacara', ['acara' => $acaramodel]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acaramodel  $acaramodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acaramodel $acaramodel)
    {
        $this->validate($request, [
            'foto' => 'image|mimes:png,jpg,jpeg',
            'judul' => 'required',
            'keterangan' => 'required',
            'target' => 'required',
            'batas_waktu' => 'required',
        ]);
        
        // Cek jika yang diedit foto
        if($request->hasFile('foto')){
            $image = $request->file('foto');
            $image->storeAs('public/acara', $image->hashName());
            // Cek jika edit alamat
            if($request->id_kelurahan==0){
                Acaramodel::where('id', $acaramodel->id)->update([
                    'foto' => $image->hashName(),
                    'judul' => $request->judul,
                    'keterangan' => $request->keterangan,
                    'target' => $request->target,
                    'batas_waktu' => $request->batas_waktu
                ]);
                return redirect('/organisasi/acara')->with('msg', 'Data acara berhasil diubah!');
            }
            else{
                Acaramodel::where('id', $acaramodel->id)->update([
                    'foto' => $image->hashName(),
                    'judul' => $request->judul,
                    'keterangan' => $request->keterangan,
                    'target' => $request->target,
                    'batas_waktu' => $request->batas_waktu,
                    'id_provinsi' => $request->id_provinsi,
                    'id_kota' => $request->id_kota,
                    'id_kecamatan' => $request->id_kecamatan,
                    'id_kelurahan' => $request->id_kelurahan
                ]);
                return redirect('/organisasi/acara')->with('msg', 'Data acara berhasil diubah!');
            }
        }
        else{
            if($request->id_kelurahan==0){
                Acaramodel::where('id', $acaramodel->id)->update([
                    'judul' => $request->judul,
                    'keterangan' => $request->keterangan,
                    'target' => $request->target,
                    'batas_waktu' => $request->batas_waktu
                ]);
                return redirect('/organisasi/acara')->with('msg', 'Data acara berhasil diubah!');
            }
            else{
                Acaramodel::where('id', $acaramodel->id)->update([
                    'judul' => $request->judul,
                    'keterangan' => $request->keterangan,
                    'target' => $request->target,
                    'batas_waktu' => $request->batas_waktu,
                    'id_provinsi' => $request->id_provinsi,
                    'id_kota' => $request->id_kota,
                    'id_kecamatan' => $request->id_kecamatan,
                    'id_kelurahan' => $request->id_kelurahan
                ]);
                return redirect('/organisasi/acara')->with('msg', 'Data acara berhasil diubah!');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acaramodel  $acaramodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acaramodel $acaramodel)
    {
        //
    }
}
