<?php

namespace App\Repository;

use App\Models\Brand;
use App\Models\Bankaccount;
use App\Models\Holidaytype;
use App\Models\Region;
use App\Models\Holidaydestination;
use App\Models\DefaultBanner;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class AdminDefaultBannerRepository
{   
    protected $defaultbanner = null;

    public function getAllDefaultbanner()
    {
          
        return DefaultBanner::all();
    }

    public function createOrUpdate( $id = null, $collection = [] , $defaultimage)
    {   
        if(is_null($id)) 
        {
            $defaultbanner = new DefaultBanner;
          

            $image_name = time().$defaultimage->getClientOriginalName();
            $defaultimage->storeAs('/images/DefaultBanner',$image_name);
            $defaultbanner->default_banner = $image_name;



            return  $defaultbanner->save();
        }
        
        $defaultbanner = DefaultBanner::find($id);

        $image_name = time().$defaultimage->getClientOriginalName();
        $defaultimage->storeAs('/images/DefaultBanner',$image_name);
        $defaultbanner->default_banner = $image_name;

      return  $defaultbanner->save();
    }



    public function deleteEmailBanner($id)
    {
        return EmailBanner::find($id)->delete();
    }

  
    
}