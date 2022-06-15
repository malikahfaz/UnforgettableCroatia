<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Target;
use App\Models\TargetDetail;
use App\Models\User;
use App\Models\Holidaytype;
use App\Models\Holidaydestination;
use App\Repository\AdminTargetRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use DB;

class TargetController extends Controller
{
   
    public $target;
    
    public function __construct(AdminTargetRepository $target)
    {
        $this->target = $target;
    }

    public function showTargets()
    { 
        $targets = $this->target->getAllTargets();
        return View::make('admin.target.index',compact('targets'));

    }

    public function createTarget()
    {
        $users = User::all();
        return View::make('admin.target.edit',compact('users'));
    }


    public function saveTarget(Request $request, $id = null)
    {  
        // dd($request->all());
        $request->validate([
            'user'=> ['required'],
            'year'=> ['required'],
            "month"    => "required|array",
            "month.*"  => "required|string",
            "target"    => "required|array",
            "target.*"  => "required|integer",
            "threshold"    => "required|array",
            "threshold.*"  => "required|integer",
        ]);
        $collection = $request->except(['_token','_method']);

        $check_year = Target::where('user_id',$request->user)->where('year',$request->year)->first();

        if($check_year != null)
        {
            Session::flash('message', 'User has arleady assigned Target of this year');
            Session::flash('flash_type', 'alert-danger');
            return redirect()->route('target.create');
        }


        if( ! is_null( $id ) ) 
        {
            $this->target->createOrUpdate($id, $collection);
            Session::flash('message', 'Target Updated Successfully'); 
            Session::flash('flash_type', 'alert-info');
            return redirect()->route('target.index');
        }
        else
        {
            $this->target->createOrUpdate($id = null, $collection);
            Session::flash('message', 'Target Added Successfully');
            Session::flash('flash_type', 'alert-info'); 
            return redirect()->route('target.index');
        }

        
    }

    
    public function getTarget(Target $key)
    { 
        $target = $key;
        $users = User::all();
        $targetdetails = TargetDetail::where('target_id',$target->id)->get();
        $targetdetail = json_decode($targetdetails,true);
       
        return View::make('admin.target.edit', compact('target','users','targetdetail'));
    }


    public function deleteTarget($id)
    {
        $this->target->deleteTarget($id);
        Session::flash('message', 'Deleted Successfully');
        Session::flash('flash_type', 'alert-info');
        return redirect()->route('target.index');
    }

}
