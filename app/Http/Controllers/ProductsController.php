<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function products(){
        $product = [1,2,3,4];
        // echo "HELLO CONTROLLER";
        

        return view('products', compact('product'));
        // return view('products');
    }
    //
}
