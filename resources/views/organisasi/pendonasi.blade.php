@extends('organisasi/layout/main')
@section('title', 'Pendonasi | Organisasi')
@section('container')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Halaman Donasi</h2>
                            <p class="mb-md-0">Data Pendonasi</p>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                            <p class="text-primary mb-0 hover-cursor">Pendaftar Pendonasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if(session('msg'))
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card bg-gradient-primary border-0">
                    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
                        <p class="mb-0 text-white font-weight-medium">Success, {{session('msg')}}</p>
                        <div class="d-flex">
                            <button id="bannerClose" class="btn border-0 p-0 ml-auto">
                                <i class="mdi mdi-close text-white"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        <div class="row">
            <div class="col-md-12 stretch-card">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Recent Purchases</p>
                        <div class="table-responsive">
                            <table id="example" width="100%" class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pendonasi</th>
                                        <th>Foto</th>
                                        <th>Alamat</th>
                                        <th>Uang</th>
                                        <th>Barang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($pendonasi as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$data->user->name}}</td>
                                        <td>Orang</td>
                                        <td>{{$data->user->kelurahan->name.', '.$data->user->kecamatan->name.', '.$data->user->kota->name.', '.$data->user->provinsi->name}}</td>
                                        <td>Rp{{number_format($data->jml_uang)}}</td>
                                        <td>{{$data->barang}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                    href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard template</a>
                from Bootstrapdash.com</span>
        </div>
    </footer>
    <!-- partial -->
</div>
@endsection()
