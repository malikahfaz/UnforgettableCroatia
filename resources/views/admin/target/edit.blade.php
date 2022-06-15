@extends('admin.layouts.master')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

    
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
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class','alert-danger') }}">{{ Session::get('message') }}</p>
@endif
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                    @isset($target)
                    <h3> Edit User Target </h3>
                    @else
                    <h3> Create New Target For Staff </h3>
                    @endisset
                        
                        <form class="forms-sample" method="POST" action="{{ isset($target) ? route('target.update',$target->id) : route('target.store') }}" enctype="multipart/form-data">
                            @csrf()
                            @isset($target)
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
                                    <label for="size">Select Staff</label>
                                    <select class="form-control" id="useremails" name="user"required>
                                      
                                  @if(isset($target))
                                  <option selected disabled>{{ $target->user->email}} </option>
                                  @else
                                  <option selected disabled>Select User </option>
                                  @endif
                                   
                                    @foreach($users as $u)
                                    <option value="{{$u->id}}">{{$u->email}}</option>
                                    @endforeach
                                    </select>
                                   
                                </div>


                                <div class="col-md-6 form-group mb-3">
                                    <label for="size">Select Year</label>
                                    <select class="form-control" id="year" name="year"required>
                                      
                                  
                                    @if(isset($target))
                                  <option selected disabled>{{ $target->year}} </option>
                                  @else
                                  <option selected disabled>Select Year </option>
                                  @endif
                                    @for ($i =2022; $i <= 2050; $i++)
                                     <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                    </select>
                                   
                                </div>

@php


