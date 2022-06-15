<?php

namespace App\Http\Controllers;
use App\Repository\AdminInvoiceRepository;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Session;
use DB;
use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public $invoice;
    
    public function __construct(AdminInvoiceRepository $invoice)
    {
        $this->invoice = $invoice;
    }

    public function showInvoices()
    {  
        $invoices = $this->invoice->getAllInvoices();
        return View::make('admin.invoice.index',compact('invoices'));

    }

    public function createInvoice()
    {
        
        return View::make('admin.invoice.edit');
    }

    public function saveInvoice(Request $request, $id = null)
    {  
        $request->validate([
            'pax'=> ['required'],
            'description'=> ['required'],
            'amount'=> ['required'],
            'total'=> ['required'],
            'invoicing_notes'=> ['required'],
            'refund'=> ['required'],
        ]);
        $collection = $request->except(['_token','_method']);


        if( ! is_null( $id ) ) 
        {
            $this->invoice->createOrUpdate($id, $collection);
            Session::flash('message', 'Invoice Updated Successfully'); 
            Session::flash('flash_type', 'alert-info');
            return redirect()->route('invoice.index');
        }
        else
        {
            $this->invoice->createOrUpdate($id = null, $collection);
            Session::flash('message', 'Invoice Added Successfully');
            Session::flash('flash_type', 'alert-info'); 
            return redirect()->route('invoice.index');
        }

        
    }

    public function getInvoice(Invoice $key)
    {
        $invoice = $key;
        return View::make('admin.invoice.edit',compact('invoice'));
    }

    public function deleteInvoice($id)
    {
        $this->invoice->deleteInvoice($id);
        Session::flash('message', 'Deleted Successfully');
            Session::flash('flash_type', 'alert-info');
            return redirect()->route('invoice.index');
    }

}
