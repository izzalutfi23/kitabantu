@extends('relawan/layout/main')
@section('title', 'Acara | Kitabantu')
@section('container')
<section id="inner-banner">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Acara</h1>
                </div>
                <div class="col-sm-6">
                    <h6 class="breadcrumb"><a href="index.html">Home</a> / Acara</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pro-sec">
    <div class="container">
        <div class="row text-center" style="margin-top:-30px;">

            <div class="col-sm-6 col-md-4 clearfix top-off">
                <div class="grid-image"><img src="{{asset('utama/images/test1.jpg')}}"></div>
                <div class="post-content">
                    <h3>Nepal Earthquake: Clean Water Initiative</h3>
                    <div class="progress" style="margin-top: 15px; height: 10px;">
                        <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <p style="padding-bottom: 15px;">Lorem ipsum dolor sit amet, sed do eiusmod tempor</p>
                    <table width="100%">
                        <tr>
                            <td align="left" valign="top">
                                <h4>2 Orang</h4>
                                <p style="font-size: 12px;">Terkumpul dari target 20 orang</p>
                            </td>
                            <td align="right" valign="top">
                                <h5>20%</h5>
                            </td>
                        </tr>
                    </table>
                    <hr style="width: 100%;">
                    <a href="{{url('acara/detail')}}">Lihat Detail</a>
                </div>

            </div>
            <div class="col-sm-6 col-md-4 clearfix top-off">
                <div class="grid-image"><img src="{{asset('utama/images/test1.jpg')}}"></div>
                <div class="post-content">
                    <h3>Nepal Earthquake: Clean Water Initiative</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    <a href="donate.html" title="">Donate Now</a>
                </div>
            </div>

            <div class="col-sm-6 col-md-4 clearfix top-off">
                <div class="grid-image"><img src="{{asset('utama/images/test1.jpg')}}"></div>
                <div class="post-content">
                    <h3>Nepal Earthquake: Clean Water Initiative</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                    <a href="donate.html" title="">Donate Now</a>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection