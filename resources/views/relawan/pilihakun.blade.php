@extends('relawan/layout/main')
@section('title', 'Pilih Akun | Kitabantu')
@section('container')
<section id="inner-banner">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>AKUN</h1>
                </div>
                <div class="col-sm-6">
                    <h6 class="breadcrumb"><a href="index.html">Home</a> / Akun</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about-sec">
    <div class="container">
        <div class="row text-center">
            <h1>BUAT AKUN KITA BANTU</h1>
            <hr>
            <h5>Silahkan buat akun sesuai pilihan anda, pilih <i class="text-primary">Akun Donasi</i> jika ingin
                melakukan donasi atau menjadi relawan dan pilih <i class="text-primary">Akun Organisasi</i> Jika
                ingin membuat acara atau mengumpulkan donasi</h5>
            <div class="text-center">
                <a href="{{url('/registrasi/relawan')}}" class="btn1">Akun Donasi</a>
                <a href="{{url('/registrasi/organisasi')}}" class="btn2">Akun Organisasi</a>
            </div>
        </div>
    </div>
</section>
@endsection