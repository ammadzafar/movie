<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use App\Model\Movie;
use App\Services\Admin\MovieServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
    protected $movie;
    public function __construct(MovieServices $movie)
    {
        $this->movie = $movie;
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.movie.create',compact('categories'));
    }
    public function store(Request $request)
    {
        try {
            $this->movie->store($request);
            return redirect()->route('movie.index')->with('success','Movie Created Successfully');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error','Something Went Wrong!'.$e->getMessage());
        }
    }
    public function index()
    {
        $movies = Movie::all();
        return view('admin.movie.index',compact('movies'));
    }
    public function delete($id)
    {
        try {
            $movie = Movie::findorfail($id);
            $movie->delete();
            return redirect()->route('movie.index')->with('success','Movie Deleted Successfully');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error','Something Went Wrong!'.$e->getMessage());
        }
    }
}
