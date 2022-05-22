<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

function catWiseProducts($cat_id){
   return Product::where(['status'=> 1, 'category_id' => $cat_id])->get();
}

function SpecialOffer(){
  return Product::where(['status'=> 1, 'special_offer'=> 1])->first();
}