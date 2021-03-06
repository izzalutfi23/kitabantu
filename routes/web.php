<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Organisasicontroller;
use App\Http\Controllers\Relawancontroller;
use App\Http\Controllers\Donasicontroller;
use App\Http\Controllers\Acaracontroller;
use App\Http\Controllers\Wilayah;
use App\Http\Controllers\Usercontroller;

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

// Halaman Utama
Route::get('/', [Relawancontroller::class, 'index']);
Route::get('/kontribusi', [Relawancontroller::class, 'kontribusi']);
Route::get('/donasi', [Relawancontroller::class, 'donasi']);
Route::get('/donasi/detail/{donasimodel}', [Relawancontroller::class, 'detaildonasi']);
Route::get('/donasi/input/{donasimodel}', [Relawancontroller::class, 'inputdonasi']);
Route::post('/donasi/insert', [Relawancontroller::class, 'storedonasi']);
Route::get('/acara', [Relawancontroller::class, 'acara']);
Route::get('/acara/detail/{acaramodel}', [Relawancontroller::class, 'detailacara']);
Route::get('/acara/input/{acaramodel}', [Relawancontroller::class, 'inputacara']);
Route::post('/acara/insert', [Relawancontroller::class, 'storeacara']);
Route::get('/pilihakun', [Relawancontroller::class, 'pilihakun']);
Route::get('/registrasi/relawan', [Relawancontroller::class, 'regisdonasi']);
Route::get('/registrasi/organisasi', [Relawancontroller::class, 'regisorganisasi']);
Route::post('/registrasi', [Relawancontroller::class, 'storeregistrasi']);

Route::group(['middleware'=>['auth', 'checkRole:organisasi']], function(){
    Route::get('/organisasi', [Organisasicontroller::class, 'index']);
    // Donasi
    Route::get('/organisasi/donasi', [Donasicontroller::class, 'index']);
    Route::get('/organisasi/tambahdonasi', [Donasicontroller::class, 'create']);
    Route::get('/organisasi/donasi/pendonasi/{id}', [Donasicontroller::class, 'showdonasi']);
    Route::post('/organisasi/postdonasi', [Donasicontroller::class, 'store']);
    Route::get('/organisasi/editdonasi/{donasimodel}', [Donasicontroller::class, 'edit']);
    Route::patch('/organisasi/updatedonasi/{donasimodel}', [Donasicontroller::class, 'update']);
    // Acara
    Route::get('/organisasi/acara', [Acaracontroller::class, 'index']);
    Route::get('/organisasi/tambahacara', [Acaracontroller::class, 'create']);
    Route::get('/organisasi/acara/pendaftar/{id}', [Acaracontroller::class, 'showrelawan']);
    Route::get('/organisasi/acara/change/{relawanacara}', [Acaracontroller::class, 'changests']);
    Route::post('/organisasi/postacara', [Acaracontroller::class, 'store']);
    Route::get('/organisasi/editacara/{acaramodel}', [Acaracontroller::class, 'edit']);
    Route::patch('/organisasi/updateacara/{acaramodel}', [Acaracontroller::class, 'update']);
});

Route::group(['middleware'=>['auth', 'checkRole:admin']], function(){
    Route::get('/dashboard', [Admincontroller::class, 'index']);
    // Halaman Donasi
    Route::get('/dashboard/donasi', [Admincontroller::class, 'donasi']);
    Route::get('/dashboard/detaildonasi/{donasimodel}', [Admincontroller::class, 'detaildonasi']);
    Route::get('/dashboard/changestatus/{donasimodel}', [Admincontroller::class, 'changestatus']);
    Route::get('/dashboard/deletedonasi/{donasimodel}', [Admincontroller::class, 'deletedonasi']);
    // Halaman Acara
    Route::get('/dashboard/acara', [Admincontroller::class, 'acara']);
    Route::get('/dashboard/detailacara/{acaramodel}', [Admincontroller::class, 'showacara']);
    Route::get('/dashboard/statusacara/{acaramodel}', [Admincontroller::class, 'statusacara']);
    Route::get('/dashboard/deleteacara/{acaramodel}', [Admincontroller::class, 'destroyacara']);
    Route::get('/dashboard/akun', [Usercontroller::class, 'index']);
    Route::get('/dashboard/deleteakun/{user}', [Usercontroller::class, 'destroy']);
});