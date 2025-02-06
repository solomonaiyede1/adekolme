<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Category;
use App\Models\Banner;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function home()
    {
        $product= Product::limit(3)->get();
        return view('welcome', ['product' => $product,
                                'one' => $one,

                                ]);
    }

    public function detail_show($id)
    {
        $product= Product::where('id', $id)->get();
        return view('product/product-detail', ['product' => $product]);
    }

    public function index()
    {
        $cat = Category::all();
        $product= Product::all();
        return view('admin/admin_product', ['product' => $product, 'cat' => $cat]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $request->validate([
            'product_image'=> ['required',
                                'image',
                                'mimes:png, jpg',
                                'dimensions:min_width=300,min_height=300,max_width=500,max_height=500',
                                'max:2048'], 
                            ]);
                            
        $prod= new Product();
        $prod->product_category= $request->product_category;
        $prod->product_name= $request->product_name;
        $prod->product_price= $request->product_price;
        $prod->product_currency= $request->product_currency;
        $prod->product_description= $request->product_description;
        
            if($request->hasFile("product_image")){
                $fileName = time(). '.' . $request->file("product_image")->extension();
                $request->file('product_image')->move('images', $fileName);
                $prod->product_image = '/images/'.$fileName ;
            
        }

        $prod->save();
        return redirect()->back()->with("success", "Product Created successfully");
        
    }

    public function search(Request $request)
    {
        $product= Product::where('product_name', $request->product)->orWhere('product_category', $request->product)->get();
        
        return view('product/product-search', ['product' => $product]);
    }


    public function destroy($id)
    {
        //
        $delete= Product::find($id)->delete();
        return redirect()->back();
    }

    public function category($cat){
        $cat= Product::where('product_category', $cat)->get();

        return view('product/product', ['cat' => $cat]);
    }

}
