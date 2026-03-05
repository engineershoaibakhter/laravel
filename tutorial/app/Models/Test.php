<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    function getUsernameAttribute($val){
        return ucfirst($val);
    }

    function getAgeAttribute($val){
        return "+92-"+$val;
    }
}
