<?php

namespace App\Http\Controllers;

use App\Models\Donasimodel;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
