<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\AdminBankRepository;
use Illuminate\Support\Facades\View;
use App\Models\Brand;
use App\Models\Bankaccount;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

class BankController extends Controller
{
    public $bank;
    
    public function __construct(AdminBankRepository $bank)
    {
        $this->bank = $bank;
    }


    public function showBanks()
    {
       $banks = $this->bank->getAllBanks();
       return View::make('admin.bankaccounts.index', compact('banks'));
       
    }


    public function createBanks()
    {
        return View::make('admin.bankaccounts.edit');
    }




    public function saveBank(Request $request, $id = null)
    {  
        $request->validate([
            'branchName'=> ['required'],
            'currency'=> ['required',],
            'bic'=> ['required'],
            'account_number' => ['required'],
         
           
            
        ]); 

        $collection = $request->except(['_token','_method']);


        if( ! is_null( $id ) ) 
        {
            $this->bank->createOrUpdate($id, $collection);
            Session::flash('message', 'Updated Successfully'); 
            Session::flash('flash_type', 'alert-info');
            return redirect()->route('bank.index');
        }
        else
        {
            $this->bank->createOrUpdate($id = null, $collection);
            Session::flash('message', 'Added Successfully');
            Session::flash('flash_type', 'alert-info'); 
            return redirect()->route('bank.index');
        }

        
    }

    public function getBank(Bankaccount $key)
    {
        $bank = $key;
        // $user = $this->user->getUserById($id);
        return View::make('admin.bankaccounts.edit', compact('bank'));
    }

    public function deleteBank($id)
    {
        $this->bank->deleteBank($id);
        Session::flash('message', 'Deleted Successfully');
            Session::flash('flash_type', 'alert-info');
        return redirect()->route('bank.index');
    }



}
