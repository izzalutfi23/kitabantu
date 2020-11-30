<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relawandonasi extends Model
{
    use HasFactory;

    protected $table = 'relawan_donasi';
    protected $fillable = ['id_user', 'id_donasi', 'jml_uang', 'barang', 'harapan'];
    protected $primaryKey = 'id';

    public function donasi(){
        return $this->belongsTo('App\Models\Donasimodel', 'id_donasi', 'id');
    }
}
