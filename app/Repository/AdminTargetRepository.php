<?php

namespace App\Repository;

use App\Models\Brand;
use App\Models\Bankaccount;
use App\Models\Target;
use App\Models\TargetDetail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class AdminTargetRepository 
{   
    protected $target = null;

    public function getAllTargets()
    {
          
        return Target::all();
    }

    public function createOrUpdate( $id = null, $collection = [])
    {   
        $count = count($collection['target']);

        if(is_null($id)) {
            // dd($collection['target'][4]);
         
            $target  = new Target;
            $target->user_id = $collection['user'];
            $target->year = $collection['year'];
            $target->created_by = Auth::user()->name;
            $target->save();

           for($i=0; $i<$count; $i++)
           {
            $targetdetail = new TargetDetail;
            $targetdetail->target_id = $target->id;
            $targetdetail->month =  $collection['month'][$i];
            $targetdetail->target =  $collection['target'][$i];
            $targetdetail->threshold =  $collection['threshold'][$i];
            $targetdetail->save();
           }

           return true;




        }
           $target= Target::find($id);
           $target->user_id = $collection['user'];
           $target->year = $collection['year'];
           $target->created_by = Auth::user()->name;
           $target->save();


           for($i=0; $i<$count; $i++)
           {
            $targetdetail = TargetDetail::where('target_id',$id)->where('month',$collection['month'][$i])->first();
            $targetdetail->target_id = $id;
            $targetdetail->month =  $collection['month'][$i];
            $targetdetail->target =  $collection['target'][$i];
            $targetdetail->threshold =  $collection['threshold'][$i];
            $targetdetail->save();
           }

           return true;
         
    }

    public function deleteTarget($id)
    {
         Target::find($id)->delete();
         $tar = TargetDetail::where('target_id',$id)->get();
         return $tar->each->delete();
    }

  
    
}