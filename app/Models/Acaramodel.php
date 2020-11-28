<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acaramodel extends Model
{
    use HasFactory;

    protected $table = 'acara';
    protected $fillable = ['id_user', 'foto', 'judul', 'keterangan', 'target', 'batas_waktu', 'status', 'id_provinsi', 
    'id_kota', 'id_kecamatan', 'id_kelurahan'];
    protected $primaryKey = 'id';

    public function kelurahan(){
        return $this->belongsTo('App\Models\Desa', 'id_kelurahan', 'id');
    }

    public function user(){
        return $this->belongsTo('App\Models\User', 'id_user', 'id');
    }
}
