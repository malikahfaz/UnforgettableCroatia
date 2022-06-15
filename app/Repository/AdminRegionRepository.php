<?php

namespace App\Repository;

use App\Models\Brand;
use App\Models\Bankaccount;
use App\Models\Holidaytype;
use App\Models\Region;
use App\Models\Country;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class AdminRegionRepository 
{   
    protected $region= null;

    public function getAllRegions()
    {
          
        return Region::all();
    }

    public function createOrUpdate( $id = null, $collection = [])
    {   
        if(is_null($id)) {
            $region = new Region;
            $region->name = $collection['name'];
            
            return $region->save();
        }
            $region= Region::find($id);
            $region->name = $collection['name'];
            
            return $region->save();
    }

    public function deleteRegion($id)
    {
        return Region::find($id)->delete();
    }

  
    
}