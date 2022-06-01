<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
// use Cart;
use Illuminate\Contracts\Session\Session;

class CartController extends Controller
{
  
    // product view ajax
    function productView(Request $request){
        $product=Product::findOrFail($request->id);
        return response()->json($product);
    }

    // product add to cart
    function addToCart(Request $request){

        $product=Product::findOrFail($request->id);
        if ($product->product_discount > 0) {
            $discount = $product->product_price * $product->product_discount/100;
            $discountPrice = $product->product_price - $discount;
        } else {
            $discountPrice = $product->product_price;
        }
        
        $cart =Cart::add([
                'id' =>  $product->id,
                'name' => $product->product_name,
                'qty' => $request->product_qty,
                'price' => $discountPrice,
                'weight' => 1,
                'options' => ['product_thumbnail' => $product->product_thumbnail],
            ]);
    
        if ($cart == true) {
            $notification = ([
                'success' => 'কার্টে যুক্ত করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'কার্টে যুক্ত ব্যর্থ হয়েছে...!',
            ]);
        }
        return response()->json($notification);
    }

    //product cart mini cart 

    function productMinicart(){
        
        $carts = Cart::content();
        $cartQty = Cart::count();
        $cartTotal = Cart::total();
        return response()->json([
            'carts' => $carts,
            'cartQty' => $cartQty,
            'cartTotal' => $cartTotal,
        ]);
    }

    //product remove from cart
    function productRemove(Request $request){
        $cart = Cart::remove($request->rowId);
        if ($cart == false) {
            $notification = ([
                'success' => 'প্রোডাক্ট রিমোভ করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'প্রোডাক্ট রিমোভ ব্যর্থ হয়েছে...!',
            ]);
        }
        return response()->json($notification);
    }
    

    //cart page || cart view page

    function cartIndex(){
        return view('frontend.cart.cartIndex');
    }

    //cart page 
    function cartPage(){
        $carts = Cart::content();
        $cartQty = Cart::count();
        $cartTotal = Cart::total();
        return response()->json([
            'carts' => $carts,
            'cartQty' => $cartQty,
            'cartTotal' => $cartTotal,
        ]);
    }
    //increment of product 
    function increaseCartQty(Request $request){
       $cart= Cart::update($request->rowId, $request->quantity); // Will update the quantity
        if ($cart == false) {
            $notification = ([
                'success' => 'প্রোডাক্ট রিমোভ করা হয়েছে !',
            ]);
        } else{
            $notification = ([
                'error' => 'প্রোডাক্ট রিমোভ ব্যর্থ হয়েছে...!',
            ]);
        }
        return response()->json($notification);
    }

    // have coupon 
    function haveCoupon(Request $request){
       $haveCoupon = Coupon::where([
            'status'=> 1,
            'active_status'=> 1,
            'coupon_name'=> $request->coupon_name
        ])->first();
        if ($haveCoupon) {
                if ($haveCoupon->coupon_validity_date >= Carbon::now()->format("Y-m-d")) {
                    $discountAmount = Cart::total() * $haveCoupon->coupon_discount/100; 
                    $totalAmount = Cart::total() - $discountAmount;

                $putSession= $request->session()->put("coupon",[
                    'coupon_name' =>  $haveCoupon->coupon_name,
                    'coupon_discount' =>  $haveCoupon->coupon_discount,
                    'discount_amount' => round($discountAmount),
                    'total_amount' => round($totalAmount),
                    ]);
                    
                    if ($putSession == false) {
                        $notification = ([
                            'success' => 'কুপন প্রয়োগ করা হয়েছে !',
                            'status' => 1,
                        ]);
                    } else{
                        $notification = ([
                            'error' => 'কুপন প্রয়োগ ব্যর্থ হয়েছে...!',
                            'status' => 0,
                        ]);
                    }
                    return response()->json($notification);
                } else {
                    $notification = ([
                        'error' => 'কুপন প্রয়োগ ব্যর্থ হয়েছে...!',
                        'status' => 0,
                    ]);
                    return response()->json($notification);
                }
        } else {
            
            $notification = ([
                'error' => 'কুপন প্রয়োগ ব্যর্থ হয়েছে...!',
                'status' => 0,
            ]);
            return response()->json($notification);
        }
        
    }
    
}
