<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    public function region()
    {
        return $this->belongsTo(Region::class,'id_region');
        
    }
    // public function region()
    // {
    //     return $this->hasMany(Region::class);
    // }
}
