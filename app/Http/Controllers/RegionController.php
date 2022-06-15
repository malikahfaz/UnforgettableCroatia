<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Region;
use App\Models\Holidaytype;
use App\Models\Holidaydestination;
use App\Repository\AdminRegionRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use DB;

class RegionController extends Controller
{
    public $region;
    
    public function __construct(AdminRegionRepository $region)
    {
        $this->region= $region;
    }

    public function showRegions()
    {  
    
        $regions = $this->region->getAllRegions();
        return View::make('admin.region.index',compact('regions'));

    }

    public function createRegions()
    {
        return View::make('admin.region.edit');
    }

    
    public function saveRegion(Request $request, $id = null)
    {  
       
        $collection = $request->except(['_token','_method']);


        if( ! is_null( $id ) ) 
        {
            $this->region->createOrUpdate($id, $collection);
            Session::flash('message', 'Updated Successfully'); 
            Session::flash('flash_type', 'alert-info');
            return redirect()->route('region.index');
        }
        else
        {
            $this->region->createOrUpdate($id = null, $collection);
            Session::flash('message', 'Added Successfully');
            Session::flash('flash_type', 'alert-info'); 
            return redirect()->route('region.index');
        }

        
    }


    public function getRegion(Region $key)
    {
        $region = $key;
        return View::make('admin.region.edit', compact('region'));
    }

    public function deleteRegion($id)
    {
        $this->region->deleteRegion($id);
        Session::flash('message', 'Deleted Successfully');
            Session::flash('flash_type', 'alert-info');
            return redirect()->route('region.index');
    }
}
