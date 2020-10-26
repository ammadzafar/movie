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
                            <a href="index.html"><img src="{{asset('asset/img/home-one/icon/logo.png')}}" alt=""></a>
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
                            <h1>CATEGORIES</h1>
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
            <form class="at-formtheme" action="{{route('store.categories')}}" method="post" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <legend>Category</legend>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="category name">
                    </div>
                    <div class="form-group float-left w-100">
                        <button type="submit" style="background: #E2A750; padding: 10px 20px; border: 0; border-radius: 5px;">submit</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection

