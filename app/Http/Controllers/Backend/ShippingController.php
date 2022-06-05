<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ShippingInfo;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    //shipping information
    function shippingInformation(){
        $shippingInfo = ShippingInfo::where('status',1)->orderBy('id', 'DESC')->paginate(10);
        return view('backend.product.shipping.shippingInformation', compact('shippingInfo'));
    }

    function storeShipping(Request $request){
        $input = $request->all();
        $request->validate([
            'title'=> 'required|max:255',
            'description' => 'required',
        ],[
            'title.required'=> 'Title Is Required Field',
            'description.required'=> 'Description Is Required Field',
        ]);
        $shipping = ShippingInfo::create($input);         
        if ($shipping == true) {
            $notification = ([
                'success' => 'পণ্য পৌছানো সংক্রান্ত তথ্য যোগ করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'পণ্য পৌছানো সংক্রান্ত তথ্য যোগ করা ব্যর্থ হয়েছে...!',
            ]);
        }
        return redirect()->back()->with($notification);

    }

}
