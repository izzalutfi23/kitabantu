<?php

namespace App\Http\Controllers;

use App\Models\Donasimodel;
use Illuminate\Http\Request;
use App\Models\Relawandonasi;
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
        // $donasi = Donasimodel::where('id_user', Auth()->user()->id)->withCount(['r_donasi AS tot_donasi' => function($q){
        //     $q->select(Relawandonasi::raw("SUM(jml_uang) as tot_donasi"));
        // }])->withCount('r_donasi')->get();
        $donasi = Donasimodel::where('id_user', Auth()->user()->id)->withCount('r_donasi')->get();
        return view('organisasi.donasi', ['donasi' => $donasi]);
        // return $donasi;
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
    public function showdonasi($id)
    {
        $pendonasi = Relawandonasi::where('id_donasi', $id)->get();
        return view('organisasi.pendonasi', ['pendonasi' => $pendonasi]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donasimodel  $donasimodel
     * @return \Illuminate\Http\Response
     */
    public function edit(Donasimodel $donasimodel)
    {
        return view('organisasi.editdonasi', ['donasi' => $donasimodel]);
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
        $this->validate($request, [
            'foto' => 'image|mimes:png,jpg,jpeg',
            'judul' => 'required',
            'keterangan' => 'required',
            'target' => 'required',
            'batas_waktu' => 'required'
        ]);

        if($request->hasFile('foto')){
            $image = $request->file('foto');
            $image->storeAs('public/donasi', $image->hashName());
            Donasimodel::where('id', $donasimodel->id)->update([
                'foto' => $image->hashName(),
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
                'target' => $request->target,
                'batas_waktu' => $request->batas_waktu
            ]);
            return redirect('/organisasi/donasi')->with('msg', 'Data donasi berhasil diubah!');
        }
        else{
            Donasimodel::where('id', $donasimodel->id)->update([
                'judul' => $request->judul,
                'keterangan' => $request->keterangan,
                'target' => $request->target,
                'batas_waktu' => $request->batas_waktu
            ]);
            return redirect('/organisasi/donasi')->with('msg', 'Data donasi berhasil diubah!');
        }
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
