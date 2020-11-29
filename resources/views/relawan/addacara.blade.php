@extends('relawan/layout/main')
@section('title', 'Input Acara | Kitabantu')
@section('container')
<section id="inner-banner">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Acara</h1>
                </div>
                <div class="col-sm-6">
                    <h6 class="breadcrumb"><a href="index.html">Home</a> / Detail / Input</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about-sec">
    <div class="container">
        @if(session('msg'))
        <div class="alert alert-primary" style="background: green; color: #fff;" role="alert">
            {{session('msg')}}
        </div>
        @endif
        <div class="row">

            <div class="col-md-8">
                <h2 style="margin-top:0;">Bantu Ibu Tukang Ojek Berjuang Hidupi Keluarga</h2>
                <form action="{{url('/acara/insert')}}" method="POST">
                    @csrf
                    <div class="con-form clearfix" style="margin-bottom: 10px;">
                        <div class="col-md-6">
                            <input type="hidden" name="id_user" value="{{Auth()->user()->id}}">
                            <input type="hidden" name="id_acara" value="{{$acara->id}}">
                            <input type="text" name="name" value="{{$acara->organisasi->name}}" size="40" class=""
                                aria-required="true" aria-invalid="false" placeholder="Nama*">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="username" value="{{$acara->organisasi->username}}" size="40"
                                class="" aria-required="true" aria-invalid="false" placeholder="Username*">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="email" value="{{$acara->organisasi->email}}" size="40" class=""
                                aria-invalid="false" placeholder="No Telepon*">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="kota" value="{{$acara->organisasi->kota->name}}" size="40" class=""
                                aria-invalid="false" placeholder="Alamat Email*">
                        </div>
                        <div class="col-md-12">
                            <textarea name="harapan" cols="40" rows="5" class="" id="message" aria-invalid="false"
                                placeholder="Tulis Doa atau Harapan (Opsional)"></textarea>
                        </div>
                        <p>*Klik <strong>Ikut Berpartisipasi</strong> untuk mendaftarkan diri pada acara ini, kemudian
                            tunggu konfirmasi dari pihak penyelenggara apakah diterima atau tidak</p>
                        <div class="col-xs-12 submit-button">
                            <input type="submit" value="Ikut Berpartisipasi" class="btn2" id="sub"
                                style="border:none; margin: 20px 0 0 0">
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="well well-sm">
                            <img src="{{asset('utama/images/donasi/contoh.jpg')}}" width="100%">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="well well-sm">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <img src="{{asset('utama/images/user/profil.jpeg')}}" alt=""
                                        class="img-rounded img-responsive" />
                                </div>
                                <div class="col-sm-6 col-md-8">
                                    <h4>
                                        Bhaumik Patel</h4>
                                    <small><cite title="San Francisco, USA">San Francisco, USA <i
                                                class="glyphicon glyphicon-map-marker">
                                            </i></cite></small>
                                    <p>
                                        Dibuat pada tanggal<br>
                                        <i class="fa fa-calendar"></i> June 02, 1988</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="well well-sm" style="margin-top: 20px;">
                            <table width="100%">
                                <tr>
                                    <td align="left" valign="top">
                                        <h4>Rp100,000</h4>
                                        <p style="font-size: 12px;">Terkumpul dari Rp10,000,000</p>
                                    </td>
                                    <td align="right" valign="top">
                                        <h5>20%</h5>
                                    </td>
                                </tr>
                            </table>
                            <div class="progress" style="margin-top: 15px; height: 10px;">
                                <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p style="font-size: 12px;">Dari 2 Donasi</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
@endsection
