<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HobieUser extends Model
{
    use HasFactory;

    function getHobies(){
        return $this->hasOne('App\Models\Hobies','id','hobie_id');
    }
}
