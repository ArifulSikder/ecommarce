<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Cart;
class CartController extends Controller
{
  
    // product view ajax
    function productView(Request $request){
        $product=Product::findOrFail($request->id);
        return response()->json($product);
    }

    // product add to cart
    function addToCart(Request $request){
        $cart =Cart::add([
                'id' =>  $request->id,
                'name' => $request->product_name,
                'qty' => $request->product_qty,
                'price' => $request->discunt_price,
                'weight' => 1,
                'options' => ['product_thumbnail' => $request->product_thumbnail],
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
}
