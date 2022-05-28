<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController_ extends Controller
{
    //order index
    function index(){
        $orders = Order::with('division', 'district','thana')->where(['status'=> 1])->latest()->paginate(10);
        return view('backend.order.orderlist', compact('orders'));
    }

    //order item
    function orderItems($order_id){
        $orderItems=OrderItem::with('product')->where(['status'=> 1, 'order_id'=> $order_id])->get();
        return view('backend.order.orderItems', compact('orderItems'));
    }
}
