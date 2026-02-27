<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserForm extends Controller
{

    function getFormData(Request $request){
        $request->validate([
            'username'=>'required | min:3',
            'email'=>'required | email',
            'password'=>'required | max:8'
        ],[
            'username.required'=>'Username is required field',
            'username.uppercase'=>'Username must be in uppercase',
        ]);
        echo $request;
    }
}
