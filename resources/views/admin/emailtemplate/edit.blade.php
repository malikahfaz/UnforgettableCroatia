@extends('admin.layouts.master')
@section('content')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>


<div class="content-wrapper">

<div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">

                        @isset($emailtemplate)
                    <h3> Edit Email Template </h3>
                    @else
                    <h3> Create New Email Template </h3>
                    @endisset
                        <form class="forms-sample" method="POST" action="{{ isset($emailtemplate) ? route('email.template.update',$emailtemplate->id) : route('email.template.store') }}" enctype="multipart/form-data">
                            @csrf()
                            @isset($emailtemplate)
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
                                    <label for="customerName">Template Name</label>
                                    <input type="text"  name="name" value="{{ $emailtemplate->name ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Country Name"autocomplete="name" autofocus />
                                   
                                </div>



                                <div class="col-md-6 form-group mb-3">
                                    <label for="size">Select Brand</label>
                                    <select class="form-control" id="currency" name="brand_id" required>
                                      
                                  
                                    <option selected disabled> Select Brand </option>
                                    @foreach($brands as $b)
                                    <option value="{{$b->id}}">{{$b->name}}</option>
                                    @endforeach
                                    </select>
                                   
                                </div>

                                @if(isset($emailtemplate))
                                <div class="col-md-12 form-group mb-3">
                                   
                               
                                <label for="size">  Content </label>
                                <textarea id="editor1" name="editor1">{{$emailtemplate->content}}</textarea>
                                
                                <script type="text/javascript">
                                  CKEDITOR.replace( 'editor1' );
                                  </script>
                                </div>
                                @else
                                <div class="col-md-12 form-group mb-3">
                                   
                               
                                   <label for="size">  Content </label>
                                   <textarea id="editor1" name="editor1"></textarea>
                                   
                                   <script type="text/javascript">
                                     CKEDITOR.replace( 'editor1' );
                                     </script>
                                   </div>
                                @endif
                               









                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                          @isset($emailtemplate)
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