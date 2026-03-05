<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class SellerController extends Controller
{
    function list(){
        return Product::find(1)->productData;
    }
}
