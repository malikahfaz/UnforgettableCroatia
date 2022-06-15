@extends('admin.layouts.master')
@section('content')


<div class="content-wrapper">

<div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                    @isset($invoice)
                    <h3> Edit Invoice Description </h3>
                    @else
                    <h3> Create New Invoice Description  </h3>
                    @endisset
                      
                        <form class="forms-sample" method="POST" action="{{ isset($invoice) ? route('invoice.update',$invoice->id) : route('invoice.store') }}" enctype="multipart/form-data">
                            @csrf()
                            @isset($invoice)
                            @method('PUT')
                            @endisset

                            @if (count($errors) > 0)
         <div class = "alert alert-danger">
            <ul>
               @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
               @endforeach
            </ul>
         </div>
      @endif 

      
                            <div class="row">
                                <div class="col-md-4 form-group mb-3">
                                    <label for="customerName">Pax</label>
                                    <input type="text"  name="pax" value="{{ $invoice->pax ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Pax"autocomplete="name" autofocus />
                                   
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="customerName">Invoice Description</label>
                                    <input type="text"  name="description" value="{{$invoice->description ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Invoice Description"autocomplete="name" autofocus />
                                   
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="customerName">Amount</label>
                                    <input type="text"  name="amount" value="{{ $invoice->amount ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Amount"autocomplete="name" autofocus />
                                   
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="customerName">Total</label>
                                    <input type="text"  name="total" value="{{ $invoice->total ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Total"autocomplete="name" autofocus />
                                   
                                </div>


    



                                <div class="col-md-4 form-group mb-3">
                                    <label for="size">Non-Refundable</label>
                                    <select class="form-control" id="currency" name="refund"required>
                                      
                                    <option selected disabled> Select </option>
                                            <option value="yes">Yes</option>
                                            <option value="no">No</option>
                                         
                                       
                                    </select>
                                   
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="customerName">Invoicing Notes</label>
                                    <input type="text"  name="invoicing_notes" value="{{ $invoice->invoicing_notes ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter your Notes"autocomplete="name" autofocus />
                                   
                                </div>






                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                          @isset($invoice)
                              <i class="fas fa-arrow-circle-up"></i>
                              <span>Update</span>
                          @else
                              <i class="fas fa-plus-circle"></i>
                              <span>Create</span>
                          @endisset
                      </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- end of main-content -->

</div>

@endsection