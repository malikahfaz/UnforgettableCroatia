@extends('admin.layouts.master')
@section('content')

<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($user) ? "Edit User" : "Create User" }}</div>

                <div class="card-body">
                <form id="itemFrom" role="form" method="POST"
                    action="{{ isset($user) ? route('user.update',$user->id) : route('brand.create') }}">
                  @csrf
                  @isset($user)
                      @method('PUT')
                  @endisset
  
                  <div class="card-body">

                    <div class="form-group">
                        <label for="type">Name</label>
                        <input type="text" name="name" value="{{ $user->name ?? '' }}">
                    </div>
                       
                    <div class="form-group">
                        <label for="type">Email</label>
                        <input type="text" name="email" value="{{ $user->email ?? '' }}">
                    </div>
  
                      <button type="submit" class="btn btn-primary">
                          @isset($user)
                              <i class="fas fa-arrow-circle-up"></i>
                              <span>Update</span>
                          @else
                              <i class="fas fa-plus-circle"></i>
                              <span>Create</span>
                          @endisset
                      </button>
  
                  </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

 -->






<div class="content-wrapper">

<div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                    @isset($brand)
                    <h3> Edit Brand </h3>
                    @else
                    <h3> Create New Brand </h3>
                    @endisset
                        
                        <form class="forms-sample" method="POST" action="{{ isset($brand) ? route('brand.update',$brand->id) : route('brand.create') }}" enctype="multipart/form-data">
                            @csrf()
                            @isset($brand)
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
                                    <label for="customerName">Brand Name</label>
                                    <input type="text"  name="name" value="{{ $brand->name ?? old('name') }}" class="form-control form-control" id="customerName" placeholder="Enter your Brand name"autocomplete="name" autofocus />
                                   
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="customerEmail">Email</label>
                                    <input type="email" name="email" value="{{ $brand->email ?? old('email') }}" class="form-control form-control @error('email') is-invalid @enderror " id="customerEmail" placeholder="Enter email" autocomplete="email" autofocus />
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                   
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="customerContact">Address</label>
                                    <input type="text"  name="address" value="{{ $brand->address ?? old('address') }}"  class="form-control form-control" placeholder="Enter Address" autocomplete="contact" autofocus/>
                                  
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="exampleInputEmail2">Phone</label>
                                    <input type="number"  name="phone" value="{{ $brand->phone ?? old('phone') }}"  class="form-control form-control" id="exampleInputEmail2"  placeholder="Enter Phone#" />
                                   
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="resellerAddress">Logo</label>
                                    <input type="file" name="logo" class="form-control form-control " id="resellerAddress" placeholder="Your Logo"  autocomplete="logo" required>
                                   
                                </div>


                

                                <div class="col-md-4 form-group mb-3">
                                    <label for="resellerAddress">color</label>
                                    <input type="color"  name="color"value="{{ $brand->color ?? '#ff0000' }}" class="form-control form-control" id="resellerAddress" placeholder="Select Color" autocomplete="address" required>
                                   
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="resellerAddress">prefix</label>
                                    <input type="text"  name="prefix"value="{{ $brand->prefix ?? old('prefix') }}" class="form-control form-control" id="resellerAddress" placeholder="Enter Prefix" autocomplete="address" required>
                                   
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="resellerAddress">from_name</label>
                                    <input type="text"name="from_name"value="{{ $brand->from_name ?? old('from_name') }}" class="form-control form-control" id="resellerAddress" placeholder="Enter From Name" autocomplete="address"required>
                                   
                                </div>
                                <div class="col-md-4 form-group mb-3">
                                    <label for="resellerAddress">booking CC Email</label>
                                    <input type="text"  name="booking_cc_email"value="{{ $brand->booking_cc_email ?? old('booking_cc_email') }}" class="form-control form-control" id="resellerAddress" placeholder="Enter Booking CC Email" autocomplete="address" required>
                                   
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="resellerAddress">Payment CC Email</label>
                                    <input type="text"  name="payment_cc_email"value="{{ $brand->payment_cc_email ?? old('payment_cc_email') }}" class="form-control form-control" id="resellerAddress" placeholder="Enter Payment CC Email" autocomplete="address" required>
                                   
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="resellerAddress">Term Link</label>
                                    <input type="text"  name="term_link"value="{{ $brand->term_link ?? old('term_link') }}" class="form-control form-control " id="resellerAddress" placeholder="Enter Term Link" autocomplete="address"required>
                                   
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="resellerAddress">Privacy Link</label>
                                    <input type="text"  name="privacy_link"value="{{ $brand->privacy_link ?? old('privacy_link') }}" class="form-control form-control" id="resellerAddress" placeholder="Enter Privacy Link" autocomplete="address"required>
                                   
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="resellerAddress">Term USA Link</label>
                                    <input type="text"  name="term_usa_link"value="{{ $brand->term_usa_link ?? old('term_usa_link') }}" class="form-control form-control" id="resellerAddress" placeholder="Enter Term USA Link" autocomplete="address"required>
                                   
                                </div>

                                <div class="col-md-4 form-group mb-3">
                                    <label for="resellerAddress"> Privacy USA Link</label>
                                    <input type="text"  name="privacy_usa_link"value="{{ $brand->privacy_usa_link ?? old('privacy_usa_link') }}" class="form-control form-control" id="resellerAddress" placeholder="Enter Privacy USA Link" autocomplete="address"required>
                                   
                                </div>

                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                          @isset($brand)
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