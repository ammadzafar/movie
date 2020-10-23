<?php

namespace App\Http\Controllers\Admin;

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
}
