<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //live search ajax
    function liveSearch(Request $request){
        if ($request->searched != null) {
            $products = Product::where('product_name', "LIKE", "%".$request->searched."%")
                            ->orWhere('short_description', "LIKE", "%".$request->searched."%")
                            ->orWhere('product_slug', "LIKE", "%".$request->searched."%")
                            ->paginate(5);
            return view('frontend.include.search', compact('products'));
        }
    }

}
