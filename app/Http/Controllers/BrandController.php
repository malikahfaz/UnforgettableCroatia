<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\AdminRepository;
use Illuminate\Support\Facades\View;
use App\Models\Brand;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class BrandController extends Controller
{
    public $brand;
    
    public function __construct(AdminRepository $brand)
    {
        $this->brand = $brand;
    }

    public function showBrands()
    {
       $brands = $this->brand->getAllBrands();
       return View::make('admin.brands.index', compact('brands'));
       
    }

    public function createBrands()
    {
        return View::make('admin.brands.edit');
    }

    public function saveBrand(Request $request, $id = null)
    {   
        $request->validate([
            'name'=> ['required'],
            'address'=> ['required'],
            'phone'=> ['required', 'numeric', 'min:1'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'booking_cc_email' => ['required', 'string', 'email', 'max:255'],
            'payment_cc_email' => ['required', 'string', 'email', 'max:255'],
           
            
        ]);


        $collection = $request->except(['_token','_method']);

        $filee = $request->file('logo');
        $file = $filee->getClientOriginalName();
        $filee->storeAs('/images/brandlogo',$file);

        if( ! is_null( $id ) ) 
        {
            $this->brand->createOrUpdate($id, $collection,$file);
            Session::flash('message', 'Updated Successfully'); 
            Session::flash('flash_type', 'alert-info');
            return redirect()->route('brand.index');
        }
        else
        {
            $this->brand->createOrUpdate($id = null, $collection,$file);
            Session::flash('message', 'Added Successfully');
            Session::flash('flash_type', 'alert-info'); 
            return redirect()->route('brand.index');
        }

        
    }

    public function getBrand(Brand $key)
    {
        $brand = $key;
        // $user = $this->user->getUserById($id);
        return View::make('admin.brands.edit', compact('brand'));
    }

    public function deleteBrand($id)
    {
        $this->brand->deleteBrand($id);
        Session::flash('message', 'Deleted Successfully');
            Session::flash('flash_type', 'alert-info');
        return redirect()->route('brand.index');
    }

  
}
