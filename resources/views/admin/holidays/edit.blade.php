@extends('admin.layouts.master')
@section('content')


<div class="content-wrapper">

<div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                    @isset($holiday)
                        <h3> Update New Holiday-Type </h3>
                        @else
                        <h3> Create New Holiday-Type </h3>
                    @endisset
                        <form class="forms-sample" method="POST" action="{{ isset($holiday) ? route('holiday.update',$holiday->id) : route('holiday.create') }}" enctype="multipart/form-data">
                            @csrf()
                            @isset($holiday)
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
                                    <label for="customerName">Holiday Name</label>
                                    <input type="text"  name="name" value="{{ $holiday->name ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Holiday-Type"autocomplete="name" autofocus />
                                   
                                </div>

    



                                <div class="col-md-6 form-group mb-3">
                                    <label for="size">Select Brand</label>
                                    <select class="form-control" id="currency" name="brand_id"required>
                                      
                                  
                                    <option selected disabled> Select Brand </option>
                                    @foreach($brand as $b)
                                    <option value="{{$b->id}}">{{$b->name}}</option>
                                    @endforeach
                                    </select>
                                   
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