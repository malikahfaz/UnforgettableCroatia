@extends('admin.layouts.master')
@section('content')


<div class="content-wrapper">

<div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <h3> Create New Region </h3>
                        <form class="forms-sample" method="POST" action="{{ isset($region) ? route('region.update',$region->id) : route('region.create') }}" enctype="multipart/form-data">
                            @csrf()
                            @isset($region)
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
                                    <label for="customerName">Region Name</label>
                                    <input type="text"  name="name" value="{{ $region->name ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Region"autocomplete="name" autofocus />
                                   
                                </div>


                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                          @isset($region)
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