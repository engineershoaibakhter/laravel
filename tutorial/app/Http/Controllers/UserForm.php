<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserForm extends Controller
{
    function getFormData(Request $request){
        echo $request;
    }
}
