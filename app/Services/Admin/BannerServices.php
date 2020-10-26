<?php


namespace App\Services\Admin;


use App\Model\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class BannerServices
{
    public function storeBanner(Request $request)
    {
        $banner = new Banner();
        $banner->name = $request->name;
        $banner->text = $request->text;

        if($request->hasFile('image_url'))
        {
            $filename = $request->file('image_url')->getClientOriginalName();
            $request->file('image_url')->move('uploads/images/',$filename);
            $banner->image_url = URL::asset('uploads/images/').$filename;
        }else{
            $banner->image_url = $request->image_url;
        }
        $banner->save();
    }
}
