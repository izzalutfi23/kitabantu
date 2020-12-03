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
                <h2 data-animation="animated bounceInDown" style="font-size: 50px;"><span>Bantu mereka tetap
                        tersenyum</span></h2>
                <h3 data-animation="animated bounceInDown">Donasi Anda dapat membantu mewujudkan mimpi anak-anak di
                    Indonesia. Bantuan yang Anda berikan akan membawa perubahan dan mempengaruhi kehidupan anak-anak
                    untuk selamanya. Bersama-sama kita mampu membuat dunia menjadi tempat yang lebih baik untuk
                    anak-anak</h3>
                <h4 data-animation="animated bounceInUp"><a href="{{url('/donasi')}}">Donasi Sekarang</a></h4>
            </div>
            <!-- Item 2 -->
            <div class="item slide2">
                <h2 data-animation="animated bounceInDown" style="font-size: 50px;"><span>Lebih banyak beramal hidup
                        menjadi lebih baik</span></h2>
                <h3 data-animation="animated bounceInDown">Kita tak perlu risau jika hak kita diambil orang, karena
                    pasti akan dikembalikan Allah dalam bentuk yang lain. Tapi yang sangat ditakutkan bila kita
                    mengambil hak orang lain, lalu amal kita menjadi tebusannya</h3>
                <h4 data-animation="animated bounceInUp"><a href="{{url('/donasi')}}">Donasi Sekarang</a></h4>
            </div>
            <!-- Item 3 -->
            <div class="item slide3">
                <h2 data-animation="animated bounceInDown" style="font-size: 50px;"><span>Ringankan beban bangun kembali
                        harapan</span>
                </h2>
                <h3 data-animation="animated bounceInDown">Donasi Anda dapat membantu mewujudkan mimpi anak-anak di
                    Indonesia. Bantuan yang Anda berikan akan membawa perubahan dan mempengaruhi kehidupan anak-anak
                    untuk selamanya. Bersama-sama kita mampu membuat dunia menjadi tempat yang lebih baik untuk
                    anak-anak</h3>
                <h4 data-animation="animated bounceInUp"><a href="{{url('/donasi')}}">Donasi Sekarang</a></h4>
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
            <h5>Kami adalah lembaga Non Profit yang menghubungkan para donatur dengan mereka yang membutuhkan bantuan
                baik berupa donasi materi atau aksi nyata</h5>
            <p>Visi kami adalah menjadi lembaga filantrophy yang Profesional serta berpengaruh luas dalam dunia
                kemnusiaan nasional dan global. Dengan misi menciptakan banyak project dan kesempatan kemanusiaan untuk
                membantu orang lain dalam memperbaiki hidup dan kehidupan mereka.</p>
        </div>
    </div>
</section>

<section id="help">
    <div class="container">
        <div class="row text-center">
            <h1>CARA MEMBANTU</h1>
            <hr>
            <h5>Anda dapat membantu mereka yang membutuhkan bantuan berupa uang atau relawan melalui platform ini dengan
                cara sebagai berikut</h5>
            <div class="text-left">
                <div class="col-md-6 clearfix top-off">
                    <div class="icon_circle"><i class="fa fa-heartbeat">&nbsp;</i></div>
                    <div class="help-text">
                        <h4>Berdonasi</h4>
                        <div class="line line-50"></div>
                        <p>Anda dapat berdonasi berupa uang atau barang pada setiap kampanye yang ada di platform ini
                        </p>
                    </div>
                </div>
                <div class="col-md-6 clearfix top-off">
                    <div class="icon_circle"><i class="fa fa-user-plus">&nbsp;</i></div>
                    <div class="help-text">
                        <h4>Relawan</h4>
                        <div class="line line-50"></div>
                        <p>Anda dapat ikut menjadi relawan pada setiap kampanye yang ada di platform ini</p>
                    </div>
                </div>
                <div class="col-md-6 clearfix top-off">
                    <div class="icon_circle"><i class="fa fa-usd">&nbsp;</i></div>
                    <div class="help-text">
                        <h4>Galang Dana</h4>
                        <div class="line line-50"></div>
                        <p>Anda dapat mengalang dana untuk membantu saudara kita yang membutuhkan bantuan sehingga dapat
                            meringankan beban mereka</p>
                    </div>
                </div>
                <div class="col-md-6 clearfix top-off">
                    <div class="icon_circle"><i class="fa fa-users">&nbsp;</i></div>
                    <div class="help-text">
                        <h4>Buat Gerakan</h4>
                        <div class="line line-50"></div>
                        <p>Anda dapat membuat kampanye yang nantinya membutuhkan relawan untuk menjalankan aksi
                            kemanusiaan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="video-sec">
    <div class="container">
        <div class="row text-center">
            <h1>BAGAIMANA ANDA DAPAT MEMBANTU?</h1>
            <hr>
            <h5>Anda dapat membantu dengan:</h5>
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
                            <h5>MENJADI RELAWAN</h5>
                            <p>Menjadi relawan pada setiap kampanye</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-image">
                            <img src="{{asset('utama/images/g2.png')}}" class="attachment-full size-full" alt="g1">
                        </div>
                        <div class="media-text">
                            <h5>BERI HADIAH</h5>
                            <p>Anda dapat memberikan barang yang berarti untuk mereka</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-image">
                            <img src="{{asset('utama/images/g1.png')}}" class="attachment-full size-full" alt="g1">
                        </div>
                        <div class="media-text">
                            <h5>BERI BANTUAN</h5>
                            <p>Memberi bantuan kepada mereka yang membutuhkan bantuan</p>
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
            <h1>PROYEK KAMI</h1>
            <hr>
            <h5>Sisihkan sedikit harta yang kita miliki untuk membantu mereka yang membutuhkan, sedikit bantuan kita
                sangat berarti bagi mereka!</h5>
            <div class="text-center">
                @foreach($donasi as $data)
                @php
                    $jml_bagian = $data->r_donasi()->sum('jml_uang');
                    $total_keseluruhan = $data->target;
                    $persen = ($jml_bagian*100)/$total_keseluruhan;
                @endphp
                <div class="col-md-4 clearfix top-off">
                    <div class="grid-image"><img src="{{Storage::url('public/donasi/'.$data->foto)}}" height="200px">
                    </div>
                    <div class="post-content">
                        <h3>{{$data->judul}}</h3>
                        <div class="progress" style="margin-top: 15px; height: 10px;">
                            <div class="progress-bar" role="progressbar" style="width: {{ceil($persen)}}%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <table width="100%">
                            <tr>
                                <td align="left" valign="top">
                                    <h4>Rp{{number_format($data->r_donasi()->sum('jml_uang'))}}</h4>
                                    <p style="font-size: 12px;">Terkumpul dari Rp{{number_format($data->target)}}</p>
                                </td>
                                <td align="right" valign="top">
                                    <h5>{{ceil($persen)}}%</h5>
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
                <h2>Apakah anda ingin membantu orang lain didaerah anda?</h2><!-- /.callout-title -->
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
