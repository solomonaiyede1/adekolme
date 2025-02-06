<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cat= Category::all();
        return view('admin/admin_category', ['cat' => $cat]);
    }

    public function create(Request $request)
    {
        //
        $cat= new Category();
        $cat->product_category= $request->product_category;
        $cat->save();
        return redirect()->back()->with("success", "category Created successfully");
    }

    public function destroy($id)
    {
        $delete= Category::find($id)->delete();
        return redirect()->back();
    }
}
