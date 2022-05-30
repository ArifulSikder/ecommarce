<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;

class Category extends Model
{
    use HasFactory, Sluggable, SoftDeletes, CascadeSoftDeletes;

    protected $guarded = [];

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function products(){
        return $this->hasMany(Product::class);
    }

    protected static function boot(){
        parent::boot();
        //category by product delete
        static::deleting(function($data){
            foreach ($data->products as $product) {
                $product->delete();
            }
        });

        //category by product restore
        static::restoring(function($data){
            // dd($data->id);
            dd($data->products()->withTrashed()->where('category_id', $data->id));
            foreach ($data->products()->withTrashed()->get() as $product) {
               $product->restore();
            }
        });
    }
}
