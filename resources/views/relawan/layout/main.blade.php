<!--
Template Name: Charity Hope
Title: charity website template free download bootstrap Charity Hope
Description: charity website template with bootstrap framework for free download and best suited for ngos charities.
Keyword: charity website template, bootstrap charity template free, charity website templates bootstrap, donation website template free, charity website templates bootstrap free download
Author: Bootstrap Website Templates
Author URI: https://bootstrapwebtemplates.com/
Template URI: https://bootstrapwebtemplates.com/free-download-bootstrap-charity-website-template
Tags: charity, charity hub, donate, donations, foundation, fundraising, ngo, non profit, non-profit, nonprofit, organization, social, volunteer, welfare, Causes
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE HTML>
<html class="no-js" lang="de">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="robots" content="index,follow">

    <title>@yield('title')</title>

    <link href="{{asset('/utama/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('/utama/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('/utama/css/bootsnav.css')}}" rel="stylesheet">
    <link href="{{asset('/utama/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('/utama/css/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="bar-phone">
                    <i class="fa fa-phone"></i> <span>Call Us :</span> <strong>+62-8521-0539-270</strong>
                </div>
                <div class="bar-mail">
                    <i class="fa fa-envelope"></i> <span>Mail Us :</span> <strong>info@kitabantu.com</strong>
                </div>
                <div class="header-social">
                    <a class="facebook" href="#" title="facebook" target="_blank" rel="nofollow"><i
                            class="fa fa-facebook"></i> </a>
                    <a class="twitter" href="#" title="twitter" target="_blank" rel="nofollow"><i
                            class="fa fa-twitter"></i> </a>
                    <a class="linkedin" href="#" title="linkedin" target="_blank" rel="nofollow"><i
                            class="fa fa-linkedin"></i> </a>
                    <a class="google" href="#" title="google-plus" target="_blank" rel="nofollow"><i
                            class="fa fa-google-plus"></i> </a>
                    <a class="youtube" href="#" title="youtube-play" target="_blank" rel="nofollow"><i
                            class="fa fa-youtube-play"></i> </a>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-default navbar-sticky bootsnav">
        <div class="container">
            <div class="row">
                <div class="attr-nav">
                    @if(Auth::check())
                    <a class="sponsor-button" href="#">{{Auth()->user()->name}}</a>
                    <a class="donation" href="{{url('/logout')}}">Logout</a>
                    @else
                    <a class="sponsor-button" href="{{url('/login')}}">Login</a>
                    <a class="donation" href="{{url('/pilihakun')}}">Buat Akun</a>
                    @endif
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand logo" href="index.html"><img src="{{asset('utama/images/logo.png')}}"
                            class="img-responsive" /></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/donasi')}}">Donasi</a></li>
                        <li><a href="{{url('/acara')}}">Acara</a></li>
                        @if(Auth::check())
                        <li><a href="{{url('/kontribusi')}}">Kontribusi Saya</a></li>
                        @else
                        <li><a href="{{url('/login')}}">Kontribusi Saya</a></li>
                        @endif
                        <li><a href="{{url('/kontak')}}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Container -->
    @yield('container')

    <footer class="footer">
        <div class="footer-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-section">
                            <h4 class="footer-section-title">About Charity</h4><!-- /.footer-section-title -->

                            <div class="footer-section-body">
                                <p>Charity vitae diam pulvinar, tempus dia aliquam tellus. Quisque mattis odio eu
                                    placerat luctus. Vivamus magna elit, ultrices non lacinia vel, tempor vitae tell
                                    Fusce sit amet sem sit amet.</p>
                            </div><!-- /.footer-section-body -->
                        </div><!-- /.footer-section -->
                    </div><!-- /.columns large-3 medium-12 -->

                    <div class="col-md-3">
                        <div class="footer-section">
                            <h4 class="footer-section-title">Quick Links</h4><!-- /.footer-section-title -->

                            <div class="footer-section-body">
                                <ul class="list-links">
                                    <li>
                                        <a href="index.html">Home</a>
                                    </li>

                                    <li>
                                        <a href="about-us.html">About Us</a>
                                    </li>

                                    <li>
                                        <a href="activities.html">Activities</a>
                                    </li>
                                    <li>
                                        <a href="projects.html">Projects</a>
                                    </li>

                                    <li>
                                        <a href="gallery.html">Gallery</a>
                                    </li>

                                    <li>
                                        <a href="contact.html">Contact Us</a>
                                    </li>

                                </ul><!-- /.list-links -->

                            </div><!-- /.footer-section-body -->
                        </div><!-- /.footer-section -->
                    </div><!-- /.columns large-3 medium-12 -->

                    <div class="col-md-3">
                        <div class="footer-section">
                            <h4 class="footer-section-title">Newsletter Signup</h4><!-- /.footer-section-title -->

                            <div class="footer-section-body">
                                <p>Select your newsletters, enter your email address, and click "Subscribe"</p>

                                <div class="subscribe">
                                    <form action="?" method="post">
                                        <input type="submit" value="Go" class="subscribe-btn">

                                        <div class="subscribe-inner">
                                            <input type="email" id="mail" name="mail" value=""
                                                placeholder="Email Address" class="subscribe-field">
                                        </div><!-- /.subscribe-inner -->
                                    </form>
                                </div><!-- /.subscribe -->
                            </div><!-- /.footer-section-body -->
                        </div><!-- /.footer-section -->
                    </div><!-- /.columns large-3 medium-12 -->

                    <div class="col-md-3">
                        <div class="footer-section">
                            <h4 class="footer-section-title">Contact Us</h4><!-- /.footer-section-title -->

                            <div class="footer-section-body">
                                <p><b>Address:</b> 3104 Doctors Drive, Los Angeles, California, United States</p>

                                <div class="footer-contacts">
                                    <p>
                                        <b>
                                            <i class="fa fa-phone"></i> Phone:
                                        </b>

                                        +1-310-341-3870
                                    </p>

                                    <p>
                                        <b>
                                            <i class="fa fa-envelope-o"></i> Email:
                                        </b>

                                        info@charityhope.com
                                    </p>
                                </div><!-- /.footer-contacts -->
                            </div><!-- /.footer-section-body -->
                        </div><!-- /.footer-section -->
                    </div><!-- /.columns large-3 medium-12 -->
                </div><!-- /.row -->
            </div>
        </div><!-- /.footer-body -->

        <div class="bwt-footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <div class="left-text">Copyright &copy; Charity Hope 2017. All Rights Reserved</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script type="text/javascript" src="{{asset('utama/js/jquery.min.js')}}"></script>
    <script src="{{asset('utama/js/bootstrap.js')}}"></script>
    <script src="{{asset('utama/js/bootsnav.js')}}"></script>
    <script src="{{asset('utama/js/banner.js')}}"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#example').DataTable();
            $('#example1').DataTable();
        });

    </script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: "GET",
                url: "{{url('/provinsi')}}",
                success: function (hasil_provinsi) {
                    $("select[name=id_provinsi]").html(hasil_provinsi);
                }
            });

            $("select[name=id_provinsi]").on("change", function () {
                var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
                $.ajax({
                    type: "GET",
                    url: "{{url('/kota')}}" + '/' + id_provinsi_terpilih,
                    success: function (hasil_kota) {
                        $("select[name=id_kota]").html(hasil_kota);
                    }
                });
            });

            $("select[name=id_kota]").on("change", function () {
                var id_kota_terpilih = $("option:selected", this).attr("id_kota");
                $.ajax({
                    type: "GET",
                    url: "{{url('/kecamatan')}}" + '/' + id_kota_terpilih,
                    success: function (hasil_kecamatan) {
                        $("select[name=id_kecamatan]").html(hasil_kecamatan);
                    }
                });
            });

            $("select[name=id_kecamatan]").on("change", function () {
                var id_kecamatan_terpilih = $("option:selected", this).attr("id_kecamatan");
                $.ajax({
                    type: "GET",
                    url: "{{url('/desa')}}" + '/' + id_kecamatan_terpilih,
                    success: function (hasil_desa) {
                        $("select[name=id_kelurahan]").html(hasil_desa);
                    }
                });
            });
        });
    </script>
    <script src="js/script.js"></script>
</body>

</html>
