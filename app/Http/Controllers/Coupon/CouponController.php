<?php

namespace App\Http\Controllers\Coupon;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CouponController extends Controller
{
    //index or list of coupon
    function indexCoupon(){
        $coupons = Coupon::latest()->where('status', 1)->paginate(10);
        return view('backend.coupon.indexCoupon', compact('coupons'));
    }

    // store coupon 

    function couponStore(Request $request){
        $request->validate([
            'coupon_name' => 'required|max:255',
            'coupon_discount' => 'required|max:11',
            'coupon_validity_date' => 'required|max:255',
        ],[
            'coupon_name.required' => 'Please Enter This Filed',
            'coupon_discount.required' => 'Please Enter This Filed',
            'coupon_validity_date.required' => 'Please Enter This Filed',
        ]);
        $coupon=Coupon::create($request->all());
            
        if ($coupon == true) {
            $notification = ([
                'success' => 'কুপন সফলভাবে তৈরি করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'কুপন  তৈরি করা ব্যর্থ হয়েছে...!',
            ]);
        }
        return redirect()->back()->with($notification);
    }

    //update coupon 
    function updateCoupon(Request $request){
        
        $validator = Validator::make($request->all(), [
            'coupon_name' => 'required|max:255',
            'coupon_discount' => 'required|max:11',
            'coupon_validity_date' => 'required|max:255',
        ],[
            'coupon_name.required' => 'Please Enter This Filed',
            'coupon_discount.required' => 'Please Enter This Filed',
            'coupon_validity_date.required' => 'Please Enter This Filed',
        ]);
        
        if ($validator->fails()) {
            return response()->json([$validator->errors(), 'status' => 0]);
        }
        $coupon=Coupon::findOrFail($request->id)->update($request->all());
            
        if ($coupon == true) {
            $notification = ([
                'success' => 'কুপন সফলভাবে আপডেট করা হয়েছে !',
                'status' => 1,
            ]);
        } else{
            $notification = ([
                'error' => 'কুপন  আপডেট করা ব্যর্থ হয়েছে...!',
                'status' => 2,
            ]);
        }
        return response()->json($notification);
    }

    //delete coupon
    function deleteCoupon($coupon_id){
        Coupon::findOrFail($coupon_id)->update(['status'=> 0]);
        return redirect()->back();
    }
}
