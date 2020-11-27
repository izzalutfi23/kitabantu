@extends('organisasi/layout/main')
@section('title', 'Donasi | Organisasi')
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
                            <p class="mb-md-0">Data Donasi</p>
                        </div>
                        <div class="d-flex">
                            <i class="mdi mdi-home text-muted hover-cursor"></i>
                            <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
                            <p class="text-primary mb-0 hover-cursor">Donasi</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-end flex-wrap">
                        <a href="{{url('/organisasi/tambahdonasi')}}"><button class="btn btn-primary mt-2 mt-xl-0">Buat
                                Donasi</button></a>
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
                            <table id="example" class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Status report</th>
                                        <th>Office</th>
                                        <th>Price</th>
                                        <th>Date</th>
                                        <th>Gross amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Jeremy Ortega</td>
                                        <td>Levelled up</td>
                                        <td>Catalinaborough</td>
                                        <td>$790</td>
                                        <td>06 Jan 2018</td>
                                        <td>$2274253</td>
                                    </tr>
                                    <tr>
                                        <td>Alvin Fisher</td>
                                        <td>Ui design completed</td>
                                        <td>East Mayra</td>
                                        <td>$23230</td>
                                        <td>18 Jul 2018</td>
                                        <td>$83127</td>
                                    </tr>
                                    <tr>
                                        <td>Emily Cunningham</td>
                                        <td>support</td>
                                        <td>Makennaton</td>
                                        <td>$939</td>
                                        <td>16 Jul 2018</td>
                                        <td>$29177</td>
                                    </tr>
                                    <tr>
                                        <td>Minnie Farmer</td>
                                        <td>support</td>
                                        <td>Agustinaborough</td>
                                        <td>$30</td>
                                        <td>30 Apr 2018</td>
                                        <td>$44617</td>
                                    </tr>
                                    <tr>
                                        <td>Betty Hunt</td>
                                        <td>Ui design not completed</td>
                                        <td>Lake Sandrafort</td>
                                        <td>$571</td>
                                        <td>25 Jun 2018</td>
                                        <td>$78952</td>
                                    </tr>
                                    <tr>
                                        <td>Myrtie Lambert</td>
                                        <td>Ui design completed</td>
                                        <td>Cassinbury</td>
                                        <td>$36</td>
                                        <td>05 Nov 2018</td>
                                        <td>$36422</td>
                                    </tr>
                                    <tr>
                                        <td>Jacob Kennedy</td>
                                        <td>New project</td>
                                        <td>Cletaborough</td>
                                        <td>$314</td>
                                        <td>12 Jul 2018</td>
                                        <td>$34167</td>
                                    </tr>
                                    <tr>
                                        <td>Ernest Wade</td>
                                        <td>Levelled up</td>
                                        <td>West Fidelmouth</td>
                                        <td>$484</td>
                                        <td>08 Sep 2018</td>
                                        <td>$50862</td>
                                    </tr>
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
