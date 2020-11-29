@extends('relawan/layout/main')
@section('title', 'Donasi | Kitabantu')
@section('container')
<section id="inner-banner">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>DONASI</h1>
                </div>
                <div class="col-sm-6">
                    <h6 class="breadcrumb"><a href="index.html">Home</a> / Donasi</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pro-sec">
    <div class="container">
        <div class="row text-center" style="margin-top:-30px;">
            @foreach($donasi as $data)
            <div class="col-sm-6 col-md-4 clearfix top-off">
                <div class="grid-image"><img src="{{Storage::url('public/donasi/'.$data->foto)}}" height="200px"></div>
                <div class="post-content">
                    <h3>{{$data->judul}}</h3>
                    <div class="progress" style="margin-top: 15px; height: 10px;">
                        <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p style="padding-bottom: 15px;">Lorem ipsum dolor sit amet, sed do eiusmod tempor</p>
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
                    <hr style="width: 100%;">
                    <a href="{{url('donasi/detail/'.$data->id)}}">Lihat Detail</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection