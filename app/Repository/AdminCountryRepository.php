<?php

namespace App\Repository;

use App\Models\Brand;
use App\Models\Bankaccount;
use App\Models\Holidaytype;
use App\Models\Region;
use App\Models\Country;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class AdminCountryRepository 
{   
    protected $country= null;

    public function getAllCountries()
    {
          
        return Country::all();
    }

    public function createOrUpdate( $id = null, $collection = [])
    {   
        if(is_null($id)) {
            $country= new Country;
            $country->name = $collection['name'];
            $country->id_region = $collection['id_region'];
            
            return $country->save();
        }
            $country= Country::find($id);
            $country->name = $collection['name'];
            $country->id_region = $collection['id_region'];
            
            return $country->save();
    }

    public function deleteCountry($id)
    {
        return Country::find($id)->delete();
    }

  
    
}