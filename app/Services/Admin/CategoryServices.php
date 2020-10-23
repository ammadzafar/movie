<?php


namespace App\Services\Admin;


use App\Model\Category;
use Illuminate\Http\Request;

class CategoryServices
{
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        $category->save();
    }
}
