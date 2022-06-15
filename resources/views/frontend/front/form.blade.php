
@extends('frontend.layout.master2')
@section('content2')
<style>
    .btn-default {
 
  font-size: 20px;
  color:white;
  letter-spacing: 3px;
  line-height: 32px;
  
  border-radius: 40px;
  background: transparent;
  transition: all 0.3s ease 0s;
}

.btn-default:hover {
  color: #FFF;
  background: white;
  border: 2px solid rgba(108, 89, 179, 0.75);
}












/* Styles for wrapping the search box */

.main {
    width: 50%;
    margin: 50px auto;
}

/* Bootstrap 4 text input with search icon */

.has-search .form-control {
    padding-left: 2.375rem;
}

.has-search .form-control-feedback {
    position: absolute;
    z-index: 2;
    display: block;
    width: 2.375rem;
    height: 2.375rem;
    line-height: 2.375rem;
    text-align: center;
    pointer-events: none;
    color: #aaa;
}

.input-len
{
    border-radius:40px;
    width:230px;
}
    </style>
<div class = "form" style="padding-top:57px;">

<center> <h4> PAYMENT PAGE </h4>

<img src="https://payments.unforgettabletravel.com/backend/uploads/branch/98960b50c0bbec8243b3653d3e40af69.png" class="img-fluid" style="width:40%"> 
</center>

</div>
<form class="forms-sample" method="POST" action="">
                            @csrf()
<div class="row"> 
    <!-- first div -->
    
            <div class="col-md-12">
                <div class="container">
                <button style="background-color:black;" type="button" class="btn btn-default">Booking Selection</button>
                <div class="card mb-4">
                    <div class="card-body">
                    <div class="row">
                            <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="form-group">
                            <label for="size"><b>CLIENT TYPE*</b></label>
                                    <p> <input type="checkbox"style="" id="checker" name = "checker"value="live">Client</p>
                                    <p> <input type="checkbox" id="checker2"name="checker2" value="sandbox">Agency</p>
                           
                            </div>
                           </div>         
                           
                           <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="form-group">
                            <label for="size"><b>PAYMENT OPTION*</b></label>
                                    <p> <input type="checkbox"style="" id="checker" name = "checker"value="live">Take Payment Now</p>
                                    <p> <input type="checkbox" id="checker2"name="checker2" value="sandbox">Send Payment Link</p>
                           
                            </div>
                           </div>  



                           <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="form-group">
                            <label for="size"><B>PAYMENT FOR*</B></label>
                                    <p> <input type="checkbox"style="" id="checker" name = "checker"value="live">Deposit</p>
                                    <p> <input type="checkbox" id="checker2"name="checker2" value="sandbox">Full Amount</p>
                                    <p> <input type="checkbox" id="checker2"name="checker2" value="sandbox">Remaining Balance</p>
                                    <p> <input type="checkbox" id="checker2"name="checker2" value="sandbox">Additional Amount</p>
                            </div>
                           </div>  
                           
                           <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="form-group">
                            <label for="size"><b>PAYMENT FOR*</b></label>
                                    <p> <input type="checkbox"style="" id="checker" name = "checker"value="live">AUD</p>
                                    <p> <input type="checkbox" id="checker2"name="checker2" value="sandbox">USD</p>
                                    <p> <input type="checkbox" id="checker2"name="checker2" value="sandbox">GBP</p>
                                    <p> <input type="checkbox" id="checker2"name="checker2" value="sandbox">EUR</p>
                            </div>
                           </div>  
                        

</div>
</div>
</div>
</div>
</div> 
 <!-- endfirstdiv -->








 

    
   


<!-- <second> -->
 <div class="col-md-12">
                <div class="container">
                <button style="background-color:black;" type="button" class="btn btn-default">PASSENGER INFORMATION</button>
                <div class="card mb-4">
                    <div class="card-body">
                    <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                
    <input type="text" class="form-control input-len" placeholder="BOOKING REFERENCE">
    <div class="input-group-append">
      <button  class="btn btn-secondary" type="button">
        <i class="fa fa-search"></i>Search
      </button>
    </div>
  </div>
                            </div>
                           </div>         
                           
                          <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
    <input type="text" class="form-control input-len" placeholder="BOOKING NUMBER">
    <div class="input-group-append">
      <button  class="btn btn-secondary" type="button">
        <i class="fa fa-search"></i>Search
      </button>
    </div>
  </div>
                            </div>
                           </div>  



                           <div class="col-md-12 col-lg-6 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label> <b>BOOKING DETAILS</b></lable>
    <input type="text" class="form-control input-len" placeholder="BOOKING DETAILS">
   
  </div>
                            </div>
                           </div>  



                           <div class="col-md-12 col-lg-6 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b> REASON FOR THE TRIP </b> </lable>
    <input type="text" class="form-control input-len" placeholder="REASON FOR THE TRIP">
  </div>
                            </div>
                           </div>  


                           <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b> LEAD PASSENGER FIRST NAME </b> </lable>
    <input type="text" class="form-control input-len" placeholder="LEAD FIRST PASSENGER NAME">
  </div>
                            </div>
                           </div>  


                           <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b> LEAD PASSENGER MIDDLE NAME </b> </lable>
    <input type="text" class="form-control input-len" placeholder=" LEAD PASSENGER MIDDLE NAME ">
  </div>
                            </div>
                           </div>  


                           <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b> LEAD PASSENGER LAST NAME </b> </lable>
    <input type="text" class="form-control input-len" placeholder=" LEAD PASSENGER MIDDLE NAME ">
  </div>
                            </div>
                           </div>  


                           <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b> DATE OF BIRTH </b> </lable>
    <input type="date" class="form-control input-len" placeholder=" LEAD PASSENGER MIDDLE NAME ">
  </div>
                            </div>
                           </div>  



                           <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b> EMAIL ADDRESS</b> </lable>
    <input type="text" class="form-control input-len" placeholder=" EMAIL ADDRESS">
  </div>
                            </div>
                           </div>  



                           <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b> CONTACT NO</b> </lable>
    <input type="text" class="form-control input-len" placeholder="CONTACT">
  </div>
                            </div>
                           </div>  


                           <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b>BEDDING PREFERENCE</b> </lable>
    <input type="text" class="form-control input-len" placeholder="BEDDING PREFERENCE">
  </div>
                            </div>
                           </div>  



                           <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b>DIETARY PREFERENCES</b> </lable>
    <input type="text" class="form-control input-len" placeholder="DIETARY PREFERENCESS">
  </div>
                            </div>
                           </div>  


                           
                           <div class="col-md-3 col-lg-3 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b>NATIONALITY ON PASSPORT</b> </lable>
    <input type="text" class="form-control input-len" placeholder="NATIONALITY ON PASSPORT">
  </div>
                            </div>
                           </div>  


                           <div class="col-md-3 col-lg-3 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b>MEDICAL REQUIREMENT</b> </lable>
    <input type="text" class="form-control input-len" placeholder="MEDICAL REQUIREMENT">
  </div>
                            </div>
                           </div>  


                           <div class="col-md-3 col-lg-6 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b>HAVE YOU BEEN FULLY VACCINATED? TO COVID-19 VACCINATION STATUS</b> </lable>
    <input type="text" class="form-control input-len" style="width:432px;" placeholder="HAVE YOU BEEN FULLY VACCINATED? TO COVID-19 VACCINATION STATUS">
  </div>
                            </div>
                           </div>  


                          

</div>
</div>
</div>
</div>
<!-- endsecond -->


<table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>3
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@example.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@example.com</td>
      </tr>
    </tbody>
  </table>



 
</form>
      @endsection