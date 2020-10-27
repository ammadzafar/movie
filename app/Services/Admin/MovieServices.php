<?php


namespace App\Services\Admin;


use App\Model\Category;
use App\Model\Movie;
use App\Traits\ImageUpload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class MovieServices
{
    use ImageUpload;
    public function store(Request $request)
    {
//        dd($request->all());
        $movie = new Movie();
        $movie->name = $request->name;
        $movie->description = $request->description;
        $movie->release_date = $request->release_date;
        $movie->banner = $request->hasFile('banner') ? $this->upload($request->file('banner'), 'uploads/movies') : '';

//        if ($request->hasFile('banner'))
//        {
////            $path ='uploads/movies/images';
//            $filename = $request->file('banner')->getClientOriginalName();
//            $request->file('banner')->move('uploads/movies/images',$filename);
//            $movie->banner = $filename;
//        }
        $movie->save();

        if ($request->has('categories') > 0)
        {
            foreach($request->categories as $category){
                DB::table('category_movie')->insert(['category_id' => $category, 'movie_id' => $movie->id]);
            }
        }
    }
}
