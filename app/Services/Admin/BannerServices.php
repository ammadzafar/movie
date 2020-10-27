<?php


namespace App\Services\Admin;


use App\Model\Banner;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use JD\Cloudder\Facades\Cloudder;

class BannerServices
{
    use ImageUpload;
    public function storeBanner(Request $request)
    {
        $banner = new Banner();
        $banner->name = $request->name;
        $banner->text = $request->text;
        $banner->image_url = $request->hasFile('image_url') ? $this->upload($request->file('image_url'), 'uploads/banners') : $request->image_url;
        $banner->save();
    }
}
