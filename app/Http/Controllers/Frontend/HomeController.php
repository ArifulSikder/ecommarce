<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductMultipleImage;
use App\Models\Visitor;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    function index()
    {
        $singleCategory = Category::where(['status' => 1]);
        $products = Product::latest()->with('category')->get();
        $banners = Banner::where(['status' => 1, 'active_status' => 1])->get();
      
        return view('frontend.home.index', compact('banners',  'products', 'singleCategory'));
    }

    function productDetails()
    {
        $product = Product::latest()->with('category')->first();
        return view('frontend.product.productDetails', compact('product'));
    }

    function shopping()
    {
        $banners = Banner::where(['status' => 1, 'active_status' => 1])->get();
    
        return view('frontend.shop.shopping', compact( 'banners'));
    }

    //location

    function location()
    {

        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $UserIP = geoip()->getLocation($_SERVER['HTTP_X_FORWARDED_FOR']);
        } else {
            $UserIP = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        }


        return view('frontend.location.ip_address', compact('UserIP'));
    }


    //category wise product

    function catWiseProduct($category_id)
    {
        
        $category_id = Category::where('slug', $category_id)->first()->id;
        $products = Product::where(['status' => 1, 'category_id' => $category_id])->get();
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $UserIP = geoip()->getLocation($_SERVER['HTTP_X_FORWARDED_FOR']);
        } else {
            $UserIP = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        }
        
        $visitor=Visitor::where(['visitor_ip' => $UserIP->ip,'status'=> 1, 'category_id'=> $category_id])->first();
       
        if ($visitor != null) {
            return view('frontend.product.showProduct', compact('products'));
        } else{
            if (count($products) > 0) {
                Visitor::create([
                    'visitor_ip' => $UserIP->ip,
                    'category_id' => $category_id,
                    'product_id' => $products[0]->id,
                ]);
            }
            return view('frontend.product.showProduct', compact('products'));
        }
    }

    function productShow($product_slug)
    {
        
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $UserIP = geoip()->getLocation($_SERVER['HTTP_X_FORWARDED_FOR']);
        } else {
            $UserIP = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        }
        $product = Product::with('category')->where(['status' => 1, 'product_slug' => $product_slug])->first();
        $visitor=Visitor::where(['visitor_ip' => $UserIP->ip,'status'=> 1, 'category_id'=> $product->category_id])->first();
        if (!empty($visitor)) {
            $productMultipleImg = ProductMultipleImage::where(['product_id' => $product->id, 'status' => 1])->get();
            return view('frontend.product.productDetails', compact('product',  'productMultipleImg'));
        } else{
            Visitor::create([
                'visitor_ip' => $UserIP->ip,
                'category_id' => $product->category_id,
                'product_id' => $product->id,
            ]);
                
            $productMultipleImg = ProductMultipleImage::where(['product_id' => $product->id, 'status' => 1])->get();
            return view('frontend.product.productDetails', compact('product',  'productMultipleImg'));
        }
    }
}
