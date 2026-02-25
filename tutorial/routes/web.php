<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\admin\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{name}',[UserController::class,'getUser']);

Route::get('/admin',[AdminController::class,'getAdmin']);
