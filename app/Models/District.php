<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use App\Models\Thana;
class District extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded =[];
    
   
    function division(){
        return $this->belongsTo(Division::class, 'division_id')->withTrashed();
    }
    
    public function thanas()
    {
        return $this->hasMany(Thana::class);
    }

    protected static function boot()
    {   parent::boot();
         
        //district with thana soft delete
        static::deleting(function ($data) {
            foreach($data->thanas as $thana){
                $thana->delete();
            }
        });

        //district with thana soft delete restore
        static::restoring(function ($data) {
            $data->thanas()->withTrashed()->first()->restore();
        });

    }

}
