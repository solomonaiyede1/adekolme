<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class HomeController extends Controller
{

    public function home(){
        $product=Product::paginate(20);

        return view('product/product', ['product' => $product]);
        
    }

}


