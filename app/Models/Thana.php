<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thana extends Model
{
    use HasFactory;
    protected $guarded =[];

    
    function division(){
        return $this->belongsTo(Division::class, 'division_id');
    }

    
    function district(){
        return $this->belongsTo(District::class, 'district_id');
    }
}
