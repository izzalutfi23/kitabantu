<?php

namespace App\Http\Controllers;

use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Desa;
use Illuminate\Http\Request;

class Wilayah extends Controller
{
    public function get_provinsi(){
        $provinsi = Provinsi::all();

        foreach($provinsi as $data){
            echo "<option value='".$data['id']."' id_provinsi='".$data['id']."'>".$data['name']."</option>";
        }
    }

    public function get_kota($id){
        $kabupaten = Kabupaten::where('province_id', $id)->get();

        foreach($kabupaten as $data){
            echo "<option value='".$data['id']."' id_kota='".$data['id']."'>".$data['name']."</option>";
        }
    }

    public function get_kecamatan($id){
        $kecamatan = Kecamatan::where('regency_id', $id)->get();

        foreach($kecamatan as $data){
            echo "<option value='".$data['id']."' id_kecamatan='".$data['id']."'>".$data['name']."</option>";
        }
    }

    public function get_desa($id){
        $desa = Desa::where('district_id', $id)->get();

        foreach($desa as $data){
            echo "<option value='".$data['id']."' id_desa='".$data['id']."'>".$data['name']."</option>";
        }
    }
}
