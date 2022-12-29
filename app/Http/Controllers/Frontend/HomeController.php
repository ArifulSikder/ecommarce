<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AllVisitor;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductMultipleImage;
use App\Models\ShippingInfo;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    function index()
    {
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $UserIP = geoip()->getLocation($_SERVER['HTTP_X_FORWARDED_FOR']);
        } else {
            $UserIP = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        }
        AllVisitor::create([
            'visitor_ip' => $UserIP->ip,
            'date' => Carbon::now(),
        ]);
        $visitor=Visitor::where(['visitor_ip' => $UserIP->ip,'status'=> 1])->orderBy('date','desc')->first();
        $query = Product::latest();
        if ($visitor == null) {
            $products = $query->with('category')->paginate(12);
        } else {
            $products = $query->with('category')->where('category_id',$visitor->category_id)->paginate(12); 
        }
        $singleCategory = Category::where('status', 1);
        $banners = Banner::with('product')->where(['status' => 1, 'active_status' => 1])->get();
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
       
        if ($visitor == null) {
            
            if (count($products) > 0) {
                Visitor::create([
                    'visitor_ip' => $UserIP->ip,
                    'category_id' => $category_id,
                    'product_id' => $products[0]->id,
                    'category_visit_times' =>  1,
                    'product_visit_times'=> 0,
                    'date'=> Carbon::now(),
                ]);
            }
            return view('frontend.product.showProduct', compact('products'));
        } else{
            
            Visitor::where(['visitor_ip' => $UserIP->ip,'status'=> 1, 'category_id'=> $category_id])->update([
                'date'=> Carbon::now(),
                'category_visit_times' => $visitor->category_visit_times + 1,
            ]); 
            return view('frontend.product.showProduct', compact('products'));
        }
    }

    function productShow($product_slug)
    {
        
        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { //get ip address with proper location
            $UserIP = geoip()->getLocation($_SERVER['HTTP_X_FORWARDED_FOR']);
        } else {
            $UserIP = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        }
        $product = Product::with('category')->where(['status' => 1, 'product_slug' => $product_slug])->first();
        $visitor=Visitor::where(['visitor_ip' => $UserIP->ip,'status'=> 1, 'category_id'=> $product->category_id])->first();
        $shippingInfo=ShippingInfo::where('status', 1)->orderBy('id', 'desc')->first();
        if ($visitor == null) {
            Visitor::create([
                'visitor_ip' => $UserIP->ip,
                'category_id' => $product->category_id,
                'product_id' => $product->id,
                'category_visit_times' =>  0,
                'product_visit_times'=> 1,
                'date'=> Carbon::now(),
            ]);
            $productMultipleImg = ProductMultipleImage::where(['product_id' => $product->id, 'status' => 1])->get();
            return view('frontend.product.productDetails', compact('product',  'productMultipleImg','shippingInfo'));
        } else{
            Visitor::where(['visitor_ip' => $UserIP->ip,'status'=> 1, 'category_id'=> $product->category_id])->update([
                'date'=> Carbon::now(),
                'product_visit_times'=> $visitor->product_visit_times+ 1,
            ]); 
            $productMultipleImg = ProductMultipleImage::where(['product_id' => $product->id, 'status' => 1])->get();
            return view('frontend.product.productDetails', compact('product',  'productMultipleImg','shippingInfo'));
        }
    }

}
