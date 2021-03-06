@extends('layouts.admin-master')
@section('content')
    <header>
        <!-- Header Menu Area Start -->
        <div class="header-menu mt-25 border-bottom" id="sticky-header">
            <div class="container">
                <div class="row">
                    <!-- Logo Area Start -->
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="logo-img">
                            <a href="{{route('create.banner')}}"><img src="{{asset('asset/img/home-one/icon/logo.png')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="logout-btns">
                        @if(auth()->check())
                            <a href="{{route('logout')}}" class="logout-btn" style="float: left; color: white; font-size: 18px; margin-left: 680px;margin-top: 12px;">Logout</a>
                        @else
                            <a href="{{route('register')}}" class="logout-btn" style="float: left; color: white; font-size: 18px; margin-left: 680px;margin-top: 12px;">Logout</a>
                        @endif
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
                                <li><a href="{{route('banner.index')}}">BANNER<span>/</span></a></li>
                                <li><a href="{{route('movie.index')}}"> MOVIE <span>/</span></a></li>
                                <li><a href="{{route('categories.index')}}">CATEGORIES<span></span></a></li>
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
        <div class="at-pageform">
            <form class="at-formtheme" action="{{route('store.banner')}}" method="post" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <legend>Banner</legend>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="banner name">
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <input type="text" name="public_id" value="" style="display: none">--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <label>Content</label>
                        <textarea name="text" placeholder="banner content"></textarea>
                    </div>
                    <label><b>Image</b></label>
                    <div class="form-group radio-buttons" style="float: right;">
                        <div class="at-radio" style="float: left; padding: 0 20px 0 0;">
                            <input type="radio" id="radio1" name="radio" style="float: left; width: auto; height: auto; margin: 4px 10px 4px 0;">
                            <label for="radio1"  style="float: left; width: auto;cursor: pointer;">Image</label>
                        </div>
                        <div class="at-radio" style="float: left;">
                            <input type="radio" id="radio2" name="radio" style="float: left; width: auto; height: auto; margin: 4px 10px 4px 0; ">
                            <label for="radio2"  style="float: left; width: auto;cursor: pointer;">link</label>
                        </div>
                    </div>

                    <div class="form-group image-radio" style="display: none">
                        <label style="width: 100%;">Image</label>
                        <input type="file" name="image_url" >
                    </div>
                    <div class="form-group link-radio" style="display: none">
                        <label style="width: 100%;">Link</label>
                        <input type="url" name="image_url" placeholder="image link" >
                    </div>
                    <div class="form-group float-left w-100">
                        <button type="submit" style="background: #E2A750; padding: 10px 20px; border: 0; border-radius: 5px;">submit</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function(){
            $(document).on('click','.radio-buttons',function(){
                if($('#radio1').prop("checked") == true){
                    $('.image-radio').show();
                    $('.link-radio').hide();
                }
                else if($('#radio2').prop("checked") == true) {
                    $('.image-radio').hide();
                    $('.link-radio').show();
                }
            })
            $(document).on('click','.radio-buttons2',function(){
                if($('#radio3').prop("checked") == true){
                    $('.video-radio').show();
                    $('.link2-radio').hide();
                }
                else if($('#radio4').prop("checked") == true) {
                    $('.video-radio').hide();
                    $('.link2-radio').show();
                }
            })
        });

    </script>
@endsection

