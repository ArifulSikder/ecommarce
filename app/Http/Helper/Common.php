<?php

use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Visitor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
//frontend category wise product 

function catWiseProducts($cat_id){
   return Product::where(['status'=> 1, 'category_id' => $cat_id])->get();
}

function SpecialOffer(){
  return Product::where(['status'=> 1, 'special_offer'=> 1])->latest()->first();
}

function dateToday(){
  return Carbon::now()->format('Y-m-d');
}

function dateFormater($data){
  return Carbon::parse($data)->format('D F, Y');
}

function categoriesNav(){
  return Category::where(['status' => 1])
        ->where(['status' => 1, 'category_status' => 2])
        ->get();
}

function categoriesPropular(){
  return Category::where(['status' => 1])
        ->where(['status' => 1, 'category_status' => 1])
        ->get();
}

// all orders

function allOrders(){
  return Order::with('division', 'district','thana')->where(['status'=> 1])->latest();
}

//latest product

function latestProduct(){
  return Product::where("status", 1)->latest()->get();
}

//admin dashboard
//category visited times
function  categoryVisitedTimes($category_id){
 return Visitor::where('category_id', $category_id)->sum('category_visit_times');
}

//product visited times
function productVisitedTimes($product_id){
  return Visitor::where('product_id', $product_id)->sum('product_visit_times');
}

//bangla price

function banglaNumber($str)
{
    $english = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
    $bangla = ['১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০'];
    $str = str_replace($english, $bangla, $str);
    return $str;
}
