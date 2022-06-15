<?php

namespace App\Http\Controllers;
use App\Repository\AdminEmailBannerRepository;
use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\EmailBanner;
use App\Models\Region;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use DB;


class EmailBannerController extends Controller
{
     
    public $emailbanner;
    
    public function __construct(AdminEmailBannerRepository $emailbanner)
    {
        $this->emailbanner = $emailbanner;
    }

    public function showEmailbanners()
    {  
        // $brands= Brand::find(1);
        // $holidays = $brands->holidaytypes;
        //  holidaytypes brand k model me method tha isko ishar as property use kiya 
        // echo $holidays;
        $emailbanners = $this->emailbanner->getAllEmailbanners();
        return View::make('admin.emailbanner.index',compact('emailbanners'));

    }

    public function createEmailBanners()
    {
        $brands = Brand::all();
        $regions = Region::all();
        return View::make('admin.emailbanner.edit',compact('brands','regions'));

    }

    public function saveEmailBanner(Request $request, $id = null)
    {  
        $request->validate([
            'region_id'=> ['required'],  
            'brand_id'=> ['required'],  
            'payment_for'=> ['required'],  
            'agency_banner'=> ['required'],  
            'client_banner'=> ['required'],  
        ]);

        // dd($request->all());
       $agencyimage = $request->file('agency_banner');
       $clientimage = $request->file('client_banner');

        $collection = $request->except(['_token','_method']);


        if( ! is_null( $id ) ) 
        {
            $this->emailbanner->createOrUpdate($id, $collection, $agencyimage,$clientimage );
            Session::flash('message', 'Email banner Updated Successfully'); 
            Session::flash('flash_type','alert-info');
            return redirect()->route('email.banner.index');
        }
        else
        {
            $this->emailbanner->createOrUpdate($id = null, $collection, $agencyimage,$clientimage );
            Session::flash('message', 'Email Banner Added Successfully');
            Session::flash('flash_type','alert-info'); 
            return redirect()->route('email.banner.index');
        }

        
    }

     public function getEmailbanner(EmailBanner $key)
    {
        $emailbanner = $key;
        $brands = Brand::all();
        $regions = Region::all();
        return View::make('admin.emailbanner.edit',compact('brands','regions','emailbanner'));
    }

    public function deleteEmailBanner($id)
    {
        $this->emailbanner->deleteEmailBanner($id);
        Session::flash('message', 'Deleted Successfully');
            Session::flash('flash_type', 'alert-info');
            return redirect()->route('email.banner.index');
    }

}
