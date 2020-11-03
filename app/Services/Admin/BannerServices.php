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
        if($request->hasFile('image_url')){
            $response = $this->upload($request->file('image_url'),'uploads/banners');
            $banner->image_url = $request['imageUrl'];
            $banner->public_id = $request['publicId'];
        }else{
            $banner->image_url = $request->image_url;
        }
        $banner->save();
    }
}
