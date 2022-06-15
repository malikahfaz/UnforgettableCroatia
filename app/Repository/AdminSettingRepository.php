<?php

namespace App\Repository;

use App\Models\Brand;
use App\Models\Bankaccount;
use App\Models\Holidaytype;
use App\Models\Setting;
use App\Models\Country;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class AdminSettingRepository 
{   
    protected $setting= null;

   

    public function createOrUpdate( $id = null, $collection = [])
    {   
      
        // dd($collection);
            $setting= Setting::find($id);
            $setting->admin_name = $collection['admin_name'];
            $setting->email = $collection['email'];
            $setting->web_name = $collection['web_name'];
            $setting->mandrill_key = $collection['mandrill_key'];
            $setting->mail_chimp_key = $collection['mail_chimp_key'];
             if(isset($collection['checker']))
             {
                $setting->paysafe = $collection['checker'];
             }
             else
             {
                $setting->paysafe = $collection['checker2'];
             }
             $setting->paysafe_payment_live = $collection['paysafe_payment_live'];
             $setting->paysafe_token_live = $collection['paysafe_token_live'];
             $setting->paysafe_payment_sandbox = $collection['paysafe_payment_live'];
             $setting->paysafe_token_sandbox = $collection['paysafe_token_live'];

             $setting->active_verification = $collection['activate_verification'];
             $setting->active_verification2 = $collection['activate_verification2'];
             $setting->send_payment_link = $collection['send_payment_link'];
             $setting->send_payment_link2 = $collection['send_payment_link2'];
             $setting->phone_verification_api = $collection['phone_verification_api'];
             $setting->email_chaser_crob_job = $collection['email_chaser_crob_job'];
             $setting->tas_endpoint = $collection['tas_endpoint'];
             $setting->approval_email = $collection['approval_email'];
             $setting->sms_username = $collection['sms_username'];
             $setting->sms_api_key = $collection['sms_api_key'];
            
            return  $setting->save();
    }

  

  
    
}