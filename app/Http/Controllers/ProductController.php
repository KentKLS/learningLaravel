<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts()
    {
        return view('product-list');
    }
    public function showProduct($id){
        return view('product-details');
    }
}
