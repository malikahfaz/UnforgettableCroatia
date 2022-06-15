@extends('admin.layouts.master')
@section('content')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<div class="content-wrapper">
    
<div class="page-wrapper">


        
  <div class="container-fluid" >
  <div class="row mb-4">
            <div class="col-md-12">
            @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
                <h4>Holiday Type</h4>
            </div>
            
        </div>



    <div class="col-sm-12">
      <div class="card">

      

        <div class="table-responsive" >
        <div style="float:right; margin-right: 1%;">
                            <a href="{{route('holiday.create')}}" class="btn btn-primary" style="color: white;">
                            <i class="fas fa-plus-circle"></i>Add</a>
</br> 
                        </div>

          <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
          <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
          <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


          <table id="example" class="display" style="width:100%">
            <thead>


              <tr>
                 <th>Holiday Name</th>
                 <th>Brand Name</th>
                <th>Created_at</th>  
                <th>Action</th>  


              </tr>
            </thead>
            <tbody>
              @foreach($holiday_brands as $holidaybrand) 
             <tr>
              <td>{{$holidaybrand->name}} </td>
              <td>{{$holidaybrand->brand->name}} </td>
              <td>{{$holidaybrand->created_at}}</td>
                <td>
                  <div class="row">
                    <div class="col-6">
                    <a href="{{route('holiday.edit',$holidaybrand->id) }}" class="btn btn-primary" style="color: white;"><i
                                    class="fas fa-edit"></i></a>
                         </div>

                         <div class="col-6">  
                           <form method="POST" action="{{ route('holiday.delete',$holidaybrand->id) }}">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-danger show_confirm" data-toggle="tooltip" title='Delete'><i class="fas fa-trash"></i></button>
                        </form>
                         </div>

                        </div>
                   
                                  </td>
            </tr>
              @endforeach
          
              
            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>
</div>


<script>



  /* Custom filtering function which will search data in column four between two values */
  $.fn.dataTable.ext.search.push(
    function( settings, data, dataIndex ) {
      // var Row = document.getElementById("data_row");
      // var Cells = Row.getElementsByTagName("td");
      //   var age = Cells[0].innerText;
      //   console.log(age);
      //   var min = document.getElementById("min").value;
      //   var max = document.getElementById("max").value;// use data for the age column

      var min = parseInt( $('#min').val(), 10 );
      var max = parseInt( $('#max').val(), 10 );
      var age = parseFloat( data[3] ) || 0;

      if ( ( isNaN( min ) && isNaN( max ) ) ||
      ( isNaN( min ) && age <= max ) ||
      ( min <= age   && isNaN( max ) ) ||
      ( min <= age   && age <= max ) )
      {
        return true;
      }
      return false;
    }
  );

  $(document).ready(function() {
    var table = $('#example').DataTable();

      // Event listener to the two range filtering inputs to redraw on input
      $('#min, #max').keyup( function() {
        table.draw();
      } );
    } );

</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>


</div>


@endsection 