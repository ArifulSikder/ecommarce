<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    function addToWishlist(Request $request){
       $CheckWishlist=Wishlist::where(["product_id" => $request->product_id, 'user_id'=> Auth::id()])->count();
       if ($CheckWishlist > 1) {
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
}
