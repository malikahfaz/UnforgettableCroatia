@extends('admin.layouts.master')
@section('content')


<div class="content-wrapper">

<div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                    @isset($bank)
                    <h3> Edit Bank Account </h3>
                    @else
                    <h3> Create New Bank Account </h3>
                    @endisset
                      
                        <form class="forms-sample" method="POST" action="{{ isset($bank) ? route('bank.update',$bank->id) : route('bank.create') }}" enctype="multipart/form-data">
                            @csrf()
                            @isset($bank)
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
                                    <label for="customerName">Branch Name</label>
                                    <input type="text"  name="branchName" value="{{ $bank->branchName ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter your Branch name"autocomplete="name" autofocus />
                                   
                                </div>

    



                                <div class="col-md-4 form-group mb-3">
                                    <label for="size">Select Currency</label>
                                    <select class="form-control" id="currency" name="currency"required>
                                      
                                    <option selected disabled> Select Currency </option>
                                            <option value="AUD">AUD</option>
                                            <option value="EUR">EUR</option>
                                            <option value="AUD">GBP</option>
                                            <option value="AUD">USD</option>
                                       
                                    </select>
                                   
                                </div>







                                <div class="col-md-4 form-group mb-3">
                                    <label for="customerContact">Beneficiary</label>
                                    <input type="text"  name="bic" value="{{ $bank->bic ?? '' }}"  class="form-control form-control" placeholder="Enter BIC" autocomplete="contact" required>
                                  
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="exampleInputEmail2">Account Number</label>
                                    <input type="text"  name="account_number" value="{{ $bank->account_number ?? '' }}"  class="form-control form-control" id="exampleInputEmail2"  placeholder="Enter Account#"required />
                                   
                                </div>

            


                

                                <div class="col-md-4 form-group mb-3">
                                    <label for="resellerAddress">Sort Code</label>
                                    <input type="text"  name="sort_code"value="{{ $bank->sort_code ?? '' }}" class="form-control form-control" id="resellerAddress" placeholder="Enter Sort Number" autocomplete="address" required>
                                   
                                </div>


                                <div class="col-md-4 form-group mb-3">
                                    <label for="resellerAddress">IBAN</label>
                                    <input type="text"  name="iban"value="{{ $bank->iban ?? '' }}" class="form-control form-control" id="resellerAddress" placeholder="Enter IBAN" autocomplete="address" required>
                                   
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="resellerAddress">beneficiary Address</label>
                                    <input type="text"  name="beneficiary_address"value="{{ $bank->beneficiary_address ?? '' }}" class="form-control form-control" id="resellerAddress" placeholder="Enter beneficiary address" autocomplete="address" required>
                                   
                                </div>


                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                          @isset($bank)
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