<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student',[StudentController::class,'list']);
Route::get('/save',[StudentController::class,'save']);
