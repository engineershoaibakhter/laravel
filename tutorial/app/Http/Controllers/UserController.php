<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        $name = 'akhter';
        $arr = ['shoaib','akhter','akhter'];
        return view('user',["name"=>$name,"users"=>$arr]);
    }
}
