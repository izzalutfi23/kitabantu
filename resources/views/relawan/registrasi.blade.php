@extends('relawan/layout/main')
@section('title', 'Buat Akun | Kitabantu')
@section('container')
<section id="inner-banner">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>BUAT AKUN</h1>
                </div>
                <div class="col-sm-6">
                    <h6 class="breadcrumb"><a href="index.html">Home</a> / Buat Akun</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about-sec">
    <div class="container">
        <div class="row text-center">
            <h2 style="margin-top:0;">ISIKAN DATA DIRI ANDA<br>
                UNTUK MENJADI BAGIAN DARI #SOBATBAIK KITA BANTU</h2>
            @error('foto')
            <div class="alert alert-primary" style="background: red; color: #fff;" role="alert">
                {{$message}}
            </div>
            @enderror
            @if(session('msg'))
            <div class="alert alert-primary" style="background: green; color: #fff;" role="alert">
                {{session('msg')}}
            </div>
            @endif
            <form action="{{url('/registrasi')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="con-form clearfix">
                    <div class="col-md-6">
                        <input type="hidden" name="role" value="{{Request::segment(2)}}">
                        <input type="text" name="name" required value="" size="40" class="" aria-required="true"
                            aria-invalid="false" placeholder="Nama*">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="email" required value="" size="40" class="" aria-required="true"
                            aria-invalid="false" placeholder="Email*">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="username" value="" size="40" class="" aria-invalid="false"
                            placeholder="Username*">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="password" required value="" size="40" class="" aria-invalid="false"
                            placeholder="Password*">
                    </div>
                    <div class="col-md-6">
                        <input type="date" name="tgl_lahir" value="" required size="40" class="" aria-required="true"
                            aria-invalid="false" placeholder="Street Address*">
                    </div>
                    <div class="col-md-6" style="margin-bottom: 20px;">
                        <input type="file" name="foto" value="" size="40" class="" aria-required="true"
                            aria-invalid="false" placeholder="Foto*">
                    </div>
                    <div class="row"></div>
                    <div class="col-lg-3">
                        <label>Provinsi</label>
                        <select name="id_provinsi" class="form-control">
                            <option value="0"></option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label>Kota</label>
                        <select name="id_kota" class="form-control">
                            <option value="0"></option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label>Kecamatan</label>
                        <select name="id_kecamatan" class="form-control">
                            <option value="0"></option>
                        </select>
                    </div>
                    <div class="col-lg-3">
                        <label>Kelurahan</label>
                        <select name="id_kelurahan" class="form-control">
                            <option value="0"></option>
                        </select>
                    </div>
                    <div class="col-xs-12 submit-button" style="margin-top: 20px;">
                        <input type="submit" value="Daftar Sekarang" class="btn2" id="sub"
                            style="border:none; margin: 20px 0 0 0">
                    </div>
            </form>
        </div>
    </div>
    </div>
</section>
@endsection
