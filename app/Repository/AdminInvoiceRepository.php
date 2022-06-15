<?php

namespace App\Repository;


use App\Models\Invoice;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;

class AdminInvoiceRepository 
{   
    protected $invoice = null;

    public function getAllInvoices()
    {
          
        return Invoice::all();
    }

    public function createOrUpdate( $id = null, $collection = [])
    {   
        if(is_null($id))
         {
            $invoice = new Invoice;
            $invoice->pax = $collection['pax'];
            $invoice->description = $collection['description'];
            $invoice->amount = $collection['amount'];
            $invoice->total = $collection['total'];
            $invoice->refund = $collection['refund'];
            $invoice->invoicing_notes = $collection['invoicing_notes'];
            return  $invoice->save();
        }
        $invoice= Invoice::find($id);
        $invoice->pax = $collection['pax'];
        $invoice->description = $collection['description'];
        $invoice->amount = $collection['amount'];
        $invoice->total = $collection['total'];
        $invoice->refund = $collection['refund'];
        $invoice->invoicing_notes = $collection['invoicing_notes'];
        return  $invoice->save();
    }

    public function deleteInvoice($id)
    {
        return Invoice::find($id)->delete();
    }

  
    
}