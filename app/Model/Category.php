<?php

namespace App\Model;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use Uuid;
    protected $guarded = ['id'];

    public function movies()
    {
        return $this->belongsToMany(Movie::class);
    }
}
