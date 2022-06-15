@extends('admin.layouts.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="content-wrapper">

<div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                    @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
@endif
                    @isset($settings)

                    <h3> Edit Settings </h3>
                    @else
                    <h3> Create Settings </h3>
                    @endisset
                      
                        <form class="forms-sample" method="POST" action="{{ isset($settings) ? route('settings.update',$settings->id) : route('bank.create') }}" enctype="multipart/form-data">
                            @csrf()
                            @isset($settings)
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
                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName">Admin Name</label>
                                    <input type="text"  name="admin_name" value="{{ $settings->admin_name ?? '' }}" class="form-control form-control" id="customerName"autocomplete="name" autofocus />
                                   
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName">Email</label>
                                    <input type="email"  name="email" value="{{ $settings->email ?? '' }}" class="form-control form-control" id="customerName"autocomplete="name" autofocus />
                                   
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName">Website Name</label>
                                    <input type="text"  name="web_name" value="{{ $settings->web_name ?? '' }}" class="form-control form-control" id="customerName"autocomplete="name" autofocus />
                                   
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName">Website Logo</label>
                                    <input type="file"  name="logo" class="form-control form-control" id="customerName"autocomplete="name" autofocus />
                                   
                                </div>


                                <div class="col-md-12 form-group mb-3">
                                    <label for="customerName">Mandrill Key</label>
                                    <input type="text"  name="mandrill_key" value="{{  $settings->mandrill_key ?? '' }}" class="form-control form-control" id="customerName"autocomplete="name" autofocus />
                                   
                                </div>

                                <div class="col-md-12 form-group mb-3">
                                    <label for="customerName">Mail Chimp Key</label>
                                    <input type="text"  name="mail_chimp_key" value="{{  $settings->mail_chimp_key ?? '' }}" class="form-control form-control" id="customerName"autocomplete="name" autofocus />
                                   
                                </div>

    



                                <div class="col-md-4 form-group mb-3">
                                    <label for="size">Croatia List</label>
                                    <select class="form-control" id="currency" name="croatia_list"required>
                                      
                                    <option selected disabled> Select  </option>
                                            <!-- <option value="AUD">AUD</option>
                                            <option value="EUR">EUR</option>
                                            <option value="AUD">GBP</option>
                                            <option value="AUD">USD</option> -->
                                       
                                    </select>
                                   
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="size">Cruises List</label>
                                    <select class="form-control" id="currency" name="cruises_list"required>
                                      
                                    <option selected disabled> Select  </option>
                                            <!-- <option value="AUD">AUD</option>
                                            <option value="EUR">EUR</option>
                                            <option value="AUD">GBP</option>
                                            <option value="AUD">USD</option> -->
                                       
                                    </select>
                                   
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="size">UFG Travel Company Campaign List</label>
                                    <select class="form-control" id="currency" name="ufg"required>
                                      
                                    <option selected disabled> Select  </option>
                                            <!-- <option value="AUD">AUD</option>
                                            <option value="EUR">EUR</option>
                                            <option value="AUD">GBP</option>
                                            <option value="AUD">USD</option> -->
                                       
                                    </select>
                                   
                                </div>

            


                                <div class="col-md-12 form-group mb-3">
                                    <label for="size">Paysafe(EndPoint)*</label>
                                    <p>Live: <input type="checkbox" id="checker" name = "checker"value="live"></p>
                                    <p>SandBox: <input type="checkbox" id="checker2"name="checker2" value="sandbox"></p>
                                   
                                </div>

<script>
$(document).ready(function(){
  $("#checker").change(function(){
    if($(this).is(':checked') )
    {
        $("#checker2").prop("checked", false);
        $("#fields1 ").show();
        $("#fields2 ").hide();
    }
    else 
    {
       $("#fields1 ").hide();
    }
  });









  $("#checker2").change(function(){
    if($(this).is(':checked') )
    {
        $("#checker").prop("checked", false);
        $("#fields2 ").show();
        $("#fields1 ").hide();
    }
    else 
    {
       $("#fields2 ").hide();
    }
  });




});
</script>

                                <div id = "fields1" style="display:none">
                                <div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="resellerAddress">Paysafe Payment Live</label>
                                    <input type="text"  name="paysafe_payment_live"value="{{ $settings->paysafe_payment_live ?? '' }}" class="form-control form-control" id="resellerAddress"  autocomplete="address" required>
                                   
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="resellerAddress">Paysafe Token Live</label>
                                    <input type="text"  name="paysafe_token_live"value="{{ $settings->paysafe_token_live ?? '' }}" class="form-control form-control" id="resellerAddress" placeholder="Enter IBAN" autocomplete="address" required>
                                   
                                </div>
</div>

</div>

<div id = "fields2" style="display:none">
<div class="row">
                                <div class="col-md-6 form-group mb-3">
                                    <label for="resellerAddress">Paysafe Payment SandBox</label>
                                    <input type="text"  name="paysafe_payment_sandbox"value="{{ $settings->paysafe_payment_sandbox?? '' }}" class="form-control form-control" id="resellerAddress"  autocomplete="address" required>
                                   
                                </div>

                                <div class="col-md-6 form-group mb-3">
                                    <label for="resellerAddress">Paysafe Token SandBox</label>
                                    <input type="text"  name="paysafe_token_sandbox"value="{{ $settings->paysafe_token_sandbox ?? '' }}" class="form-control form-control" id="resellerAddress" placeholder="Enter IBAN" autocomplete="address" required>
                                   
                                </div>

</div>
</div>


</div> 

<div class="row">
    

                                <div class="col-md-3 form-group mb-3">
                                    <label for="size">Activate Verification Email(Deposit/Full Amount)</label>
                                    <select class="form-control" id="currency" name="activate_verification"required>
                                      
                                    <option selected disabled> Select  </option>
                                       <option value="1">Yes</option>
                                            <option value="0">No</option>
                                            <!-- <option value="AUD">GBP</option>
                                            <option value="AUD">USD</option> -->
                                       
                                    </select>
                                   
                                </div>


                                <div class="col-md-3 form-group mb-3">
                                    <label for="size">Activate Verification Email(Remaining/Additional)</label>
                                    <select class="form-control" id="currency" name="activate_verification2"required>
                                      
                                    <option selected disabled> Select  </option>
                                       <option value="1">Yes</option>
                                            <option value="0">No</option>
                                            <!-- <option value="AUD">GBP</option>
                                            <option value="AUD">USD</option> -->
                                       
                                    </select>
                                   
                                </div>


                                <div class="col-md-3 form-group mb-3">
                                    <label for="size">Send Payment Link(Deposit/Full Amount)</label>
                                    <select class="form-control" id="currency" name="send_payment_link"required>
                                      
                                    <option selected disabled> Select  </option>
                                       <option value="ecommerce account">Ecommerce-Account</option>
                                            <option value="moto account">Moto Account</option>
                                            <!-- <option value="AUD">GBP</option>
                                            <option value="AUD">USD</option> -->
                                       
                                    </select>
                                   
                                </div>


                                <div class="col-md-3 form-group mb-3">
                                    <label for="size">Send Payment Link(Remaining/Additional)</label>
                                    <select class="form-control" id="currency" name="send_payment_link2"required>
                                      
                                    <option selected disabled> Select  </option>
                                       <option value="ecommerce account">Ecommerce-Account</option>
                                            <option value="moto account">Moto Account</option>
                                            <!-- <option value="AUD">GBP</option>
                                            <option value="AUD">USD</option> -->
                                       
                                    </select>
                                   
                                </div>


                                <div class="col-md-12 form-group mb-3">
                                    <label for="resellerAddress">Phone Verification API</label>
                                    <input type="text"  name="phone_verification_api"value="{{ $settings->phone_verification_api ?? '' }}" class="form-control form-control" id="resellerAddress" placeholder="Enter beneficiary address" autocomplete="address" required>
                                   
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="size">Email Chaser Crob Job</label>
                                    <select class="form-control" id="currency" name="email_chaser_crob_job"required>
                                      
                                    <option selected disabled> Select  </option>
                                       <option value="1">Enable</option>
                                            <option value="0">Disable</option>
                                            <!-- <option value="AUD">GBP</option>
                                            <option value="AUD">USD</option> -->
                                       
                                    </select>
                                   
                                </div>


                                <div class="col-md-3 form-group mb-3">
                                    <label for="size">TAS EndPoint</label>
                                    <select class="form-control" id="currency" name="tas_endpoint"required>
                                      
                                    <option selected disabled> Select  </option>
                                       <option value="live">Live</option>
                                            <option value="sandbox">SandBox</option>
                                            <!-- <option value="AUD">GBP</option>
                                            <option value="AUD">USD</option> -->
                                       
                                    </select>
                                   
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="resellerAddress">Waiting For Approval Email*</label>
                                    <input type="text"  name="approval_email"value="{{ $settings->approval_email ?? '' }}" class="form-control form-control" id="resellerAddress" placeholder="Enter beneficiary address" autocomplete="address" required>
                                   
                                </div>


                                <div class="col-md-4 form-group mb-3">
                                    <label for="resellerAddress">SMS UserName*</label>
                                    <input type="text"  name="sms_username"value="{{ $settings->sms_username ?? '' }}" class="form-control form-control" id="resellerAddress" placeholder="Enter beneficiary address" autocomplete="address" required>
                                   
                                </div>


                                <div class="col-md-4 form-group mb-3">
                                    <label for="resellerAddress">SMS API Key*</label>
                                    <input type="text"  name="sms_api_key"value="{{ $settings->sms_api_key ?? '' }}" class="form-control form-control" id="resellerAddress" placeholder="Enter beneficiary address" autocomplete="address" required>
                                   
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