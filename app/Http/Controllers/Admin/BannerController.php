<?php

namespace App\Http\Controllers\Admin;

use App\Model\Banner;
use App\Services\Admin\BannerServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use JD\Cloudder\Facades\Cloudder;

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
            return redirect()->route('banner.index')->with('success','Banner Created Successfully');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error','Something Went Wrong!'.$e->getMessage());
        }
    }
    public function index()
    {
        $banners = Banner::all();
        return view('admin.banner.index',compact('banners'));
    }
    public function delete($id)
    {
        try {
            if (env('IMAGE_STORAGE') == 'cloud')
            {
                $file = Banner::findorfail($id);
                if (file_exists('http://res.cloudinary.com/dalguidsd/image/upload/'.$file))
                {
                    Cloudder::destroyImage($id);
                }
            }
            else
                {
                    $banner = Banner::findorfail($id);
                    $banner->delete();
                }
            return redirect()->route('banner.index')->with('success','Banner Deleted Successfully');
        }
        catch (\Exception $e)
        {
            return redirect()->back()->with('error','Something Went Wrong!'.$e->getMessage());
        }
    }
}
