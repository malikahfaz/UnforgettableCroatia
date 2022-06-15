<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Setting;
use App\Models\Holidaydestination;
use App\Repository\AdminSettingRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use DB;

class SettingController extends Controller
{
    public $setting;
    
    public function __construct(AdminSettingRepository $setting)
    {
        $this->setting= $setting;
    }
    public function getSetting()
    {
        $settings = Setting::all()->first();
        return View::make('admin.setting.edit', compact('settings'));
    }


    public function saveSetting(Request $request, $id = null)
    {  
    //    dd($request->all());
           $collection = $request->except(['_token','_method']);


            $this->setting->createOrUpdate($id, $collection);
            Session::flash('message', 'Settings Updated Successfully'); 
            Session::flash('flash_type', 'alert-info');
            return redirect()->route('settings.edit');
      
     

        
    }
}
