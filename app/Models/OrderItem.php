<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
    use HasFactory,SoftDeletes, SoftDeletes;
    protected $guarded = [];

    
    function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }
}
