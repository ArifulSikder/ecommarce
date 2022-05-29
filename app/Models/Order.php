<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Division;
use App\Models\District;
use App\Models\Thana;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];

    
    function division(){
        return $this->belongsTo(Division::class, 'division_id');
    }
    
    function district(){
        return $this->belongsTo(District::class, 'district_id');
    }
    
    function thana(){
        return $this->belongsTo(Thana::class, 'thana_id');
    }
}
