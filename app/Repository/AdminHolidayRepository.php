<?php

namespace App\Repository;

use App\Models\Brand;
use App\Models\Bankaccount;
use App\Models\Holidaytype;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class AdminHolidayRepository 
{   
    protected $holiday = null;

    public function getAllHolidays()
    {
          
        return Holidaytype::all();
    }

    public function createOrUpdate( $id = null, $collection = [])
    {   
        if(is_null($id)) {
            $holiday = new Holidaytype;
            $holiday->name = $collection['name'];
            $holiday->brand_id = $collection['brand_id'];
            
            
            return $holiday->save();
        }
            $holiday= Holidaytype::find($id);
            $holiday->name = $collection['name'];
            $holiday->brand_id = $collection['brand_id'];
            
            return $holiday->save();
    }

    public function deleteHoliday($id)
    {
        return Holidaytype::find($id)->delete();
    }

  
    
}