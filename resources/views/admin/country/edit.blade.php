@extends('admin.layouts.master')
@section('content')


<div class="content-wrapper">

<div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">

                        @isset($country)
                    <h3> Edit Country </h3>
                    @else
                    <h3> Create New Country </h3>
                    @endisset
                        <form class="forms-sample" method="POST" action="{{ isset($country) ? route('country.update',$country->id) : route('country.create') }}" enctype="multipart/form-data">
                            @csrf()
                            @isset($country)
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
                            


                                <div class="col-md-6 form-group mb-3">
                                    <label for="size">Select Region</label>
                                    <select class="form-control" id="currency" name="id_region" required>
                                      
                                  
                                    <option selected disabled> Select Region </option>
                                    @foreach($regions as $r)
                                    <option value="{{$r->id}}">{{$r->name}}</option>
                                    @endforeach
                                    </select>
                                   
                                </div>


                                <div class="col-md-6 form-group mb-3">
                                    <label for="customerName">Country Name</label>
                                    <input type="text"  name="name" value="{{ $country->name ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Country Name"autocomplete="name" autofocus />
                                   
                                </div>









                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                          @isset($country)
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