@extends('relawan/layout/main')
@section('title', 'Kontribusi | Kitabantu')
@section('container')
<section id="inner-banner">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>KONTRIBUSI SAYA</h1>
                </div>
                <div class="col-sm-6">
                    <h6 class="breadcrumb"><a href="index.html">Home</a> / Kontribusi</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about-sec">
    <div class="container">
        <div class="row text-center">
            <h1>DAFTAR DONASI SAYA</h1>
            <hr>
        </div>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>

<section id="about-sec">
    <div class="container">
        <div class="row text-center">
            <h1>DAFTAR RELAWAN ACARA</h1>
            <hr>
        </div>
        <table id="example1" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection