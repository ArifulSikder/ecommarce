<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Division;
use App\Models\Thana;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
class CheckoutController extends Controller
{
    function checkOut(){
        $cartTotal = Cart::count();
        if ($cartTotal >0) {
            $divisions = Division::where(['status'=> 1])->orderBy("division_name", 'asc')->get();
            return view('frontend.checkout.checkout', compact('divisions'));
        } else {
            $notification = ([
                'error' => 'দুঃখীত! আপনার কার্টে কোনো প্রোডাক্ট নেই...!',
            ]);
            return redirect()->back()->with($notification);
        }
        
    }

    //division by district

    function divisionByDistrict(Request $request){
        $district =District::where(['division_id'=> $request->division_id, 'status'=> 1])->get();
        return response()->json($district);
    }

    // district by thana
    function districtByThana(Request $request){
        $Thana =Thana::where(['district_id'=> $request->district_id, 'status'=> 1])->get();
        return response()->json($Thana);
    }
}
