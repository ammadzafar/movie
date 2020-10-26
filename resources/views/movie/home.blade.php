@extends('layouts.client-master')
@section('content')
    <!-- Header Area Start -->
    <header>
        <!-- Header Menu Area Start -->
        <div class="header-menu mt-50" id="sticky-header">
            <div class="container">
                <div class="row">
                    <!-- Logo Area Start -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="logo-img">
                            <a href="{{route('movie.home')}}"><img src="{{asset('asset/img/home-one/icon/logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <!-- Logo Area End -->
                    <div class="logout-btns">
                        @if(auth()->check())
                            <a href="{{route('logout')}}" class="logout-btn" style="float: left; color: white; font-size: 18px; margin-left: 680px;margin-top: 12px;">Logout</a>
{{--                        @else--}}
{{--                            <a href="{{route('register')}}" class="logout-btn" style="float: left; color: white; font-size: 18px; margin-left: 680px;margin-top: 12px;">Logout</a>--}}
                        @endif
                    </div>
                    <!-- Menu Area Start -->
                    <!-- Header Menu Area Start -->
                </div>
            </div>
        </div>

        <div class="slider-area">
            <div class="slider-active owl-carousel owl-theme">
                <!-- Slider Single -->
                @foreach($banners->take(3) as $banner)
                <div class="slider-item fullscreen single-banner">
                    <div class="youtube-video-wrapper" data-black-overlay="6">
                        <div class="youtube-bg" style="background-image: url({{$banner->image_url}});" data-property="{videoURL:'{{\Illuminate\Support\Facades\URL::asset('uploads/videos/Ask-28243.mp4')}}',containment:'self',showControls:false,startAt:0,mute:true,autoPlay:true,loop:true,opacity:1,showYTLogo:false,optimizeDisplay:true}"></div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="slide-content text-center col-lg-12 col-md-12 col-sm-12">
                                <h1>{{$banner->text}}  <span>SOULS</span></h1>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- Slider Single -->
            </div>
        </div>
        <!-- Slider Area End -->
    </header>
    <!-- Header Area End -->
    <!-- Page Content Start -->
    <div class="page-content">
        <!-- Recent Upload Area Strat -->
        <section class="tailer-area bg-white pt-90 indicator-style-two">
            <div class="container">
                <div class="row">
                    <!-- Section Titel -->
                    <div class="col-md-12">
                        <div class="section-titel style-3 text-left">
                            <h2>MOVIE OF THE <span>YEAR</span></h2>
                            <p>It is a long established fact that a reader will be distracted readable </p>
                        </div>
                    </div>
                    <!-- Section Titel -->
                </div>
                <!-- Recent Upload Item Area Start -->

                <div class="main-section">
                    <div class="recent-upload-active owl-carousel owl-theme">
                        <!-- Single Item -->
                        @foreach($movies as $movie)
                        <div class="trailer-single">
                            <div class="trailer-img">
                                <img src="{{asset('uploads/movies/images/'.$movie->banner)}}" alt="">
{{--                                <a href="www.youtube.com/watch1e86?v=TLnmb07WQ-s" class="popup-youtube">--}}
{{--                                    <i class="icofont icofont-play-alt-2"></i>--}}
{{--                                </a>--}}
                            </div>
                            <div class="trailer-titel">
                                <h5><a href="{{route('movie.detail',['id'=> $movie->id ])}}">{{$movie->name}}</a> <span></span> </h5>
                            </div>
                        </div>
                        <!-- Single Item -->
                        @endforeach
                    </div>
                </div>


            <!-- Recent Upload Item Area End -->
            </div>
        </section>
        <!-- Recent Upload Area End -->


    </div>
    <!-- Page Content End -->
    @endsection
