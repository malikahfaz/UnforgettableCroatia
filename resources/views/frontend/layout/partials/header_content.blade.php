  <header id="fh5co-header-section">
    <style>
        html {
  overflow-x: hidden;
}
.btn-glyphicon {
    padding:8px;
    background:#ffffff;
    margin-right:4px;
}
.top-btn {
   
    border-radius:30px;
  
}

.top-btn2 {
   
   border-radius:25px;
   width:120px;
}
.sec-btn
{
    padding-left:700px;
}


        </style>
<!-- 
        <div class="row">
            <div class="col-4">
            </div>
            
         </div> -->
         <div class="container"style ="padding-top:28px;">
         <center>
          <button type="button" class="btn btn-outline-info top-btn">+1 (844) 879 7838</button>
          <button type="button" class="btn btn-outline-info top-btn">+44 208 004 2345</button>
          <button type="button" class="btn btn-outline-info top-btn">info@unforgettablecroatia.com</button>
          
    <button type="button" class="btn btn-outline-info dropdown-toggle top-btn" data-toggle="dropdown">
      My Account
    </button>
    <div class="dropdown-menu dropdown-menu-right">
      <a class="dropdown-item" href="#">Change Password</a>
      <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
      <!-- <a class="dropdown-item" href="#">Link 3</a> -->
    </div>

    <li class="nav-item">
    

                      
      </li>
</center>
</div>
<a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
<div class="row">
          

            <div class="col-2"style="padding-left:30px;">
            
        
            </div>
            <div class="col-2"style="padding-left:30px;">
          
        
         
            </div>
            <div class="col-8"style="padding-left:30px;">
            <a href="{{route('frontend.form')}}"type="button" style="padding-left:20px;" class="btn btn-info top-btn2">Form</a>
         
            <button type="button"style="padding-left:20px;" class="btn btn-info top-btn2">Report</button>
                  <button type="button" style="padding-left:20px;"class="btn btn-info top-btn2">RB Report</button>
            </div>


   
        </header>