<?php

namespace App\Repository;

use App\Models\Brand;
use App\Models\Bankaccount;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class AdminBankRepository 
{   
    protected $bank = null;

    public function getAllBanks()
    {
        return Bankaccount::all();
    }

    public function getUserById($id)
    {
        return Brand::find($id);
    }

    public function createOrUpdate( $id = null, $collection = [])
    {   
        if(is_null($id)) {
            $bank = new Bankaccount;
            $bank->branchName = $collection['branchName'];
            $bank->currency = $collection['currency'];
            $bank->bic = $collection['bic'];
            $bank->account_number = $collection['account_number'];
            $bank->sort_code = $collection['sort_code'];
            $bank->iban = $collection['iban'];
            $bank->beneficiary_address= $collection['beneficiary_address'];
            
            return $bank->save();
        }
            $bank= Bankaccount::find($id);
            $bank->branchName = $collection['branchName'];
            $bank->currency = $collection['currency'];
            $bank->bic = $collection['bic'];
            $bank->account_number = $collection['account_number'];
            $bank->sort_code = $collection['sort_code'];
            $bank->iban = $collection['iban'];
            $bank->beneficiary_address = $collection['beneficiary_address'];
            
            return $bank->save();
    }

    public function deleteBank($id)
    {
        return Bankaccount::find($id)->delete();
    }
    
    
}