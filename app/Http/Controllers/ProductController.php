<?php

namespace App\Http\Controllers;

use App\Models\ProductsList;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts()
    {
        $products = ProductsList::get();
        return view('product-list',compact('products'));
    }

    public function showProduct($id){

         return view('product-details')
                    ->with('key', $id);
     }
}
