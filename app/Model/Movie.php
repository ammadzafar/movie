<?php

namespace App\Model;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use Uuid;
    protected $guarded = ['id'];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
