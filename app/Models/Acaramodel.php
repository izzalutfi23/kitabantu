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
}
