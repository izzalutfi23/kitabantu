@extends('relawan/layout/main')
@section('title', 'Detail | Kitabantu')
@section('container')
<section id="inner-banner">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>DETAIL</h1>
                </div>
                <div class="col-sm-6">
                    <h6 class="breadcrumb"><a href="index.html">Home</a> / Detail</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about-sec">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <img class="img-fluid" src="{{Storage::url('public/donasi/'.$donasi->foto)}}" width="100%" alt="">
                <div class="blog_details">
                    <h2>{{$donasi->judul}}</h2>
                    {{$donasi->keterangan}}
                </div>
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="well well-sm">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <img src="{{asset('utama/images/user/profil.jpeg')}}" alt="" class="img-rounded img-responsive" />
                                </div>
                                <div class="col-sm-6 col-md-8">
                                    <h4>{{$donasi->organisasi->name}}</h4>
                                    <small><cite title="San Francisco, USA">{{$donasi->organisasi->kota->name.', '.$donasi->organisasi->provinsi->name}}<i
                                                class="glyphicon glyphicon-map-marker">
                                            </i></cite></small>
                                    <p>
                                        Dibuat pada tanggal<br>
                                        <i class="fa fa-calendar"></i> {{date('d M Y', strtotime($donasi->created_at))}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if(Auth::check())
                    @if(Auth()->user()->role=='relawan')
                    <a href="{{url('/donasi/input/'.$donasi->id)}}"><button class="btn btn-success donasi">Donasi Sekarang</button></a>
                    @else
                    <a href="{{url('/login')}}"><button class="btn btn-success donasi">Donasi Sekarang</button></a>
                    @endif
                @else
                <a href="{{url('/login')}}"><button class="btn btn-success donasi">Donasi Sekarang</button></a>
                @endif
                <button class="sponsor-button waktu"><i class="fa fa-clock-o"></i> 3 Hari lagi</button>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="well well-sm" style="margin-top: 20px;">
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
                            <div class="progress" style="margin-top: 15px; height: 10px;">
                                <div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <p style="font-size: 12px;">Dari 2 Donasi</p>
                        </div>
                    </div>
                </div>
                Share on <br>
                <!-- Sharingbutton Facebook -->
                <a class="resp-sharing-button__link"
                    href="https://facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsharingbuttons.io" target="_blank"
                    rel="noopener" aria-label="Facebook">
                    <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--medium">
                        <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z" />
                            </svg></div>Facebook
                    </div>
                </a>

                <!-- Sharingbutton Twitter -->
                <a class="resp-sharing-button__link"
                    href="https://twitter.com/intent/tweet/?text=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;url=http%3A%2F%2Fsharingbuttons.io"
                    target="_blank" rel="noopener" aria-label="Twitter">
                    <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--medium">
                        <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M23.44 4.83c-.8.37-1.5.38-2.22.02.93-.56.98-.96 1.32-2.02-.88.52-1.86.9-2.9 1.1-.82-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.03.7.1 1.04-3.77-.2-7.12-2-9.36-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.74-.03-1.44-.23-2.05-.57v.06c0 2.2 1.56 4.03 3.64 4.44-.67.2-1.37.2-2.06.08.58 1.8 2.26 3.12 4.25 3.16C5.78 18.1 3.37 18.74 1 18.46c2 1.3 4.4 2.04 6.97 2.04 8.35 0 12.92-6.92 12.92-12.93 0-.2 0-.4-.02-.6.9-.63 1.96-1.22 2.56-2.14z" />
                            </svg></div>Twitter
                    </div>
                </a>

                <!-- Sharingbutton Tumblr -->
                <a class="resp-sharing-button__link"
                    href="https://www.tumblr.com/widgets/share/tool?posttype=link&amp;title=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;caption=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;content=http%3A%2F%2Fsharingbuttons.io&amp;canonicalUrl=http%3A%2F%2Fsharingbuttons.io&amp;shareSource=tumblr_share_button"
                    target="_blank" rel="noopener" aria-label="Tumblr">
                    <div class="resp-sharing-button resp-sharing-button--tumblr resp-sharing-button--medium">
                        <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M13.5.5v5h5v4h-5V15c0 5 3.5 4.4 6 2.8v4.4c-6.7 3.2-12 0-12-4.2V9.5h-3V6.7c1-.3 2.2-.7 3-1.3.5-.5 1-1.2 1.4-2 .3-.7.6-1.7.7-3h3.8z" />
                            </svg></div>Tumblr
                    </div>
                </a>

                <!-- Sharingbutton E-Mail -->
                <a class="resp-sharing-button__link"
                    href="mailto:?subject=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;body=http%3A%2F%2Fsharingbuttons.io"
                    target="_self" rel="noopener" aria-label="E-Mail">
                    <div class="resp-sharing-button resp-sharing-button--email resp-sharing-button--medium">
                        <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M22 4H2C.9 4 0 4.9 0 6v12c0 1.1.9 2 2 2h20c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zM7.25 14.43l-3.5 2c-.08.05-.17.07-.25.07-.17 0-.34-.1-.43-.25-.14-.24-.06-.55.18-.68l3.5-2c.24-.14.55-.06.68.18.14.24.06.55-.18.68zm4.75.07c-.1 0-.2-.03-.27-.08l-8.5-5.5c-.23-.15-.3-.46-.15-.7.15-.22.46-.3.7-.14L12 13.4l8.23-5.32c.23-.15.54-.08.7.15.14.23.07.54-.16.7l-8.5 5.5c-.08.04-.17.07-.27.07zm8.93 1.75c-.1.16-.26.25-.43.25-.08 0-.17-.02-.25-.07l-3.5-2c-.24-.13-.32-.44-.18-.68s.44-.32.68-.18l3.5 2c.24.13.32.44.18.68z" />
                            </svg></div>E-Mail
                    </div>
                </a>

                <!-- Sharingbutton Pinterest -->
                <a class="resp-sharing-button__link"
                    href="https://pinterest.com/pin/create/button/?url=http%3A%2F%2Fsharingbuttons.io&amp;media=http%3A%2F%2Fsharingbuttons.io&amp;description=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking."
                    target="_blank" rel="noopener" aria-label="Pinterest">
                    <div class="resp-sharing-button resp-sharing-button--pinterest resp-sharing-button--medium">
                        <div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M12.14.5C5.86.5 2.7 5 2.7 8.75c0 2.27.86 4.3 2.7 5.05.3.12.57 0 .66-.33l.27-1.06c.1-.32.06-.44-.2-.73-.52-.62-.86-1.44-.86-2.6 0-3.33 2.5-6.32 6.5-6.32 3.55 0 5.5 2.17 5.5 5.07 0 3.8-1.7 7.02-4.2 7.02-1.37 0-2.4-1.14-2.07-2.54.4-1.68 1.16-3.48 1.16-4.7 0-1.07-.58-1.98-1.78-1.98-1.4 0-2.55 1.47-2.55 3.42 0 1.25.43 2.1.43 2.1l-1.7 7.2c-.5 2.13-.08 4.75-.04 5 .02.17.22.2.3.1.14-.18 1.82-2.26 2.4-4.33.16-.58.93-3.63.93-3.63.45.88 1.8 1.65 3.22 1.65 4.25 0 7.13-3.87 7.13-9.05C20.5 4.15 17.18.5 12.14.5z" />
                            </svg></div>Pinterest
                    </div>
                </a>

            </div>

        </div>
    </div>
</section>
@endsection