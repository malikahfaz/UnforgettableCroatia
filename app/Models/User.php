<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use App\Scopes\StatusScope;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name',
        'email',
        'password',
        'o_auth',
        'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    

    public function customers(){

        return $this->belongsToMany(Customer::class);
    }

    // public function resellers(){

    //     return $this->belongsToMany(Reseller::class);
    // }

    // public function salecenters(){

    //     return $this->belongsToMany(SaleCenter::class);
    // }

  
    // public function getOwnerAttribute()
    // {
    //     return $this->name;
    // }

    public function user_info()
    {
        return $this->hasOne(userinformation::class);
    }


    public function user_target()
    {
        return $this->hasMany(Target::class);
    }

    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }
 
    // public function scopeIsActive($query)
    // {
    //     return $query->where('status',1);
    // }

    protected static function booted()
    {
        static::addGlobalScope(new StatusScope);
    }
}
