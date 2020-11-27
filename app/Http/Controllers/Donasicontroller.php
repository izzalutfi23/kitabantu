<?php

namespace App\Http\Controllers;

use App\Models\Donasimodel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Donasicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('organisasi.donasi');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('organisasi.adddonasi');
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
            'batas_waktu' => 'required'
        ]);

        $image = $request->file('foto');
        $image->storeAs('public/donasi', $image->hashName());

        Donasimodel::create([
            'id_user' => $request->id_user,
            'foto' => $image->hashName(),
            'judul' => $request->judul,
            'keterangan' => $request->keterangan,
            'target' => $request->target,
            'batas_waktu' => $request->batas_waktu,
            'status' => 'pengajuan'
        ]);

        return redirect('/organisasi/donasi')->with('msg', 'Data donasi berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donasimodel  $donasimodel
     * @return \Illuminate\Http\Response
     */
    public function show(Donasimodel $donasimodel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donasimodel  $donasimodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Donasimodel $donasimodel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donasimodel  $donasimodel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donasimodel $donasimodel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donasimodel  $donasimodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donasimodel $donasimodel)
    {
        //
    }
}
