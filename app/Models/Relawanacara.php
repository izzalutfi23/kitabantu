<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Relawanacara extends Model
{
    use HasFactory;

    protected $table = 'relawan_acara';
    protected $fillable = ['id_user', 'id_acara', 'status', 'harapan'];

    public function acara(){
        return $this->belongsTo('App\Models\Acaramodel', 'id_acara', 'id');
    }
}
