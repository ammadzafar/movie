<?php

namespace App\Traits;

use JD\Cloudder\Facades\Cloudder;

trait ImageUpload {

    /**
     * saved the question image and return its path
     * @param $image
     * @param $path
     * @return mixed
     */
    public function upload($image, $path){
        if(env('IMAGE_STORAGE') == 'cloud'){
            if (strpos($image->getMimeType(), 'video') !== false) {
                Cloudder::uploadVideo($image);
            }else{
                Cloudder::upload($image);
            }

            $imageUrl = Cloudder::getResult()['url'];
        }
        else{
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path($path);
            $image->move($destinationPath, $name);
            $imageUrl =asset($path) .'/'.$name;
        }
        return  $imageUrl;
    }
}
