<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Blade;
use App\Http\Controllers\StudentController;

$info = "shoaib akhter";

$info = Str::of($info)->after('shoaib')->before('akhter')->trim()->upper();

echo $info;

Route::get('/', function () {
    $totalValue=10;
    return Blade::render('<h1>Hello World. The value is {{$totalValue}}.</h1>',['totalValue'=>$totalValue]);
    // return view('welcome');
});

Route::get('list',[SellerController::class,'list']);

