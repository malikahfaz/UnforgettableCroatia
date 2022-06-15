<?php

namespace App\Repository;

use App\Models\Brand;
use App\Models\Bankaccount;
use App\Models\Holidaytype;
use App\Models\Region;
use App\Models\Holidaydestination;
use App\Models\Emailtemplate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class AdminEmailTemplateRepository
{   
    protected $emailtemplate = null;

    public function getAllEmailtemplates()
    {
          
        return Emailtemplate::all();
    }

    public function createOrUpdate( $id = null, $collection = [])
    {   
        if(is_null($id)) 
        {
            $Emailtemplate = new Emailtemplate;
            $Emailtemplate->name = $collection['name'];
            $Emailtemplate->brand_id = $collection['brand_id'];
            $Emailtemplate->content= $collection['editor1'];
            return  $Emailtemplate->save();
        }
        $Emailtemplate = Emailtemplate::find($id);
        $Emailtemplate->name = $collection['name'];
        $Emailtemplate->brand_id = $collection['brand_id'];
        $Emailtemplate->content= $collection['editor1'];
        return $Emailtemplate->save();
    }

    public function deleteEmailTemplate($id)
    {
        return Emailtemplate::find($id)->delete();
    }

  
    
}