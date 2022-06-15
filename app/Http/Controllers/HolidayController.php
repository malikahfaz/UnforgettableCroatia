<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Holidaytype;
use App\Repository\AdminHolidayRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;

class HolidayController extends Controller
{

    public $holiday;
    
    public function __construct(AdminHolidayRepository $holiday)
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
        return View::make('admin.holidays.index',compact('holiday_brands'));

    }

    public function createHolidays()
    {
        $brand = Brand::All();
        return View::make('admin.holidays.edit',compact('brand'));
    }

    
    public function saveHoliday(Request $request, $id = null)
    {  
       
        $collection = $request->except(['_token','_method']);


        if( ! is_null( $id ) ) 
        {
            $this->holiday->createOrUpdate($id, $collection);
            Session::flash('message', 'Updated Successfully'); 
            Session::flash('flash_type', 'alert-info');
            return redirect()->route('holiday.index');
        }
        else
        {
            $this->holiday->createOrUpdate($id = null, $collection);
            Session::flash('message', 'Added Successfully');
            Session::flash('flash_type', 'alert-info'); 
            return redirect()->route('holiday.index');
        }

        
    }


    public function getHoliday(Holidaytype $key)
    {
        $holiday = $key;
        $brand = Brand::All();
        return View::make('admin.holidays.edit', compact('holiday','brand'));
    }

    public function deleteHoliday($id)
    {
        $this->holiday->deleteHoliday($id);
        Session::flash('message', 'Deleted Successfully');
            Session::flash('flash_type', 'alert-info');
        return redirect()->route('holiday.index');
    }
}
