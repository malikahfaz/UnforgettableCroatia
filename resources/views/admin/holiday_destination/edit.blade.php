@extends('admin.layouts.master')
@section('content')


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>


<div class="content-wrapper">

<div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                    @isset($holiday_d)
                    <h3> Update Holiday Destination </h3>
                    @else
                    <h3> Create New Holiday Destination </h3>
                    @endisset
                   
                  
                        <form class="forms-sample" method="POST" action="{{ isset($holiday_d) ? route('holiday_d.update',$holiday_d->id) : route('holiday_d.create') }}" enctype="multipart/form-data">
                            @csrf()
                            {!! Form::open() !!}

                            @isset($holiday_d)
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



                            <!-- <div class="col-md-4 form-group mb-3">
                                    <label for="size">Select Destination</label>
                                    <select class="form-control" id="currency" name="destination_type"required>
                                      
                                            <option value="EU">EU</option>
                                            <option value="NON EU">NON EU</option>
                                            
                                          
                                       
                                    </select>
                                   
                                </div> -->

                                <div class="col-md-6 form-group mb-3">
                                    <label for="size">Select Region</label>
                                     {!! Form::select('id_region',[''=>'Select Region']+$regions,null,['class'=>'form-control']) !!}
                                   
                                </div>







                                <div class="col-md-6 form-group mb-3">
                                    <label for="customerContact">Select Country</label>
                                    {!! Form::select('id_country',[''=>'Select Country'],null,['class'=>'form-control']) !!}
                                  
                                </div>

            

                                <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">
                          @isset($holiday_d)
                              <i class="fas fa-arrow-circle-up"></i>
                              <span>Update</span>
                          @else
                              <i class="fas fa-plus-circle"></i>
                              <span>Create</span>
                          @endisset
                      </button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- end of main-content -->

        <script type="text/javascript">
  $("select[name='id_region']").change(function(){
      var id_region = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "<?php echo route('select-ajax') ?>",
          method: 'POST',
          data: {id_region:id_region, _token:token},
          success: function(data) {
            $("select[name='id_country'").html('');
            $("select[name='id_country'").html(data.options);
          }
      });
  });
</script>

</div>

@endsection