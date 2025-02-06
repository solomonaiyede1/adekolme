<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\User;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $order= Order::orderBy('created_at', 'DESC')->get();
        return view('admin/admin_order', ['order' => $order]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function complete($id)
    {
        $order= Order::where('id', $id)->update(['completion_status' => 'completed']);

        return redirect()->back();
    }

    public function completeP($id)
    {
        $order= Order::where('id', $id)->update(['completion_status' => 'pending']);

        return redirect()->back();
    }

    public function detail($id){
        $order= Order::with('order_user')->where('id', $id)->get();
        return view('admin/admin_order_detail',['order' => $order]);
    }

}
