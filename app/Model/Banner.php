<?php

namespace App\Model;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use Uuid;
    protected $guarded = ['id'];
}
