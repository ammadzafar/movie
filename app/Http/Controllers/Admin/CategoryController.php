<?php

namespace App\Http\Controllers\Admin;

use App\Model\Category;
use App\Services\Admin\CategoryServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    protected $category;
    public function __construct(CategoryServices $category)
    {
        $this->category = $category;
    }

    public function create()
    {
        return view('admin.categories.create');
    }
    public function store(Request $request)
    {
        try {
            $this->category->store($request);
            return redirect()->back()->with('success','Category Created Successfully');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error','Something Went Wrong!'.$e->getMessage());
        }
    }
    public function index()
    {
        $categories = Category::all();
        return view('admin.categories.index',compact('categories'));
    }
    public function delete($id)
    {
        try {
            $category = Category::findorfail($id);
            $category->delete();
            return redirect()->route('categories.index')->with('success','Category Deleted Successfully');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error','Something Went Wrong!'.$e->getMessage());
        }
    }
}
