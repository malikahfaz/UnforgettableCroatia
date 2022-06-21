
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
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
                                    <p> <input type="checkbox"style="" id="client" name = "agency" value="live">Client</p>
                                    <p> <input type="checkbox" id="agency"name="agency" value="sandbox">Agency</p>
                           
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
                  <div id = "passenger_info" style="display:none">
                  <button style="background-color:black;" type="button" class="btn btn-default">PASSENGER INFORMATION</button>
                 
                             </div>

                             <div id = "booking_info"style="display:none">
                             <button style="background-color:black;" type="button" class="btn btn-default">BOOKING INFORMATION</button>
                             </div>

               <div id="cons">
                <button style="background-color:black;" type="button" class="btn btn-default">PASSENGER INFORMATION</button>
</div>
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
    <input type="text" class="form-control input-len" style="width:360px;" placeholder="BOOKING DETAILS">
   
  </div>
                            </div>
                           </div>  



                           <div class="col-md-12 col-lg-6 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b> REASON FOR THE TRIP </b> </lable>
    <input type="text" class="form-control input-len" style="width:360px;" placeholder="REASON FOR THE TRIP">
  </div>
                            </div>
                           </div>  





                          

 <div id="agency_div" class="input-group control-group second_div form-group" style="display:none">

 <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label> <b>AGENCY NAME</b></lable>
    <input type="text" class="form-control input-len"name="agency" placeholder="AGENCY NAME">
   
  </div>
                            </div>
                           </div>  



                           <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label> <b>CONTACT FIRST NAME</b></lable>
    <input type="text" class="form-control input-len"name="contact_first_name" placeholder="CONTACT FIRST NAME">
   
  </div>
                            </div>
                           </div>


                           <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label> <b>CONTACT LAST NAME</b></lable>
    <input type="text" class="form-control input-len"name="contact_last_name" placeholder="CONTACT LAST NAME">
   
  </div>
                            </div>
                           </div>



                           <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label> <b>AGENCY EMAIL ADDRESS</b></lable>
    <input type="text" class="form-control input-len"name="agency_email" placeholder="AGENCY EMAIL ADDRESS">
   
  </div>
                            </div>
                           </div>





                           
                           <div class="col-md-6 col-lg-3 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label> <b>AGENCY CONTACT NUMBER</b></lable>
    <input type="text" class="form-control input-len"name="agency_contact_number" placeholder="AGENCY CONTACT NUMBER">
   
  </div>
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


                           <div class="col-md-6 col-lg-12 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b>   * PLEASE COMPLETE FULL NAMES OF EACH PASSENGER, INCLUDING THE LEAD PASSENGER, ACCORDING TO THEIR PASSPORT.</b> </lable>
  
  </div>
                            </div>
                           </div>  




                           <div class="col-md-3 col-lg-5 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b>  NUMBER OF PASSENGERS TRAVELLING UNDER THIS BOOKING REFERENCE *</b> </lable>
  
  </div>
                            </div>
                           </div>  



                           
                           <div class="col-md-3 col-lg-3 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                              
                            <select class="form-control input-len" id="passenger_limit" onchange="showDiv('passenger_extra', this)"name="passenger_limit"required>
                                      
                                      <option selected disabled> Select  </option>
                                      @for($i=1;$i<=50;$i++)
                                              <option value="{{$i}}">{{$i}}</option>
                                      
                                     @endfor
                                         
                                      </select>
  
                              </div>
                            </div>
                           </div>  



                           
                           <div class="col-md-3 col-lg-3 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b> DO YOU WANT TO ADD ALL PAX NOW?</b> </lable>
  
  </div>
                            </div>
                           </div>  


                                    <div class="col-md-3 col-lg-1 col-sm-12">
                            <div class="form-group">
                            <div class="input-group"style="padding-left:13px;">
                            
                           <p> <input type="checkbox"style="" id="pax_yes" name = "pax_yes">Yes</p>
                                    <p> <input type="checkbox"id="pax_no"name="pax_no">No</p>
  
  </div>
                            </div>
                           </div>  


                           <script>
  // $(document).ready(function(){
  // $("#passenger_limit").change(function(){
  //   if($(this).is(':checked') )
  //   {
  //       $("#checker2").prop("checked", false);
  //       $("#fields1 ").show();
  //       $("#fields2 ").hide();
  //   }
  //   else 
  //   {
  //      $("#fields1 ").hide();
  //   }
  // });


