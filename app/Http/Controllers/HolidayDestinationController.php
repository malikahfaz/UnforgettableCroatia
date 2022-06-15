<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Holidaytype;
use App\Models\Holidaydestination;
use App\Repository\AdminHolidayDestinationRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use DB;

class HolidayDestinationController extends Controller
{
    public $holiday;
    
    public function __construct(AdminHolidayDestinationRepository $holiday)
    {
        $this->holiday = $holiday;
    }

    public function showHolidays()
    {  
        // $brands= Brand::find(1);
        // $holidays = $brands->holidaytypes;
        //  holidaytypes brand k model me method tha isko ishar as property use kiya 
        // echo $holidays;
        $holiday_brands = $this->holiday->getAllHolidays();
        return View::make('admin.holiday_destination.index',compact('holiday_brands'));

    }

    public function createHolidays()
    {
        $regions = DB::table('regions')->pluck("name","id")->all();
        return View::make('admin.holiday_destination.edit',compact('regions'));
    }


// countries
// state 

// regions
// countries

    public function selectAjax(Request $request)
    {
    	if($request->ajax()){
    		$countries = DB::table('countries')->where('id_region',$request->id_region)->pluck("name","id")->all();
    		$data = view('admin.ajax.region_country.ajax-select',compact('countries'))->render();
    		return response()->json(['options'=>$data]);
    	}
    }


    public function saveHoliday(Request $request, $id = null)
    {  
        $request->validate([
            'id_region'=> ['required'],
            'id_country'=> ['required'],
        ]);
        $collection = $request->except(['_token','_method']);


        if( ! is_null( $id ) ) 
        {
            $this->holiday->createOrUpdate($id, $collection);
            Session::flash('message', 'Updated Successfully'); 
            Session::flash('flash_type', 'alert-info');
            return redirect()->route('holiday_d.index');
        }
        else
        {
            $this->holiday->createOrUpdate($id = null, $collection);
            Session::flash('message', 'Added Successfully');
            Session::flash('flash_type', 'alert-info'); 
            return redirect()->route('holiday_d.index');
        }

        
    }

    public function getHoliday(Holidaydestination $key)
    {
        $holiday_d = $key;
        return View::make('admin.holiday_destination.edit', compact('holiday_d'));
    }



    public function deleteHoliday($id)
{
    $this->holiday->deleteHoliday($id);
    Session::flash('message', 'Deleted Successfully');
        Session::flash('flash_type', 'alert-info');
    return redirect()->route('holiday_d.index');
}


}
