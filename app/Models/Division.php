<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;
use App\Models\District;
class Division extends Model
{
    use HasFactory, SoftDeletes, CascadeSoftDeletes;
    protected $guarded = [];

    protected $cascadeDeletes = ['districts'];

    protected $dates = ['deleted_at'];
    
    public function districts()
    {
        return $this->hasMany(District::class);
    }
}
