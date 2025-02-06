<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Models\Seller;

use Auth;

use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function user(){
        $user= User::all();

        return view('admin/admin_users', ['user'=> $user]);
    }

    public function index(){
        return view('admin/dashboard');
    }

    public function register(Request $request){
        $admin= new Admin();
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'min:8'],
        ]);

        $admin->name= $request->name;
        $admin->email = $request->email;
        $admin->password= Hash::make($request->password);
        $admin->save();
        
        return redirect('/admin/login');

    }

    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if(Auth::guard('admin')->attempt($credentials)){
                return redirect('/admin/dashboard');
        }
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }
       
}
