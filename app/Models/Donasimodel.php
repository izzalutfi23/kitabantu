<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasimodel extends Model
{
    use HasFactory;

    protected $table = 'donasi';
    protected $fillable = ['id_user', 'foto', 'judul', 'keterangan', 'target', 'batas_waktu', 'status'];
    protected $primaryKey = 'id';

    public function organisasi(){
        return $this->belongsTo('App\Models\User', 'id_user', 'id');
    }
}
