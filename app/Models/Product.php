<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, Sluggable, SoftDeletes;
    protected $guarded = [];
    
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    
    public function sluggable(): array
    {
        return [
            'product_slug' => [
                'source' => 'title'
            ]
        ];
    }
}
