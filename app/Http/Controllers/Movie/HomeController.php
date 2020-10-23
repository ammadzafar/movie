<?php

namespace App\Http\Controllers\Movie;

use App\Model\Banner;
use App\Model\Movie;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $movies = Movie::all();
        return view('movie.home',compact('banners','movies'));
    }
    public function detail($id)
    {
//        dd($id);
        $movies = Movie::all();
        $movie = Movie::findorfail($id);
//        dd($movie->categories);
        return view ('movie.detail',compact('movie','movies'));
    }
}
