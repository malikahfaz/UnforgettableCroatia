<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Region;
use App\Models\DefaultBanner;
use App\Models\Country;
use App\Models\Holidaydestination;
use App\Repository\AdminDefaultBannerRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use DB;


class DefaultBannerController extends Controller
{
    
      
    public $defaultbanner;
    
    public function __construct(AdminDefaultBannerRepository $defaultbanner)
    {
        $this->defaultbanner = $defaultbanner;
    }

    public function showDefaultbanner()
    {  
        // $brands= Brand::find(1);
        // $holidays = $brands->holidaytypes;
        //  holidaytypes brand k model me method tha isko ishar as property use kiya 
        // echo $holidays;
        $defaultbanner = $this->defaultbanner->getAllDefaultbanner();
        return View::make('admin.defaultbanner.index',compact('defaultbanner'));

    }
    public function createDefaultBanners()
    {
        return View::make('admin.defaultbanner.edit');

    }


    public function saveDefaultBanner(Request $request, $id = null)
    {  
        $request->validate([
            'default_banner'=> ['image:jpeg,png,jpg,gif|required'],  
        ]);
        $defaultimage = $request->file('default_banner');
        $collection = $request->except(['_token','_method']);


        if( ! is_null( $id ) ) 
        {
            $this->defaultbanner->createOrUpdate($id, $collection ,$defaultimage);
            Session::flash('message', 'Default Banner Updated Successfully'); 
            Session::flash('flash_type','alert-info');
            return redirect()->route('defaultbanner.index');
        }
        else
        {
            $this->defaultbanner->createOrUpdate($id = null, $collection ,$defaultimage);
            Session::flash('message', 'Default Banner Added Successfully');
            Session::flash('flash_type','alert-info'); 
            return redirect()->route('defaultbanner.index');
        }

        
    }
    public function getDefaultbanner(DefaultBanner $key)
    {
        $defaultbanner = $key;
      
        return View::make('admin.defaultbanner.edit',compact('defaultbanner'));
    }
}
