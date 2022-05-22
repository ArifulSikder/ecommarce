<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Cart;

class ProductControllerFrontend extends Controller
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
}
