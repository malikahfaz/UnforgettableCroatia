<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    public function holidaytypes()
    {
        return $this->hasMany(Holidaytype::class);
    }

    public function emailtemplate()
    {
        return $this->hasMany(Emailtemplate::class);
    }
}
