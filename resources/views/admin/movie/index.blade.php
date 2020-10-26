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
                                <li><a href="{{route('categories.index')}}"> CATEGORIES <span></span></a></li>
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
            <div class="form-group float-left w-100">
                <a href="{{route('create.movie')}}" style="background-color: #E2A750; padding: 10px 20px; border: 0; border-radius: 5px; line-height: 37px;">Add Movie</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Release_Date</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($movies as $key => $movie)
                    <tr>
                        <th scope="row">{{$key + 1}}</th>
                        <td>{{$movie->name}}</td>
                        <td>{{$movie->release_date}}</td>
                        <td>
                            <form action="{{route('delete.movie',['id'=>$movie->id])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background-color: #E2A750; padding: 10px 20px; border: 0; border-radius: 5px;">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


