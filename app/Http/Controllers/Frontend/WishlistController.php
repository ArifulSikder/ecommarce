<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;

class WishlistController extends Controller
{
    //index wishlist 
    function indexWishlist(){
        $categoriesNav = Category::where(['status' => 1])
            ->where(['status' => 1, 'category_status' => 2])
            ->get();
        $categoriesPropular = Category::where(['status' => 1])
            ->where(['status' => 1, 'category_status' => 1])
            ->get();
        return view('frontend.wishlist.wishlistIndex', compact('categoriesNav', 'categoriesPropular'));
    }
    //add to wishlist
    function addToWishlist(Request $request){
       $CheckWishlist=Wishlist::where(["product_id" => $request->product_id, 'user_id'=> Auth::id()])->count();
       if ($CheckWishlist >= 1) {
            $notification = ([
                'error' => 'ইতোমদ্ধে উইশলিষ্টে যুক্ত করা আছে...!',
                'status' => 0,
            ]);
           return response()->json($notification);
       } else {
           $wishlist= Wishlist::create([
                "product_id" => $request->product_id,
                'user_id'=> Auth::id(),
           ]);

            if ($wishlist == true) {
                $notification = ([
                    'success' => 'উইশলিষ্টে যুক্ত করা হয়েছে !',
                    'status' => 1,
                ]);
            } else{
                $notification = ([
                    'error' => 'উইশলিষ্টে যুক্ত ব্যর্থ হয়েছে...!',
                    'status' => 0,
                ]);
            }
        return response()->json($notification);
       }
       
    }

    //wishlist data
    function wishlistData(){
       $wishlists =  Wishlist::where("user_id", Auth::id())->get();
       $products = [];
       foreach ($wishlists as $index =>  $wishlist) {
          $products[$index] =  Product::findOrFail($wishlist->product_id);
       }
       return response()->json($products);
    }

    //remove wishlist 
    function removeWishlist(Request $request){
        $wishlist = Wishlist::where('product_id', $request->id)->delete();
        if ($wishlist == true) {
            $notification = ([
                'success' => 'উইশলিষ্ট রিমোভ করা হয়েছে !',
                'status' => 1,
            ]);
        } else{
            $notification = ([
                'error' => 'উইশলিষ্ট রিমোভ ব্যর্থ হয়েছে...!',
                'status' => 0,
            ]);
        }
       return response()->json($notification);
    }
}
