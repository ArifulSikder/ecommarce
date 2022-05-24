<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
        $categoriesNav = Category::where(['status' => 1])
        ->where(['status' => 1, 'category_status' => 2])
        ->get();
        $categoriesPropular = Category::where(['status' => 1])
        ->where(['status' => 1, 'category_status' => 1])
        ->get();
        return view('frontend.cart.cartIndex', compact('categoriesNav', 'categoriesPropular' ));
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
}
