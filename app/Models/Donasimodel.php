<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasimodel extends Model
{
    use HasFactory;

    protected $table = 'donasi';
    protected $fillable = ['id_user', 'foto', 'judul', 'keterangan', 'target', 'batas_waktu', 'status'];
}
