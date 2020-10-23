@extends('layouts.client-master')
@section('content')
    <!-- Header Area Start -->
    <header>
        <!-- Header Menu Area Start -->
        <div class="header-menu mt-25 border-bottom" id="sticky-header">
            <div class="container">
                <div class="row">
                    <!-- Logo Area Start -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="logo-img">
                            <a href="{{route('movie.home')}}"><img src="{{asset('asset/img/home-one/icon/logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <!-- Logo Area End -->
                </div>
            </div>
        </div>
        <!-- Header Menu Area Start -->
        <!-- Breadcamb Area Start -->
        <section class="breadcamb-area bg-17 bg-overlay-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="bradcamb-content text-center text-white text-uppercase">
                            <h1>MOVIE DETAILS</h1>
                            <ul>
                                <li><a href="index.html">HOME <span>/</span></a></li>
                                <li>MOVIE DETAIL</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Breadcamb Area End -->
    </header>
    <!-- Header Area End -->
    <!-- Page Content Start -->
    <div class="page-content">
        <!-- Movie Details Area Start -->
        <div class="movie-details-area pt-100 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="movie-details-content">
                            <div class="movie-details-image mb-40">
                                <img src="{{asset('uploads/movies/images/'.$movie->banner)}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="movie-details-meta">
                            <h3>MOVIE NAME: {{$movie->name}}</h3>
                            <ul>
                                <li>{{$movie->release_date}} -</li>
                                @foreach($movie->categories as $category)
                                <li>{{$category->name}}-</li>
                                @endforeach
                                <li>{{$movie->length}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="movie-details-info">
                            <p>{{$movie->description}}</p>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="movie-popup-video bg-18">
                            <div class="movie-details-pop">
                                <a href="www.youtube.com/watch1e86?v=TLnmb07WQ-s" class="popup-youtube">
                                    <i class="icofont icofont-play-alt-2"></i>
                                </a>
                            </div>
                        </div>
                        <h5 class="trailer-title">MOVIE TRAILER : {{$movie->name}}</h5>
                    </div>
                    <div class="col-md-12">
                        <div class="post-share">
                            <h6>Share:</h6>
                            <ul>
                                <li><a href="#"><i class="icofont icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-google-plus"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-instagram"></i></a></li>
                                <li><a href="#"><i class="icofont icofont-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="movie-details-info">
                            <ul>
                                <li><span>INITIAL RELEASE : </span> {{$movie->release_date}}</li>
                                <li><span>DIRECTOR : </span> {{$movie->director}}</li>
                                <li><span>LANGUAGE : </span> {{$movie->language}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="movie-details-info">
                            <ul class="border-none">
                                <li><span>LENGTH :</span> {{$movie->length}}</li>
                                <li><span>CAST :</span> {{$movie->cast}}</li>
                                <li><span>IMDb :</span> 7.4/10</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Movie Details Area End -->
        <!-- Most Popular Area Strat -->
        <div class="tailer-area movie-dtls bg-white pb-100 indicator-style-two">
            <div class="container">
                <div class="row">
                    <!-- Section Titel -->
                    <div class="col-md-12">
                        <div class="section-titel style-3 text-left">
                            <h2>PEPOLE ALSO SEARCH : </h2>
                        </div>
                    </div>
                    <!-- Section Titel -->
                </div>
                <!-- Most Popular Item Area Start -->
                <div class="main-section">
                    <div class="recent-upload-active owl-carousel owl-theme">
                        <!-- Single Item -->
                        @foreach($movies as $recent_movie)
                            <div class="trailer-single">
                                <div class="trailer-img">
                                    <img src="{{asset('uploads/movies/images/'.$recent_movie->poster)}}" alt="">
                                    <a href="www.youtube.com/watch1e86?v=TLnmb07WQ-s" class="popup-youtube">
                                        <i class="icofont icofont-play-alt-2"></i>
                                    </a>
                                </div>
                                <div class="trailer-titel">
                                    <h5><a href="{{route('movie.detail',['id'=> $recent_movie->id ])}}">{{$recent_movie->name}}</a> <span></span> </h5>
                                </div>
                            </div>
                            <!-- Single Item -->
                    @endforeach
                        <!-- Single Item -->
                    </div>
                </div>
                <!-- Most Popular Item Area End -->
            </div>
        </div>
        <!-- Most Popular Area End -->
    </div>
    <!-- Page Content End -->
    @endsection
