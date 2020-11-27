<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Organisasicontroller;
use App\Http\Controllers\Relawancontroller;
use App\Http\Controllers\Donasicontroller;
use App\Http\Controllers\Acaracontroller;
use App\Http\Controllers\Wilayah;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Autenticate User
Route::get('/login', [Authcontroller::class, 'index'])->name('login');
Route::post('/postlogin', [Authcontroller::class, 'postlogin']);
Route::get('/logout', [Authcontroller::class, 'logout']);

// Ajax Wilayah Administrasi Indonesia
Route::get('/provinsi', [Wilayah::class, 'get_provinsi']);
Route::get('/kota/{id}', [Wilayah::class, 'get_kota']);
Route::get('/kecamatan/{id}', [Wilayah::class, 'get_kecamatan']);
Route::get('/desa/{id}', [Wilayah::class, 'get_desa']);

Route::get('/', [Relawancontroller::class, 'index']);

Route::group(['middleware'=>['auth', 'checkRole:organisasi']], function(){
    Route::get('/organisasi', [Organisasicontroller::class, 'index']);
    // Donasi
    Route::get('/organisasi/donasi', [Donasicontroller::class, 'index']);
    Route::get('/organisasi/tambahdonasi', [Donasicontroller::class, 'create']);
    Route::post('/organisasi/postdonasi', [Donasicontroller::class, 'store']);
    Route::get('/organisasi/editdonasi/{donasimodel}', [Donasicontroller::class, 'edit']);
    Route::patch('/organisasi/updatedonasi/{donasimodel}', [Donasicontroller::class, 'update']);
    // Acara
    Route::get('/organisasi/acara', [Acaracontroller::class, 'index']);
    Route::get('/organisasi/tambahacara', [Acaracontroller::class, 'create']);
    Route::post('/organisasi/postacara', [Acaracontroller::class, 'store']);
});

Route::group(['middleware'=>['auth', 'checkRole:admin']], function(){
    Route::get('/dashboard', [Admincontroller::class, 'index']);
});