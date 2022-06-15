<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Emailtemplate;
use App\Models\Holidaydestination;
use App\Repository\AdminEmailTemplateRepository ;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use DB;

class EmailTemplateController extends Controller
{
    
    public $emailtemplate;
    
    public function __construct(AdminEmailTemplateRepository $emailtemplate)
    {
        $this->emailtemplate = $emailtemplate;
    }

    public function showEmailTemplates()
    {  
        // $brands= Brand::find(1);
        // $holidays = $brands->holidaytypes;
        //  holidaytypes brand k model me method tha isko ishar as property use kiya 
        // echo $holidays;
        $emailtemplates = $this->emailtemplate->getAllEmailtemplates();
        return View::make('admin.emailtemplate.index',compact('emailtemplates'));

    }

    public function createEmailTemplates()
    {
        $brands = Brand::all();
        return View::make('admin.emailtemplate.edit',compact('brands'));

    }

    public function saveEmailTemplate(Request $request, $id = null)
    {  
        $request->validate([
            'name'=> ['required'],  
            'brand_id'=> ['required'],  
        ]);

        $collection = $request->except(['_token','_method']);


        if( ! is_null( $id ) ) 
        {
            $this->emailtemplate->createOrUpdate($id, $collection);
            Session::flash('message', 'Email Template Updated Successfully'); 
            Session::flash('flash_type','alert-info');
            return redirect()->route('email.template.index');
        }
        else
        {
            $this->emailtemplate->createOrUpdate($id = null, $collection);
            Session::flash('message', 'Email Template Added Successfully');
            Session::flash('flash_type','alert-info'); 
            return redirect()->route('email.template.index');
        }

        
    }

    public function getEmailtemplate(Emailtemplate $key)
    {
        $emailtemplate = $key;
        $brands = Brand::all();
        return View::make('admin.emailtemplate.edit',compact('brands','emailtemplate'));
    }

    public function deleteEmailTemplate($id)
    {
        $this->emailtemplate->deleteEmailTemplate($id);
        Session::flash('message', 'Deleted Successfully');
            Session::flash('flash_type', 'alert-info');
            return redirect()->route('email.template.index');
    }
}
