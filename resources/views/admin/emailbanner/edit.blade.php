@extends('admin.layouts.master')
@section('content')



<div class="content-wrapper">

<div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">

                        @isset($emailbanner)
                    <h3> Edit Email Banner </h3>
                    @else
                    <h3> Create New Email Banner </h3>
                    @endisset
                        <form class="forms-sample" method="POST" action="{{ isset($emailbanner) ? route('email.banner.update',$emailbanner->id) : route('email.banner.store') }}" enctype="multipart/form-data">
                            @csrf()
                            @isset($emailbanner)
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
                                    <label for="size">Select Brand</label>
                                    <select class="form-control" id="currency" name="brand_id" required>
                                      
                                  
                                    <option selected disabled> Select Brand </option>
                                    @foreach($brands as $b)
                                    <option value="{{$b->id}}">{{$b->name}}</option>
                                    @endforeach
                                    </select>
                                   
                                </div>



                            <div class="col-md-4 form-group mb-3">
                                    <label for="size">Select Region</label>
                                    <select class="form-control" id="currency" name="region_id" required>
                                      
                                  
                                    <option selected disabled> Select region </option>
                                    @foreach($regions as $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                    @endforeach
                                    </select>
                                   
                                </div>


   <div class="col-md-4 form-group mb-3">
                                    <label for="size">Payment For</label>
                                    <select class="form-control" id="currency" name="payment_for" required>
                                      
                                  
                                    <option selected disabled> Select Payment Method </option>
                                    <option value="Deposit">Deposit</option>
                                    <option value="Full amount">Full amount</option>
                                    <option value="Remaining Balance">Remaining Balance</option>
                                    <option value="Additional Amount">Additional Amount</option>
                                   
                                    </select>
                                   
                                </div>
                             

                                <div class="col-md-6 form-group mb-3">
                                    <label for="customerName">Agency Banner</label>
                                    <input type="file"  name="agency_banner" value="{{ $emailbanner->agency_banner ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Country Name"autocomplete="name" autofocus />
</br>
@isset($emailbanner)            
                 <img class="img-fluid"style="height:300px;" src="{{ asset('storage/images/EmailBanners/'.$emailbanner->agency_banner) }}" alt="Image not found" />
@endisset
                  
                                </div>


                                <div class="col-md-6 form-group mb-3">
                                    <label for="customerName">Client Banner</label>
                                    <input type="file"  name="client_banner" value="{{ $emailbanner->client_banner ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Country Name"autocomplete="name" autofocus />
</br>
@isset($emailbanner)
<img class="img-fluid"style="height:300px;" src="{{ asset('storage/images/EmailBanners/'.$emailbanner->client_banner) }}" alt="Image not found" />
@endisset                
</div>
                               









                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                          @isset($emailbanner)
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