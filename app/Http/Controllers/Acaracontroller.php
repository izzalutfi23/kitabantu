<?php

namespace App\Http\Controllers;

use App\Models\Acaramodel;
use App\Models\Desa;
use Illuminate\Http\Request;

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
        // return $acara;
        // return Desa::whereId(1101010001)->with(['kecamatan', function($q){
        //     $q->select(['id', 'name']);
        // }])->get();
        // 2147483647
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
    public function show(Acaramodel $acaramodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acaramodel  $acaramodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Acaramodel $acaramodel)
    {
        //
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
        //
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
