<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use App\Models\District;
use App\Models\Thana;
class Division extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    
    public function districts()
    {
        return $this->hasMany(District::class);
    }

    public function thanas()
    {
        return $this->hasMany(Thana::class);
    }

    protected static function boot()
    {   parent::boot();
        //division with district soft delete
        static::deleting(function ($data) {
            foreach($data->districts as $district){
                $district->delete();
            }
        });

        //division with district soft delete restore
        static::restoring(function ($data) {
            $data->districts()->withTrashed()->first()->restore();
        });

        
        //division with thana soft delete
        static::deleting(function ($data) {
            foreach($data->thanas as $district){
                $district->delete();
            }
        });

        //division with thana soft delete restore
        static::restoring(function ($data) {
            $data->thanas()->withTrashed()->first()->restore();
        });

    }

}
