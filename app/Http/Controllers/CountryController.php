<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Region;
use App\Models\Country;
use App\Models\Holidaydestination;
use App\Repository\AdminCountryRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use DB;

class CountryController extends Controller
{
    
    public $country;
    
    public function __construct(AdminCountryRepository $country)
    {
        $this->country = $country;
    }

    public function showCountry()
    {  
        // $brands= Brand::find(1);
        // $holidays = $brands->holidaytypes;
        //  holidaytypes brand k model me method tha isko ishar as property use kiya 
        // echo $holidays;
        $countries = $this->country->getAllCountries();
        return View::make('admin.country.index',compact('countries'));

    }

    public function createCountries()
    {
        $regions = Region::all();
        return View::make('admin.country.edit',compact('regions'));

    }

    public function saveCountry(Request $request, $id = null)
    {  
        $request->validate([
            'id_region'=> ['required'],  
        ]);

        $collection = $request->except(['_token','_method']);


        if( ! is_null( $id ) ) 
        {
            $this->country->createOrUpdate($id, $collection);
            Session::flash('message', 'Updated Successfully'); 
            Session::flash('flash_type','alert-info');
            return redirect()->route('country.index');
        }
        else
        {
            $this->country->createOrUpdate($id = null, $collection);
            Session::flash('message', 'Added Successfully');
            Session::flash('flash_type', 'alert-info'); 
            return redirect()->route('country.index');
        }

        
    }

    public function getCountry(Country $key)
    {
        $country = $key;
        $regions = Region::all();
        return View::make('admin.country.edit', compact('regions','country'));
    }

    public function deleteCountry($id)
    {
        $this->country->deleteCountry($id);
        Session::flash('message', 'Deleted Successfully');
            Session::flash('flash_type', 'alert-info');
        return redirect()->route('country.index');
    }


}
