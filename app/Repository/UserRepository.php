<?php

namespace App\Repository;

use App\Models\Brand;
use App\Models\Bankaccount;
use App\Models\userinformation;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class UserRepository 
{   
    protected $user = null;

    public function getAllUsers()
    {
          
        return User::all();
    }

    public function createOrUpdate( $id = null, $collection = [])
    {   
        if(is_null($id)) {
            $user = new User;

            $user->first_name= $collection['fname'];
            $user->last_name= $collection['lname'];
            $user->name= $collection['usname'];
            $user->email= $collection['email'];
            $user->password = Hash::make($collection['password']);
            $user->date_of_birth= $collection['date_birth'];
            $user->address= $collection['address'];
            $user->country= $collection['country'];
            $user->assignRole($collection['role']);
            $user->state= $collection['state'];
            $user->city= $collection['city'];
            $user->zip= $collection['zip'];
            $user->o_auth = $collection['password'];
            $user->status = '1';
            $user->save();

            $user_last_id = User::all()->last()->id;
            

            $user_info = new userinformation;
            $user_info->user_id = $user_last_id;
            $user_info->utcl_other_currency_phone = $collection['currency_phone'];
            $user_info->utcl_usa_phone	 = $collection['usa_phone'];
            $user_info->utcl_usd_agent_phone = $collection['usd_Agent_phone'];

            $user_info->cc_other_currency_phone = $collection['currency_phone_1'];
            $user_info->cc_usa_phone	 = $collection['usa_phone_1'];
            $user_info->cc_usd_agent_phone	 = $collection['usd_Agent_phone_1'];

            if($collection['role']=='3')
            {
                $user_info->user_role= 'Admin';
            }
            else 
            {
                $user_info->user_role = 'Customer';
            }
            $user_info->user_currency	 = $collection['currency'];
            $user_info->payment_option	 = $collection['payment'];
            $user_info->destination_type	 = $collection['destination_type'];
            $user_info->holiday_type	 = $collection['holiday_type'];
            $user_info->holiday_country	 = $collection['h_country'];
            $user_info->brand	 = $collection['brand'];
           

            return  $user_info->save();
        }
        
        $user = User::find($id);
        $user->first_name= $collection['fname'];
        $user->last_name= $collection['lname'];
        $user->name= $collection['usname'];
        $user->email= $collection['email'];
        $user->password = Hash::make($collection['password']);
        $user->date_of_birth= $collection['date_birth'];
        $user->address= $collection['address'];
        $user->country= $collection['country'];
        $user->assignRole($collection['role']);
        $user->state= $collection['state'];
        $user->city= $collection['city'];
        $user->zip= $collection['zip'];
        $user->o_auth = $collection['password'];
        $user->status = '1';
        $user->save();

        
        $user_info = userinformation::where('user_id',$id)->first();
        
        $user_info->utcl_other_currency_phone = $collection['currency_phone'];
        $user_info->utcl_usa_phone	 = $collection['usa_phone'];
        $user_info->utcl_usd_agent_phone = $collection['usd_Agent_phone'];

        $user_info->cc_other_currency_phone = $collection['currency_phone_1'];
        $user_info->cc_usa_phone	 = $collection['usa_phone_1'];
        $user_info->cc_usd_agent_phone	 = $collection['usd_Agent_phone_1'];

        if($collection['role']=='3')
        {
            $user_info->user_role= 'Admin';
        }
        else 
        {
            $user_info->user_role = 'Customer';
        }
        $user_info->user_currency	 = $collection['currency'];
        $user_info->payment_option	 = $collection['payment'];
        $user_info->destination_type	 = $collection['destination_type'];
        $user_info->holiday_type	 = $collection['holiday_type'];
        $user_info->holiday_country	 = $collection['h_country'];
        $user_info->brand	 = $collection['brand'];
       

        return  $user_info->save();
    }

    public function deleteUser($id)
    {
       User::find($id)->delete();
       return  userinformation::where('user_id',$id)->first()->delete();
    }

  
    
}