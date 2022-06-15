@extends('admin.layouts.master')
@section('content')


<div class="content-wrapper">

<div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                    @isset($defaultbanner)
                        <h3> Update New Holiday-Type </h3>
                        @else
                        <h3> Create New Default Banner </h3>
                    @endisset
                        <form class="forms-sample" method="POST" action="{{ isset($defaultbanner) ? route('defaultbanner.update',$defaultbanner->id) : route('defaultbanner.store') }}" enctype="multipart/form-data">
                            @csrf()
                            @isset($defaultbanner)
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
                                    <label for="customerName">Default Banner</label>
                                    <input type="file"  name="default_banner" value="{{ $emailbanner->client_banner ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Country Name"autocomplete="name" autofocus />
</br>
@isset($defaultbanner)
<img class="img-fluid"style="height:300px;" src="{{ asset('storage/images/DefaultBanner/'.$defaultbanner->default_banner) }}" alt="Image not found" />
@endisset                
</div>



                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                          @isset($defaultbanner)
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