<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\UserForm;

Route::get('/', function () {
    return view('welcome');
});

Route::view('home','home');
Route::view('about','about');
Route::view('about/{name}','about');
Route::view('user','about');
