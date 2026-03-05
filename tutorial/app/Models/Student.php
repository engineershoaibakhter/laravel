<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
     function getNameAttribute($val){
        return ucfirst($val);
    }

    function getEmailAttribute($val){
        return $val."@gmail.com";
    }

    function setNameAttribute($val){
        $this->attributes['name']=ucfirst($val);
    }

    function setEmailAttribute($val){
        $this->attributes['email']=$val."@gmail.com";
    }
}
