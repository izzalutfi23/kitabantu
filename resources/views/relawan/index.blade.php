@extends('relawan/layout/main')
@section('title', 'Home | Kitabantu')
@section('container')
<div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Item 1 -->
            <div class="item active slide1">
                <h2 data-animation="animated bounceInDown"><span>Give a little change a lot</span></h2>
                <h3 data-animation="animated bounceInDown">consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.!</h3>
                <h4 data-animation="animated bounceInUp"><a href="about-us.html">READ MORE</a></h4>
            </div>
            <!-- Item 2 -->
            <div class="item slide2">
                <h2 data-animation="animated bounceInDown"><span>More charity More better life</span></h2>
                <h3 data-animation="animated bounceInDown">consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.!</h3>
                <h4 data-animation="animated bounceInUp"><a href="about-us.html">READ MORE</a></h4>
            </div>
            <!-- Item 3 -->
            <div class="item slide3">
                <h2 data-animation="animated bounceInDown"><span>Raise fund Warm heart</span></h2>
                <h3 data-animation="animated bounceInDown">consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat.!</h3>
                <h4 data-animation="animated bounceInUp"><a href="about-us.html">READ MORE</a></h4>
            </div>

        </div>
        <!-- End Wrapper for slides-->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>

<section id="about-sec">
    <div class="container">
        <div class="row text-center">
            <h1>TENTANG KITA BANTU</h1>
            <hr>
            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                culpa qui officia deserunt mollit anim id est laborum.</p>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam
                est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius
                modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima
                veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea
                commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil
                molestiae consequatur.</p>
        </div>
    </div>
</section>

<section id="help">
    <div class="container">
        <div class="row text-center">
            <h1>WAYS TO HELP</h1>
            <hr>
            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.</h5>
            <div class="text-left">
                <div class="col-md-6 clearfix top-off">
                    <div class="icon_circle"><i class="fa fa-heartbeat">&nbsp;</i></div>
                    <div class="help-text">
                        <h4>Donate</h4>
                        <div class="line line-50"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-md-6 clearfix top-off">
                    <div class="icon_circle"><i class="fa fa-user-plus">&nbsp;</i></div>
                    <div class="help-text">
                        <h4>Participate</h4>
                        <div class="line line-50"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-md-6 clearfix top-off">
                    <div class="icon_circle"><i class="fa fa-usd">&nbsp;</i></div>
                    <div class="help-text">
                        <h4>Fundraise</h4>
                        <div class="line line-50"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-md-6 clearfix top-off">
                    <div class="icon_circle"><i class="fa fa-credit-card">&nbsp;</i></div>
                    <div class="help-text">
                        <h4>Contribute</h4>
                        <div class="line line-50"></div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="video-sec">
    <div class="container">
        <div class="row text-center">
            <h1>How can you help?</h1>
            <hr>
            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.</h5>
            <div class="text-left">
                <div class="col-md-6 clearfix top-off">
                    <video width="400" controls>
                        <source src="{{asset('utama/images/mov_bbb.mp4')}}" type="video/mp4">
                    </video>
                </div>
                <div class="col-md-6 clearfix top-off">
                    <div class="media">
                        <div class="media-image">
                            <img src="{{asset('utama/images/g1.png')}}" class="attachment-full size-full" alt="g1">
                        </div>
                        <div class="media-text">
                            <h5>BECOME A VOLUNTEER</h5>
                            <p>Give us a brief description of the service that you are promoting.</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-image">
                            <img src="{{asset('utama/images/g2.png')}}" class="attachment-full size-full" alt="g1">
                        </div>
                        <div class="media-text">
                            <h5>MAKE A GIFT</h5>
                            <p>Give us a brief description of the service that you are promoting.</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-image">
                            <img src="{{asset('utama/images/g1.png')}}" class="attachment-full size-full" alt="g1">
                        </div>
                        <div class="media-text">
                            <h5>GIVE A SCHOLASHIP</h5>
                            <p>Give us a brief description of the service that you are promoting.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="projects-sec">
    <div class="container">
        <div class="row text-center">
            <h1>OUR PROJECTS</h1>
            <hr>
            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                et dolore magna aliqua.</h5>
            <div class="text-center">
                @foreach($donasi as $data)
                <div class="col-md-4 clearfix top-off">
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
                        <a href="{{url('/donasi/detail/'.$data->id)}}" title="">Lihat Detail</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<div class="callout">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Change Their World. Change Yours. This changes everything.</h2><!-- /.callout-title -->
            </div><!-- /.columns large-6 -->

            <div class="col-md-6">
                <div class="callout-actions">
                    <a href="contact.html" class="button">Ikut jadi relawan</a>

                    <span class="callout-separator">
                        <span>Or</span>
                    </span>

                    <a href="donate.html" class="button">Ikut Berdonasi</a>
                </div><!-- /.callout-actions -->
            </div><!-- /.columns large-6 -->
        </div><!-- /.row -->
    </div>
</div>
@endsection