@endphp
                                <div class = "col-md-4">
                                <label for="Month">Month</label>
                                    <input type="text"  name="month[]" value="January" class="form-control form-control" id="customerName" autocomplete="name" autofocus readonly/>
                                 </div>

                                 <div class = "col-md-4">
                                  <label for="Target">Target</label>
                                    <input type="number"  name="target[]" value="{{ $targetdetail[0]['target'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Target"autocomplete="name" autofocus />
                                 </div>

                                 <div class = "col-md-4">
                                 <label for="Threshold">Threshold</label>
                                    <input type="number"  name="threshold[]" value="{{ $targetdetail[0]['threshold'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Threshold"autocomplete="name" autofocus />
                                 </div>





                                 <div class = "col-md-4"style="padding-top:15px;">
                                    <input type="text"  name="month[]" value="Fabruary" class="form-control form-control" id="customerName" autocomplete="name" autofocus readonly/>
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">

                                    <input type="number"  name="target[]" value="{{ $targetdetail[1]['target'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Target"autocomplete="name" autofocus />
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">
                              
                                    <input type="number"  name="threshold[]" value="{{ $targetdetail[1]['threshold'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Threshold"autocomplete="name" autofocus />
                                 </div>





                                 <div class = "col-md-4"style="padding-top:15px;">
                                    <input type="text"  name="month[]" value="March" class="form-control form-control" id="customerName" autocomplete="name" autofocus readonly/>
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">

                                    <input type="number"  name="target[]" value="{{ $targetdetail[2]['target'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Target"autocomplete="name" autofocus />
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">
                              
                                    <input type="number"  name="threshold[]" value="{{ $targetdetail[2]['threshold'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Threshold"autocomplete="name" autofocus />
                                 </div>









                                 <div class = "col-md-4"style="padding-top:15px;">
                                    <input type="text"  name="month[]" value="April" class="form-control form-control" id="customerName" autocomplete="name" autofocus readonly/>
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">

                                    <input type="number"  name="target[]" value="{{ $targetdetail[3]['target'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Target"autocomplete="name" autofocus />
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">
                              
                                    <input type="number"  name="threshold[]" value="{{ $targetdetail[3]['threshold'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Threshold"autocomplete="name" autofocus />
                                 </div>










                                 <div class = "col-md-4"style="padding-top:15px;">
                                    <input type="text"  name="month[]" value="May" class="form-control form-control" id="customerName" autocomplete="name" autofocus readonly/>
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">

                                    <input type="number"  name="target[]" value="{{ $targetdetail[4]['target'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Target"autocomplete="name" autofocus />
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">
                              
                                    <input type="number"  name="threshold[]" value="{{ $targetdetail[4]['threshold'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Threshold"autocomplete="name" autofocus />
                                 </div>









                                 <div class = "col-md-4"style="padding-top:15px;">
                                    <input type="text"  name="month[]" value="june" class="form-control form-control" id="customerName" autocomplete="name" autofocus readonly/>
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">

                                    <input type="number"  name="target[]" value="{{ $targetdetail[5]['target'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Target"autocomplete="name" autofocus />
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">
                              
                                    <input type="number"  name="threshold[]" value="{{ $targetdetail[5]['threshold'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Threshold"autocomplete="name" autofocus />
                                 </div>












                                 <div class = "col-md-4"style="padding-top:15px;">
                                    <input type="text"  name="month[]" value="July" class="form-control form-control" id="customerName" autocomplete="name" autofocus readonly/>
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">

                                    <input type="number"  name="target[]" value="{{ $targetdetail[6]['target'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Target"autocomplete="name" autofocus />
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">
                              
                                    <input type="number"  name="threshold[]" value="{{ $targetdetail[6]['threshold'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Threshold"autocomplete="name" autofocus />
                                 </div>













                                 <div class = "col-md-4"style="padding-top:15px;">
                                    <input type="text"  name="month[]" value="August" class="form-control form-control" id="customerName" autocomplete="name" autofocus readonly/>
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">

                                    <input type="number"  name="target[]" value="{{ $targetdetail[7]['target'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Target"autocomplete="name" autofocus />
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">
                              
                                    <input type="number"  name="threshold[]" value="{{ $targetdetail[7]['threshold'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Threshold"autocomplete="name" autofocus />
                                 </div>







                                 <div class = "col-md-4"style="padding-top:15px;">
                                    <input type="text"  name="month[]" value="September" class="form-control form-control" id="customerName" autocomplete="name" autofocus readonly/>
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">

                                    <input type="number"  name="target[]" value="{{ $targetdetail[8]['target'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Target"autocomplete="name" autofocus />
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">
                              
                                    <input type="number"  name="threshold[]" value="{{ $targetdetail[8]['threshold'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Threshold"autocomplete="name" autofocus />
                                 </div>










                                 <div class = "col-md-4"style="padding-top:15px;">
                                    <input type="text"  name="month[]" value="October" class="form-control form-control" id="customerName" autocomplete="name" autofocus readonly/>
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">

                                    <input type="number"  name="target[]" value="{{ $targetdetail[9]['target'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Target"autocomplete="name" autofocus />
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">
                              
                                    <input type="number"  name="threshold[]" value="{{ $targetdetail[9]['threshold'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Threshold"autocomplete="name" autofocus />
                                 </div>








                                 <div class = "col-md-4"style="padding-top:15px;">
                                    <input type="text"  name="month[]" value="Novenber" class="form-control form-control" id="customerName" autocomplete="name" autofocus readonly/>
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">

                                    <input type="number"  name="target[]" value="{{ $targetdetail[10]['target'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Target"autocomplete="name" autofocus />
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">
                              
                                    <input type="number"  name="threshold[]" value="{{ $targetdetail[10]['threshold'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Threshold"autocomplete="name" autofocus />
                                 </div>




                                 <div class = "col-md-4"style="padding-top:15px;">
                                    <input type="text"  name="month[]" value="December" class="form-control form-control" id="customerName" autocomplete="name" autofocus readonly/>
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">

                                    <input type="number"  name="target[]" value="{{ $targetdetail[11]['target'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Target"autocomplete="name" autofocus />
                                 </div>

                                 <div class = "col-md-4"style="padding-top:15px;">
                              
                                    <input type="number"  name="threshold[]" value="{{ $targetdetail[11]['threshold'] ?? '' }}" class="form-control form-control" id="customerName" placeholder="Enter Threshold"autocomplete="name" autofocus />
                                 </div>

</br>

                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                          @isset($target)
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
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<script type="text/javascript">

      $("#useremails").select2({
            placeholder: "Select Email",
            allowClear: true
        });

        $("#year").select2({
            placeholder: "Select Year",
            allowClear: true
        });
</script>


@endsection