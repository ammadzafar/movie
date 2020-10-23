<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
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

    public function index()
    {
        $categories = Category::all();
        return view('admin.movie.create',compact('categories'));
    }
    public function store(Request $request)
    {
        try {
            $this->movie->store($request);
            return redirect()->back()->with('success','Movie Created Successfully');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error','Something Went Wrong!'.$e->getMessage());
        }
    }
}