//   $("#passenger_limit").click(function() {
//     var field = $(this).val();
//     alert(field);
// });
// function showDiv() 
// {
//   var field = document.getElementById("passenger_limit").value;
//   $("#passenger_extra").show();
 
// // alert( field );
// // var elements = document.getElementById("passenger_extra");
// // console.log(elements);


// }

function showDiv(divId, element)
{
    var field = document.getElementById("passenger_limit").value;
    console.log(field);
    document.getElementById(divId).style.display = element.value == 1 ? 'block' : 'none';
}


// $("#passenger_limit").onchange(function(){
   
//       alert('sssssssssssss');
//         // $("#passenger_extra").show();
  

//   });

  </script>











<div id="passenger_extra" class="input-group control-group first_div form-group" style="display:none">
  <div class="row">

                           <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b>PASSENGER #  FULL NAME</b> </lable>
    <input type="text" class="form-control input-len" name="passenger_name[]" placeholder=" PASSENGER FULL NAME ">
  </div>
                            </div>
                           </div>  

 



                           <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b> EMAIL ADDRESS</b> </lable>
    <input type="text" class="form-control input-len"name="email[]" placeholder=" EMAIL ADDRESS">
  </div>
                            </div>
                           </div>  



                           <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b> CONTACT NO</b> </lable>
    <input type="text" class="form-control input-len"name="contact[]" placeholder="CONTACT">
  </div>
                            </div>
                           </div>  



                           
                           <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b> DATE OF BIRTH </b> </lable>
    <input type="date" class="form-control input-len"name="date[]" placeholder=" LEAD PASSENGER MIDDLE NAME ">
  </div>
                            </div>
                           </div> 


                           <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b>BEDDING PREFERENCE</b> </lable>
    <input type="text" class="form-control input-len"name="bedding[]" placeholder="BEDDING PREFERENCE">
  </div>
                            </div>
                           </div>  



                           <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b>DIETARY PREFERENCES</b> </lable>
    <input type="text" class="form-control input-len"name="dietary[]" placeholder="DIETARY PREFERENCESS">
  </div>
                            </div>
                           </div>  


                           
                           <div class="col-md-3 col-lg-4 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b>NATIONALITY ON PASSPORT</b> </lable>
    <input type="text" class="form-control input-len"name="nationality[]" placeholder="NATIONALITY ON PASSPORT">
  </div>
                            </div>
                           </div>  


                           <div class="col-md-3 col-lg-4 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b>MEDICAL REQUIREMENT</b> </lable>
    <input type="text" class="form-control input-len"name="medical[]" placeholder="MEDICAL REQUIREMENT">
  </div>
                            </div>
                           </div>  


                           <div class="col-md-3 col-lg-4 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b>HAVE YOU BEEN FULLY VACCINATED?</b> </lable>
    <input type="text" class="form-control input-len" name="vaccine[]" placeholder="HAVE YOU BEEN FULLY VACCINATED? TO COVID-19 VACCINATION STATUS">
  </div>
                            </div>
                           </div> 

                        
      <!-- <button  class="btn btn-secondary btn-add-more" type="button"><i class="glyphicon glyphicon-plus"></i>+</button> -->
    
      <div class="input-group-btn">
      <button class="btn btn-success btn-add-more" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
    </div>

