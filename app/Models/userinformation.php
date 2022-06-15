<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userinformation extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setUserCurrencyAttribute($value)
    {
        $bar=ucwords($value);
        $barr=ucwords(strtoUpper($bar)); 

        $this->attributes['user_currency'] = $barr;
    }
}
