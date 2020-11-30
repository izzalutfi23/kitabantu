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
                    <th>No</th>
                    <th>Nama Donasi</th>
                    <th>Jumlah Donasi (Rp)</th>
                    <th>Donasi Barang</th>
                    <th>Harapan</th>
                    <th>Tanggal Donasi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($donasi as $datadonasi)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><a href="{{url('/donasi/detail/'.$datadonasi->donasi->id)}}"><u>{{$datadonasi->donasi->judul}}</u></a></td>
                    <td>Rp{{number_format($datadonasi->jml_uang)}}</td>
                    <td>{{$datadonasi->barang}}</td>
                    <td>{{$datadonasi->harapan}}</td>
                    <td>{{date('d M Y', strtotime($datadonasi->created_at))}}</td>
                </tr>
                @endforeach
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
        <p>*User secara resmi menjadi relawan dalam suatu acara jika statusnya 'Diterima'</p><br>
        <table id="example1" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Acara</th>
                    <th>Status</th>
                    <th>Harapan</th>
                    <th>Tanggal Daftar</th>
                </tr>
            </thead>
            <tbody>
                @foreach($acara as $dataacara)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td><a href="{{url('/acara/detail/'.$dataacara->acara->id)}}"><u>{{$dataacara->acara->judul}}</u></a></td>
                    <td>
                        @if($dataacara->status==0)
                        <label class="badge badge-danger">Pengajuan</i></label>
                        @else
                        <label class="badge badge-danger">Diterima</i></label>
                        @endif
                    </td>
                    <td>{{$dataacara->harapan}}</td>
                    <td>{{date('d M Y', strtotime($dataacara->created_at))}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection