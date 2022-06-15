<?php

namespace App\Repository;

use App\Models\Brand;
use App\Models\Bankaccount;
use App\Models\Holidaytype;
use App\Models\Region;
use App\Models\Holidaydestination;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class AdminHolidayDestinationRepository 
{   
    protected $holiday = null;

    public function getAllHolidays()
    {
          
        return Holidaydestination::all();
    }

    public function createOrUpdate( $id = null, $collection = [])
    {   
        if(is_null($id)) {
            $holiday = new Holidaydestination;

            $destination = Region::find($collection['id_region']);

            if( $destination->name=='europe' || $destination->name=='Europe')
            {
            $holiday->destination_type ='EU';
            }
            else
            {
            $holiday->destination_type = 'NON EU';
            }

            $holiday->region = $collection['id_region'];
            $holiday->country = $collection['id_country'];
            $holiday->status = '1';
            return $holiday->save();
        }
            $holiday= Holidaydestination::find($id);
          
            $destination = Region::find($collection['id_region']);
            
            if( $destination->name=='europe' || $destination->name=='Europe')
            {
            $holiday->destination_type ='EU';
            }
            else
            {
            $holiday->destination_type = 'NON EU';
            }
            $holiday->region = $collection['id_region'];
            $holiday->country = $collection['id_country'];
            $holiday->status = '1';
            
            return $holiday->save();
    }

    public function deleteHoliday($id)
    {
        return Holidaydestination::find($id)->delete();
    }

  
    
}