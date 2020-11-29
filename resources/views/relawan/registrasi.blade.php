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
            <div class="con-form clearfix">
                <div class="col-md-6">
                    <input type="text" name="name" value="" size="40" class="" aria-required="true" aria-invalid="false"
                        placeholder="First Name*">
                </div>
                <div class="col-md-6">
                    <input type="text" name="name" value="" size="40" class="" aria-required="true" aria-invalid="false"
                        placeholder="Last Name*">
                </div>
                <div class="col-md-6">
                    <input type="text" name="phone" value="" size="40" class="" aria-invalid="false"
                        placeholder="Phone Number*">
                </div>
                <div class="col-md-6">
                    <input type="email" name="email" value="" size="40" class="" aria-invalid="false"
                        placeholder="Email ID*">
                </div>
                <div class="col-md-6">
                    <input type="text" name="street" value="" size="40" class="" aria-required="true"
                        aria-invalid="false" placeholder="Street Address*">
                </div>
                <div class="col-md-6">
                    <input type="text" name="city" value="" size="40" class="" aria-required="true" aria-invalid="false"
                        placeholder="City / Town*">
                </div>
                <div class="col-md-6">
                    <input type="text" name="country" value="" size="40" class="" aria-required="true"
                        aria-invalid="false" placeholder="Country*">
                </div>
                <div class="col-md-6">
                    <input type="text" name="amount" value="" size="40" class="" aria-required="true"
                        aria-invalid="false" placeholder="Amount*">
                </div>
                <div class="col-md-12">
                    <textarea name="message" cols="40" rows="5" class="" id="message" aria-invalid="false"
                        placeholder="Message"></textarea>
                </div>
                <div class="col-xs-12 submit-button">
                    <input type="submit" value="Donate Now" class="btn2" id="sub"
                        style="border:none; margin: 20px 0 0 0">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection