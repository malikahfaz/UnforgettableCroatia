<?php

namespace App\Repository;

use App\Models\Brand;
use App\Models\Bankaccount;
use App\Models\Holidaytype;
use App\Models\Region;
use App\Models\Holidaydestination;
use App\Models\EmailBanner;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class AdminEmailBannerRepository
{   
    protected $emailbanner = null;

    public function getAllEmailbanners()
    {
          
        return EmailBanner::all();
    }

    public function createOrUpdate( $id = null, $collection = [] ,$agencyimage, $clientimage)
    {   
        if(is_null($id)) 
        {
            $Emailbanner = new EmailBanner;
            $Emailbanner->region_id = $collection['region_id'];
            $Emailbanner->brand_id = $collection['brand_id'];
            $Emailbanner->payment_for = $collection['payment_for'];

            $image_name = time().$agencyimage->getClientOriginalName();
            $agencyimage->storeAs('/images/EmailBanners',$image_name);
            $Emailbanner->agency_banner = $image_name;

            $image_name2 = time().$clientimage->getClientOriginalName();
            $clientimage->storeAs('/images/EmailBanners',$image_name2);
            $Emailbanner->client_banner = $image_name2;


            return  $Emailbanner->save();
        }
        $Emailbanner =EmailBanner::find($id);
        $Emailbanner->region_id = $collection['region_id'];
        $Emailbanner->brand_id = $collection['brand_id'];
        $Emailbanner->payment_for = $collection['payment_for'];

        $image_name = time().$agencyimage->getClientOriginalName();
        $agencyimage->storeAs('/images/EmailBanners',$image_name);
        $Emailbanner->agency_banner = $image_name;

        $image_name2 = time().$clientimage->getClientOriginalName();
        $clientimage->storeAs('/images/EmailBanners',$image_name2);
        $Emailbanner->client_banner = $image_name2;


        return  $Emailbanner->save();
    }

    public function deleteEmailBanner($id)
    {
        return EmailBanner::find($id)->delete();
    }

  
    
}