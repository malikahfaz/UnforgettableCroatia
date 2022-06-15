@extends('admin.layouts.master')
@section('content')

<link rel="stylesheet" href="/admin-assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/admin-assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/admin-assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/admin-assets/dist/css/adminlte.min.css">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<div class="content-wrapper">

<!-- @if ( Session::has('message') )
         
         <script> M.toast({html: '{{ Session::get('message') }}'}) </script>
                         
        @endif -->
 <!-- Main content -->
 <section class="content">
 <div class="main-content">
        <div class="row mb-4">
            <div class="col-md-12">
            @if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
                <h4>Brands</h4>
            </div>
        </div>
        <!-- end of row-->
        <div class="row mb-4">
            <div class="col-md-12 mb-4">
                <div class="card text-left">
                    <div class="card-body">
                        <h4 class="card-title mb-3" style="display: inline;">Brand-List</h4>
                       
                        <div style="float:right; margin-right: 1%;">
                            <a href="{{route('brand.create')}}" class="btn btn-primary" style="color: white;">
                            <i class="fas fa-plus-circle"></i>Add</a>
                            <br> <br>
                        </div>
                     

                        <div class="table-responsive">
                            <table class="display table table-striped table-bordered" id="zero_configuration_table" style="width:100%" id="tableId">
                                <thead>
                                <tr>
                               
                                    <th>Name</th>
                                    <th>Logo</th>
                                    <th>Address</th>
                                    <!-- <th>Phone</th>
                                    <th>Color</th>
                                    <th>Prefix</th>
                                    <th>From Name</th> -->
                                    <th>Email</th>
                                    <!-- <th>Booking CC Email</th>
                                    <th>Payment CC Email</th>
                                    <th>Term Link</th>
                                    <th>Privacy Link</th>
                                    <th>Term USA Link</th>
                                    <th>Privacy USA Link</th> -->
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                               @foreach($brands as $brand)

                                    <tr>

                                    <td>{{$brand->name}}</td>
                                    <td>
                                    <div style="width:80px; height:80px; font-size: 0;">
            <img class="img-fluid"src="{{ asset('storage/images/brandlogo/'.$brand->logo) }}" alt="image not found" />
                </div>

                                    </td>
                                    <td>{{$brand->address}}</td>
                                    <!-- <td>{{$brand->phone}}</td>
                                    <td>
                                    <div style="background-color: {{$brand->color}}; width:25px; height: 25px; font-size: 0;"> </div>
                                    </td>
                                    <td>{{$brand->prefix}}</td>
                                    <td>{{$brand->from_name}}</td> -->
                                    <td>{{$brand->email}}</td>
                                    <!-- <td>{{$brand->booking_cc_email}}</td>
                                    <td>{{$brand->payment_cc_email}}</td>
                                    <td>{{$brand->term_link}}</td>
                                    <td>{{$brand->privacy_link}}</td>
                                    <td>{{$brand->term_usa_link}}</td>
                                    <td>{{$brand->privacy_usa_link}}</td> -->
                                    <td>
                                   
                                    {{$brand->created_at}}
                                    </td>
                                    <td> 
                                      <div class="row">
                                        <div class="col-6">
                                        <a href="{{ route('brand.edit',$brand->id) }}" class="btn btn-primary" style="color: white;"><i
                                    class="fas fa-edit"></i></a>
                                        </div>


                                        <div class="col-6">
                                               
                                  
                               <form method="POST" action="{{ route('brand.delete',$brand->id) }}">
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
                                <tfoot>
                                <tr>
                               
                                <th>Name</th>
                                    <th>Logo</th>
                                    <th>Address</th>
                                    <!-- <th>Phone</th>
                                    <th>Color</th>
                                    <th>Prefix</th>
                                    <th>From Name</th> -->
                                    <th>Email</th>
                                    <!-- <th>Booking CC Email</th>
                                    <th>Payment CC Email</th>
                                    <th>Term Link</th>
                                    <th>Privacy Link</th>
                                    <th>Term USA Link</th>
                                    <th>Privacy USA Link</th> -->
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>




  </div>




<!-- jQuery -->
<script src="/admin-assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="/admin-assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin-assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/admin-assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/admin-assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin-assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/admin-assets/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
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



@endsection








