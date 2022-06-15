<?php

namespace App\Repository;

use App\Models\Brand;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class AdminRepository 
{   
    protected $brand = null;

    public function getAllBrands()
    {
        return Brand::all();
    }

    public function getUserById($id)
    {
        return Brand::find($id);
    }

    public function createOrUpdate( $id = null, $collection = [],$file = null )
    {   
        if(is_null($id)) {
            $brand = new Brand;
            $brand->name = $collection['name'];
            $brand->address = $collection['address'];
            $brand->phone = $collection['phone'];


            $brand->logo  = $file;
            // // $cnic_front_image = $request->file('cnic_front');
            // // $cnic_front_image_name = $cnic_front_image->getClientOriginalName();
            // // $cnic_front_image->storeAs('/images/SaleCenterImages',$cnic_front_image_name);
    
            // $saleCenter->cnic_front = $cnic_front_image_name;


            $brand->color = $collection['color'];
            $brand->prefix = $collection['prefix'];
            $brand->from_name = $collection['from_name'];
            $brand->email = $collection['email'];
            $brand->booking_cc_email = $collection['booking_cc_email'];
            $brand->payment_cc_email = $collection['payment_cc_email'];
            $brand->term_link = $collection['term_link'];
            $brand->privacy_link = $collection['privacy_link'];
            $brand->term_usa_link = $collection['term_usa_link'];
            $brand->privacy_usa_link = $collection['privacy_usa_link'];
            return $brand->save();
        }
            $brand = Brand::find($id);
            $brand->name = $collection['name'];
            $brand->address = $collection['address'];
            $brand->phone = $collection['phone'];

            // $file =  $collection['logo'];
            // $name = $file->getClientOriginalName();
            // $file->storeAs('/images/brandlogo',$name);
            $brand->logo  = $file;
            // // $cnic_front_image = $request->file('cnic_front');
            // // $cnic_front_image_name = $cnic_front_image->getClientOriginalName();
            // // $cnic_front_image->storeAs('/images/SaleCenterImages',$cnic_front_image_name);
            // $saleCenter->cnic_front = $cnic_front_image_name;
            $brand->color = $collection['color'];
            $brand->prefix = $collection['prefix'];
            $brand->from_name = $collection['from_name'];
            $brand->email = $collection['email'];
            $brand->booking_cc_email = $collection['booking_cc_email'];
            $brand->payment_cc_email = $collection['payment_cc_email'];
            $brand->term_link = $collection['term_link'];
            $brand->privacy_link = $collection['privacy_link'];
            $brand->term_usa_link = $collection['term_usa_link'];
            $brand->privacy_usa_link = $collection['privacy_usa_link'];
            return $brand->save();
    }
    
    public function deleteBrand($id)
    {
        return Brand::find($id)->delete();
    }
}