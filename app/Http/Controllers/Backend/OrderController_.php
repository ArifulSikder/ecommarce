<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\District;
use App\Models\Division;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController_ extends Controller
{
    //order index
    function index(){
        $orders = allOrders()->paginate(10);
        return view('backend.order.pending-order', compact('orders'));
    }

    //order item
    function orderItems($order_id){
        $orderItems=OrderItem::with('product')->where(['status'=> 1, 'order_id'=> $order_id])->get();
        return view('backend.order.orderItems', compact('orderItems'));
    }
    //cancel order
    function cancelOrder($order_id){
        $cancelOrder=Order::findOrFail($order_id)->update(['order_type'=> 'Cancel', 'cancel_date'=> Carbon::now()]);
           
        if ($cancelOrder == false) {
            $notification = ([
                'success' => 'অর্ডার প্ররিত্যাক্ত করা ব্যর্থ হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'অর্ডার প্ররিত্যাক্ত করা হয়েছে...!',
            ]);
        }

        return redirect()->route('cancelOrderlist');
    }
    
    //order item
    function cancelOrderlist(){
        $orders=allOrders()->where(['order_type'=> 'Cancel'])->paginate(10);
        return view('backend.order.cancelOrder', compact('orders'));
    }
    //confirm order
    function confirmOrder($order_id){
        $confirmOrder=Order::findOrFail($order_id)->update(['order_type'=> 'Confirmed', 'confirm_date'=> Carbon::now()]);
           
        if ($confirmOrder == true) {
            $notification = ([
                'success' => 'অর্ডার কনফার্ম করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'অর্ডার কনফার্ম করা ব্যর্থ হয়েছে...!',
            ]);
        }

        return redirect('/confirm-order');
    }
    //confirm order list
    function confirmOrderList(){
        $orders = allOrders()->where(['order_type'=> 'Confirmed'])->paginate(10);
        return view('backend.order.confirmOrder', compact('orders'));
    }

    //process order 
    function processingOrder($order_id){
        
        $confirmOrder=Order::findOrFail($order_id)->update(['order_type'=> 'Processing', 'processing_date'=> Carbon::now()]);
           
        if ($confirmOrder == true) {
            $notification = ([
                'success' => 'অর্ডার প্রক্রিয়াধিন করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'অর্ডার প্রক্রিয়াধিন করা ব্যর্থ হয়েছে...!',
            ]);
        }

        return redirect('/processing-order');
    }
    //processing order 
    function processingOrderList(){
        $orders = allOrders()->where(['order_type'=> 'Processing'])->paginate(10);
        return view('backend.order.processingOrder', compact('orders'));
    }

    //pick order 
    function pickedOrder($order_id){
        $confirmOrder=Order::findOrFail($order_id)->update(['order_type'=> 'Picked', 'picked_date'=> Carbon::now()]);
        if ($confirmOrder == true) {
            $notification = ([
                'success' => 'অর্ডার পিক্ট করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'অর্ডার পিক্ট করা ব্যর্থ হয়েছে...!',
            ]);
        }

        return redirect('/picked-order');
    }

    //picked order list
    function pickedOrderList(){
        $orders = allOrders()->where(['order_type'=> 'Picked'])->paginate(10);
        return view('backend.order.pickedOrder', compact('orders'));
    }

    //shipped order 
    function shippedOrder($order_id){

        $confirmOrder=Order::findOrFail($order_id)->update(['order_type'=> 'Shipped', 'shipped_date'=> Carbon::now()]);
        if ($confirmOrder == true) {
            $notification = ([
                'success' => 'অর্ডার শিফট করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'অর্ডার শিফট করা ব্যর্থ হয়েছে...!',
            ]);
        }

        return redirect('/shipped-order');
    }

    // shipped order list
    function shippedOrderList(){
        $orders = allOrders()->where(['order_type'=> 'Shipped'])->paginate(10);
        return view('backend.order.shippedOrder', compact('orders'));
    }

    //delivery order

    function deliveredOrder($order_id){
        $confirmOrder=Order::findOrFail($order_id)->update(['order_type'=> 'Delivered', 'delivered_date'=> Carbon::now()]);
        if ($confirmOrder == true) {
            $notification = ([
                'success' => 'অর্ডার ডেলিভারি করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'অর্ডার ডেলিভারি করা ব্যর্থ হয়েছে...!',
            ]);
        }

        return redirect('/delivered-order');
    }

    //delivered order list
    function deliveredOrderList(){
        $orders = allOrders()->where(['order_type'=> 'Delivered'])->paginate(10);
        return view('backend.order.deliveredOrder', compact('orders'));
    }

    // function delete(){
    //     Order::findOrFail(3)->delete();
    //     return 'done';
    // }

    function d(){
        Category::withTrashed()->find(3)->restore();
        return 'done';
    }
}
