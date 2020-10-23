<?php

namespace App\Http\Controllers\Admin;

use App\Services\Admin\BannerServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BannerController extends Controller
{
    public $banner;
    public function __construct(BannerServices $banner)
    {
        $this->banner = $banner;
    }
    public function create()
    {
        return view('admin.banner.create');
    }
    public function store(Request $request)
    {
//        dd($request->all());
        try {
            $this->banner->storeBanner($request);
            return redirect()->back()->with('success','Banner Created Successfully');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error','Something Went Wrong!'.$e->getMessage());
        }
    }
}
