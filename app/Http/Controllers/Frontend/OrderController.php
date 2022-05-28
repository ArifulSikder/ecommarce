<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class OrderController extends Controller
{
    function orderStore(Request $request){
        // dd($request->all());

        $request->validate([
            'shipping_name' => 'required|max:255',
            'shipping_mobile' => 'required|max:15',
            'shipping_email' => 'required|max:225',
            'shipping_address' => 'required|max:500',
            'division_id' => 'required|max:11',
            'district_id' => 'required|max:11',
            'thana_id' => 'required|max:11',
            'payment_type' => 'required|max:50',
        ],[
            'division_id.required' => 'Please Enter This Filed',
            'district_name.required' => 'Please Enter This Filed',
        ]);
        $input = $request->all();
        if (session()->has('coupon')) {
            $input['amount'] = session()->get('coupon')['total_amount'];
        } else{
            $input['amount'] = round(Cart::total()) ;
        }
    
        $input['order_date'] = Carbon::now();
        $order = Order::create($input);
         
        if ($order == true) {
          
            $notification = ([
                'success' => 'আপনার অর্ডার সফল হয়েছে.।।!',
            ]);
            Cart::destroy();
            
            if (session()->has('coupon')) {
                session()->forget('coupon');
            }

        } else{
            $notification = ([
                'error' => 'দুঃখিত...! আপনার অর্ডার ব্যর্থ হয়েছে...!',
            ]);
        }
        return redirect('/')->with($notification);

    }
}
