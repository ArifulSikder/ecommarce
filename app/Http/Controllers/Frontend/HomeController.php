<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductMultipleImage;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    function index(){
        $products=Product::latest()->with('category')->paginate(12);
        $banners=Banner::where(['status'=> 1, 'active_status' => 1])->get();
        $categories=Category::where(['status'=> 1])->get();
        return view('frontend.home.index', compact('banners','categories','products'));
    }

    function productDetails(){
        $categories=Category::where(['status'=> 1])->get();
        return view('frontend.product.productDetails', compact('categories'));
    }

    function shopping(){
        $banners=Banner::where(['status'=> 1, 'active_status' => 1])->get();
        $categories=Category::where(['status'=> 1])->get();
        return view('frontend.shop.shopping', compact('categories','banners'));
    }

    //location 

    function location(){
        
        if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $UserIP = geoip()->getLocation($_SERVER['HTTP_X_FORWARDED_FOR']) ;
        } else {
            $UserIP = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        }

        
        return view('frontend.location.ip_address', compact('UserIP'));
    }

        
    //category wise product 

    function catWiseProduct($category_id){
        $category_id = Category::where('slug', $category_id)->first()->id;
        $categories=Category::where(['status'=> 1])->get();
        $products = Product::where(['status'=>1, 'category_id'=> $category_id])->get();
        return view('frontend.product.showProduct', compact('products','categories'));
     }

     function productShow($product_slug){
         $categories=Category::where(['status'=> 1])->get();
         $product=Product::with('category')->where(['status'=> 1, 'product_slug'=> $product_slug])->first();
         $productMultipleImg=ProductMultipleImage::where(['product_id'=>$product->id, 'status'=> 1])->get();
         return view('frontend.product.productDetails', compact('product','categories','productMultipleImg'));
     }
}
