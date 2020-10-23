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
                            <h1>MOVIE </h1>
                            <ul>
                                <li><a href="{{route('create.banner')}}">HOME <span>/</span></a></li>
                                <li><a href="#">MOVIE <span>/</span></a></li>
                                <li><a href="{{route('create.categories')}}">CREATE CATEGORY</a></li>
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
            <form class="at-formtheme" action="{{route('store.movie')}}" method="post" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <legend>Create Movie</legend>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="movie name">
                    </div>
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Movie Length</label>
                        <input type="text" name="length" placeholder="total movie movie">
                    </div>
                    @error('length')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                    <!-- Select Movie Category -->
                    <div class="form-group">
                        <label for="categories"><b>Category</b></label>
                        <select class="js-example-basic-multiple form-control brands" id="categories"  name="categories[]" multiple="multiple">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                        </select>
                    </div>
                    @error('categories')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                    <!-- product quantity -->
                    <div class="form-group">
                        <label>Poster</label>
                        <input type="file" name="poster" placeholder="movie poster">
                    </div>
                    @error('poster')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Banner</label>
                        <input type="file" name="banner" placeholder="movie banner">
                    </div>
                    @error('banner')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Director</label>
                        <input type="text" name="director" placeholder="director name">
                    </div>
                    @error('director')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Language</label>
                        <input type="text" name="language" placeholder="movie language">
                    </div>
                    @error('language')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Description</label>
                        <textarea name="description" placeholder="description"></textarea>
                    </div>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Cast</label>
                        <input type="text" name="cast" placeholder="movie cast">
                    </div>
                    @error('cast')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <div class="form-group">
                        <label>Release_date</label>
                        <input type="date" name="release_date" placeholder="release_date">
                    </div>
                    @error('release_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
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
            $(document).ready(function() {
                $('.js-example-basic-multiple').select2();
            });
        });

    </script>
@endsection
