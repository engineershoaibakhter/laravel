<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\UserForm;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user',[UserController::class,'getUser']);

Route::get('/admin',[AdminController::class,'getAdmin']);

Route::view('user-form','user-form');
Route::post('addUser',[UserForm::class,'getFormData']);