</div>
<!-- endpassengerextra -->













 


   

 
  <div class="clone hide " id="cloner"style="display: none;">
  <div class="control-group input-group form-group" style="margin-top:10px">

   <div class="row">

                           <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b>PASSENGER #  FULL NAME</b> </lable>
    <input type="text" class="form-control input-len" name="passenger_name[]" placeholder=" PASSENGER FULL NAME ">
  </div>
                            </div>
                           </div>  

 



                           <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b> EMAIL ADDRESS</b> </lable>
    <input type="text" class="form-control input-len"name="email[]" placeholder=" EMAIL ADDRESS">
  </div>
                            </div>
                           </div>  



                           <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b> CONTACT NO</b> </lable>
    <input type="text" class="form-control input-len"name="contact[]" placeholder="CONTACT">
  </div>
                            </div>
                           </div>  



                           
                           <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b> DATE OF BIRTH </b> </lable>
    <input type="date" class="form-control input-len"name="date[]" placeholder=" LEAD PASSENGER MIDDLE NAME ">
  </div>
                            </div>
                           </div> 


                           <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b>BEDDING PREFERENCE</b> </lable>
    <input type="text" class="form-control input-len"name="bedding[]" placeholder="BEDDING PREFERENCE">
  </div>
                            </div>
                           </div>  



                           <div class="col-md-6 col-lg-4 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b>DIETARY PREFERENCES</b> </lable>
    <input type="text" class="form-control input-len"name="dietary[]" placeholder="DIETARY PREFERENCESS">
  </div>
                            </div>
                           </div>  


                           
                           <div class="col-md-3 col-lg-4 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b>NATIONALITY ON PASSPORT</b> </lable>
    <input type="text" class="form-control input-len"name="nationality[]" placeholder="NATIONALITY ON PASSPORT">
  </div>
                            </div>
                           </div>  


                           <div class="col-md-3 col-lg-4 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b>MEDICAL REQUIREMENT</b> </lable>
    <input type="text" class="form-control input-len"name="medical[]" placeholder="MEDICAL REQUIREMENT">
  </div>
                            </div>
                           </div>  


                           <div class="col-md-3 col-lg-4 col-sm-12">
                            <div class="form-group">
                            <div class="input-group">
                                <label><b>HAVE YOU BEEN FULLY VACCINATED?</b> </lable>
    <input type="text" class="form-control input-len" name="vaccine[]" placeholder="HAVE YOU BEEN FULLY VACCINATED? TO COVID-19 VACCINATION STATUS">
  </div>
                            </div>
                           </div> 

                        
                           <button class="btn btn-danger btn-remove" type="button"><i class="glyphicon glyphicon-remove"></i> Remove</button>
   
  </div>

       
</div>
</div>

<script>
$(document).ready(function(){


  $("#client").change(function(){
    if($(this).is(':checked') )
    {
        $("#agency").prop("checked", false);
        $("#agency_div").hide();
        $("#passenger_info").toggle();
        $("#cons").hide();
        $("#booking_info").hide();
    }
    else 
    {
      //  $("#fields1 ").hide();
        alert('hi');
    }
  });


  $("#agency").change(function(){
    if($(this).is(':checked') )
    {
        $("#client").prop("checked", false);
        $("#booking_info").toggle();
        $("#cons").hide();
        $("#agency_div").show();
        $("#passenger_info").hide();
        // $("#fields2 ").hide();
    }
    else 
    {
      //  $("#fields1 ").hide();
        alert('hi');
    }
  });














  $("#pax_yes").change(function(){
    if($(this).is(':checked') )
    {
        $("#pax_no").prop("checked", false);
        $("#passenger_extra").show();
        $(".control-group").show();
        // $("#fields2 ").hide();
    }
    else 
    {
      //  $("#fields1 ").hide();
        alert('hi');
    }
  });




  $("#pax_no").change(function(){
    if($(this).is(':checked') )
    {
        $("#pax_yes").prop("checked", false);
        $("#passenger_extra").hide();
        $(".control-group").hide();
        
        // $("#fields2 ").hide();
    }
    else 
    {
      //  $("#fields1 ").hide();
        alert('hi');
    }
  });




});
</script>


<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-add-more").click(function(){
          var html = $(".clone").html();
          $(".first_div").after(html);
      });
      $("body").on("click",".btn-remove",function(){
          $(this).parents(".control-group").remove();
      });
    });
</script>




 
</form>
      @endsection