<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'tgl_lahir',
        'alamat',
        'id_provinsi',
        'id_kota',
        'id_kecamatan',
        'id_kelurahan',
        'foto',
        'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function kelurahan(){
        return $this->belongsTo('App\Models\Desa', 'id_kelurahan', 'id');
    }

    public function kecamatan(){
        return $this->belongsTo('App\Models\Kecamatan', 'id_kecamatan', 'id');
    }

    public function kota(){
        return $this->belongsTo('App\Models\Kabupaten', 'id_kota', 'id');
    }

    public function provinsi(){
        return $this->belongsTo('App\Models\Provinsi', 'id_provinsi', 'id');
    }
}
