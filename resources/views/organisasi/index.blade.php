@extends('organisasi/layout/main')
@section('title', 'Home | Organisasi')
@section('container')
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                        <div class="mr-md-3 mr-xl-5">
                            <h2>Welcome back,</h2>
                            <p class="mb-md-0">Halaman Organisasi</p>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="proBanner">
            <div class="col-md-12 grid-margin">
                <div class="card bg-gradient-primary border-0">
                    <div class="card-body py-3 px-4 d-flex align-items-center justify-content-between flex-wrap">
                        <p class="mb-0 text-white font-weight-medium">Anda bisa membuat penggalangan dana dan acara untuk mencari relawan! </p>
                        <div class="d-flex">
                            <a href="{{url('/organisasi/adddonasi')}}"
                                target="_blank" class="btn btn-outline-light mr-2 bg-gradient-danger border-0">Buat Donasi</a>
                            <button id="bannerClose" class="btn border-0 p-0 ml-auto">
                                <i class="mdi mdi-close text-white"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body dashboard-tabs p-0">
                        <ul class="nav nav-tabs px-4" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="overview-tab" data-toggle="tab" href="#overview"
                                    role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                            </li>
                        </ul>
                        <div class="tab-content py-0 px-0">
                            <div class="tab-pane fade show active" id="overview" role="tabpanel"
                                aria-labelledby="overview-tab">
                                <div class="d-flex flex-wrap justify-content-xl-between">
                                    <div
                                        class="d-none d-xl-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-calendar-heart icon-lg mr-3 text-primary"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Start date</small>
                                            <div class="dropdown">
                                                <a class="btn btn-secondary dropdown-toggle p-0 bg-transparent border-0 text-dark shadow-none font-weight-medium"
                                                    href="#" role="button" id="dropdownMenuLinkA" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <h5 class="mb-0 d-inline-block">26 Jul 2018</h5>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLinkA">
                                                    <a class="dropdown-item" href="#">12 Aug 2018</a>
                                                    <a class="dropdown-item" href="#">22 Sep 2018</a>
                                                    <a class="dropdown-item" href="#">21 Oct 2018</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-currency-usd mr-3 icon-lg text-danger"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Revenue</small>
                                            <h5 class="mr-2 mb-0">$577545</h5>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-eye mr-3 icon-lg text-success"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Total views</small>
                                            <h5 class="mr-2 mb-0">9833550</h5>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-download mr-3 icon-lg text-warning"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Downloads</small>
                                            <h5 class="mr-2 mb-0">2233783</h5>
                                        </div>
                                    </div>
                                    <div
                                        class="d-flex py-3 border-md-right flex-grow-1 align-items-center justify-content-center p-3 item">
                                        <i class="mdi mdi-flag mr-3 icon-lg text-danger"></i>
                                        <div class="d-flex flex-column justify-content-around">
                                            <small class="mb-1 text-muted">Flagged</small>
                                            <h5 class="mr-2 mb-0">3497843</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
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
