@extends('admin.layouts.master')
@section('content')


<div class="content-wrapper">

<div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                    @isset($user)
                        <h3> Update User </h3>
                        @else
                        <h3> Create New User </h3>
                    @endisset
                        <form class="forms-sample" method="POST" action="{{ isset($user) ? route('user.update',$user->id) : route('user.store') }}" enctype="multipart/form-data">
                            @csrf()
                            @isset($user)
                          
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





      

      
      @if(isset($user))
      @php
    $user_info = App\Models\userinformation::all();
     @endphp
      @endif
     
                            <div class="row">
                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName">First Name</label>
                                    <input type="text"  name="fname" value="{{ $user->first_name ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter First Name"autocomplete="name" autofocus /required>
                                   
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName">Last Name</label>
                                    <input type="text"  name="lname" value="{{ $user->last_name ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Last Name"autocomplete="name" autofocus /required>
                                   
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName">User Name</label>
                                    <input type="text"  name="usname" value="{{ $user->name ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter User Name"autocomplete="name" autofocus /required>
                                   
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName">Email</label>
                                    <input type="email"  name="email" value="{{ $user->email ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Email"autocomplete="name" autofocus /required>
                                   
                                </div>


                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName">Password</label>
                                    <input type="password"  name="password" value="{{ $user->o_auth ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Email"autocomplete="name" autofocus /required>
                                   
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName">Date of Birth</label>
                                    <input type="date"  name="date_birth" value="{{ $user->date_of_birth ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Email"autocomplete="name" autofocus /required>
                                   
                                </div>


                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName">Address</label>
                                    <input type="text"  name="address" value="{{ $user->address ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Address"autocomplete="name" autofocus /required>
                                   
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName">Country</label>
                                    <input type="text"  name="country" value="{{ $user->country ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Country"autocomplete="name" autofocus /required>
                                   
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName">State</label>
                                    <input type="text"  name="state" value="{{ $user->state ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter State"autocomplete="name" autofocus /required>
                                   
                                </div>


                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName">City</label>
                                    <input type="text"  name="city" value="{{ $user->city ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter City"autocomplete="name" autofocus /required>
                                   
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName">Zip</label>
                                    <input type="text"  name="zip" value="{{ $user->zip ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Zip"autocomplete="name" autofocus /required>
                                   
                                </div>
</div>

    


<h3 style="padding-top:18px;color:#17a2b8;font-style:bold;">Unforgettable Travel Company Limited</h3>


                               

<div class="row">
<div class="col-md-3 form-group mb-3">
                                    <label for="customerName">Other Currency Phone</label>
                                    <input type="number"  name="currency_phone" value="{{ $user->user_info->utcl_other_currency_phone ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Other Currency Phone"autocomplete="name" autofocus /required>
                                   
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName">  USA Phone</label>
                                    <input type="number"  name="usa_phone" value="{{ $user->user_info->utcl_usa_phone ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Usa Phone"autocomplete="name" autofocus /required>
                                   
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName"> USD Agent Phone</label>
                                    <input type="number"  name="usd_Agent_phone" value="{{ $user->user_info->utcl_usd_agent_phone ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Usa Phone"autocomplete="name" autofocus /required>
                                   
                                </div>

</div>


<h3 style="padding-top:18px;color:#17a2b8;font-style:bold;">Cruise Croatia</h3>


                               

<div class="row">
<div class="col-md-3 form-group mb-3">
                                    <label for="customerName">Other Currency Phone</label>
                                    <input type="number"  name="currency_phone_1" value="{{ $user->user_info->cc_other_currency_phone ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Other Currency Phone"autocomplete="name" autofocus /required>
                                   
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName">  USA Phone</label>
                                    <input type="number"  name="usa_phone_1" value="{{ $user->user_info->cc_usa_phone ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Usa Phone"autocomplete="name" autofocus /required>
                                   
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName"> USD Agent Phone</label>
                                    <input type="number"  name="usd_Agent_phone_1" value="{{ $user->user_info->cc_usd_agent_phone ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Usa Phone"autocomplete="name" autofocus /required>
                                   
                                </div>

</div>





<div class="row"style="padding-top:18px;">


<div class="col-md-3 form-group mb-3">
                                    <label for="customerName">User Role</label>
                                    <select class="custom-select" name="role" required>
                                        @foreach($roles as $role)
                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
        
       
    </select>
                                   
                                </div>


<div class="col-md-3 form-group mb-3">
                                    <label for="customerName">User Currency </label>
                                    <select class="custom-select" name="currency"required>
        <option value="aud">AUD</option>
        <option value ="eur">EUR</option>
        <option value ="gbp">GBP</option>
        <option value ="usd">USD</option>
    </select>
                                   
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName">Payment Options </label>
                                    <select class="custom-select" name="payment"required>
        
        <option value="Take Payment Now">Take Payment Now</option>
        <option value="Send Payment Link">Send Payment Link</option>
     
    </select>
                                   
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName"> Destination Type</label>
                                    <select class="custom-select" name="destination_type"required>
        
        <option value="ABTOT">ABTOT</option>
        <option value="ABTOL">ABTOL</option>
     
    </select>
                                   
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName">Holiday Type</label>
                                    <select class="custom-select" name="holiday_type"required>
        
        <option value="EU">EU</option>
        <option value="NON EU">NON EU</option>
     
    </select>
                                   
                                </div>

                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName">Holiday Country</label>
                                    <select class="custom-select" name="h_country"required>
        @foreach($countries as $c)
        <option value="{{$c->id}}">{{$c->name}}</option>
        @endforeach
       
     
    </select>
                                   
                                </div>



                                <div class="col-md-3 form-group mb-3">
                                    <label for="customerName">Brand</label>
                                    <select class="custom-select" name="brand"required>
        @foreach($brands as $b)
        <option value="{{$b->id}}">{{$b->name}}</option>
        @endforeach
       
     
    </select>
                                   
                                </div>

</div>


                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                          @isset($holiday)
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