<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Al Husnain Traders Limited</title>

        <style>
          #py_v:hover, #py_of:hover, #py_bt:hover, #py_w:hover, #py_p:hover{
            opacity: 0.7;
            
          }
        </style>

<meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/alhusnai.PNG')}}" rel="apple-touch-icon">
  <link href="{{asset('assets/img/alhusnai.PNG')}}" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->

  <link href="{{ asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">

  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">


<link href=
'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
  
    <script src=
'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'>
    </script>
  
    <script src=
'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'>
    </script>
  

    </head>


    <body>


                      <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">alhusnaintradersltd@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +255 658382549
                     
            <a class="nav-link scrollto active text-success"><span><small>Welcome:</small></span> <small>{{Session::get('Custom_logId')}}</small></a>
           
      </div>
      <div class="social-links d-none d-md-block">
        <a href="https://twitter.com/HusnainTraders" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100078825040189" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/tradersltdalhusnain/" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="">Al Husnain Traders limited</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
               
          <!-- <li><a class="getstarted scrollto" href="{{route('index')}}">Back</a></li> -->
          @if(Session::has('Custom_logId'))
          <li><a class="getstarted scrollto" href="{{route('custom_logout')}}">Logout</a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  @if(Session::has('Custom_logId'))              
  <div class="container">
      <div class="row">
                      
                       <div class="alert alert-success">{{$order_success}}</div>
                       
          <div class="card">
              <div class="card-header mt-1 bg-success">
                  <h5 class="text-light">Pay Now</h5>                                
              </div>    
              <div class="card-body">
                  <div class="container">
                      <div class="row">
                      <div class="m-2">
                        <h6><b>Choose Consignee </b><small> (The *owner to be* of the vehicles)</small></h6>
                        <p><small>This infomation will be printed on Lading Bill(L/B)</small></p>
                        <div class="form">
                            <form action="">
                                <div class="form-group">
                                    <label class="text-info" for=""><small>Consignee Full Name</small></label>
                                    <input type="text" value="{{$data->full_name}}" class="form-control" name="">
                                </div>
                                <div class="form-group m-1">
                                    <label class="text-info" for=""><small>Consignee Country</small></label>
                                    <input type="text" class="form-control" value="{{$data->country}}" name="">
                                </div>
                                <div class="form-group m-1">
                                    <label class="text-info" for=""><small>Consignee City</small></label>
                                    <input type="text" class="form-control" value="{{$data->city}}" name="">
                                </div>
                                <div class="form-group m-1">
                                    <label class="text-info" for=""><small>Consignee Adress</small></label>
                                    <input type="text" class="form-control" value="{{$data->address}}" name="">
                                </div>
                                <div class="form-group m-1">
                                    <label class="text-info" for=""><small>Consignee phone Number</small></label>
                                    <input type="text" class="form-control" value="{{$data->phone}}" name="">
                                </div>
                               
                            </form>
                        </div>

                        <div class="mt-5">
                            <div class="title">
                                <h6><b>Schedule of Payment</b></h6>
                                <p><small><b>Choose your intended payment method.</b></small></p>
                            </div>
                           <div class="container">
                           <div class="m-2">
                                <div class="row">
                                  <div  id="py_v" class="col border m-1"><a href=""><img style="width:250px; height:100px;" src="/assets/img/py.png" alt=""></a></div>
                                  <div id="py_p" class="col border m-1"><a href=""><img style="width:250px; height:100px;" src="/assets/img/py3.png" alt=""></a></div>
                                </div>
                                <div class="row">
                                  <div id="py_w" class="col border m-1"><a href=""><img style="width:250px; height:100px;" src="/assets/img/py2.png" alt=""></a></div>
                                  <div id="py_bt" class="col border m-1"><a onClick="myFunction()" ><img style="width:250px; height:100px;" src="/assets/img/py4.png" alt=""></a></div>
                                </div>
                                <div class="row col-lg-3 border">
                                    <div class="m-1">
                                     <div id="py_of" class="card  bg-dark" style="width:250px; height:50px;">
                                     <a onClick="mypayment_office()"><h6 class="btn btn-dark mt-1"><b>Pay at Sales Office</b></h6></a>
                                    </div>
                                </div> 
                               </div>
                            </div>

                            <!--Pay at office-->
                            <div style="display:none;" id="py_5" class="m-3 mt-4 bg-light">
                              <div class="m-1 border-bottom">
                                <h6 class="text-secondary">Make contact with any office below for payment.</h6>
                              </div>
                              <div class="row m-2">                     
                                <div class="col">
                                 <h6 class="text-dark"><b>Uganda</b></h6>
                                 <p class="m-1 text-secondary"><span class="mx-2"><img  style="width:20px; height:20px;" src="/assets/img/wasapu.png" alt="wasapu"></span><a href="https://web.whatsapp.com/">+256 775-765533</a><span class="mx-2">-</span><a class="text-secondary" target="_black" href="https://goo.gl/maps/yKCwnsnQohY8UUbQA"><u>Kampala</u></a></p>
                                </div>
                                <div class="col">
                                 <h6 class="text-dark"><b>UAE</b></h6>
                                 <p class="m-1 text-secondary"><span class="mx-2"><img  style="width:20px; height:20px;" src="/assets/img/wasapu.png" alt="wasapu"></span><a href="https://web.whatsapp.com/">+971 786-786440</a><span class="mx-2">-</span><a class="text-secondary" target="_black" href="https://goo.gl/maps/TPzihWM7nGtzKSCk6"><u>Dubai</u></a></p>
                                </div>
                                <div class="col">
                                 <h6 class="text-dark"><b>Japan</b></h6>
                                 <p class="m-1 text-secondary"><span class="mx-2"><img  style="width:20px; height:20px;" src="/assets/img/wasapu.png" alt="wasapu"></span><a href="https://web.whatsapp.com/">+8170 4436-7828</a><span class="mx-2">-</span><a class="text-secondary" target="_black" href="https://goo.gl/maps/eHdQwenJ2pTBTFpp9"><u>Tokyo</u></a></p>
                                </div>
                              </div>   
                              <div class="row m-2">
                              <div class="col">
                                <h6 class="text-dark"><b>Kenya</b></h6>
                                <p class="m-1 text-secondary"><span class="mx-2"><img  style="width:20px; height:20px;" src="/assets/img/wasapu.png" alt="wasapu"></span><a href="https://web.whatsapp.com/">+254 786-786440</a><span class="mx-2">-</span><a class="text-secondary" target="_black" href="https://goo.gl/maps/TwAvyavGQFF3C1dFA"><u>Nairobi</u></a></p>
                                <p class="m-1 text-secondary"><span class="mx-2"><img  style="width:20px; height:20px;" src="/assets/img/wasapu.png" alt="wasapu"></span><a href="https://web.whatsapp.com/">+254 786-786440</a><span class="mx-2">-</span><a class="text-secondary" target="_black" href="https://goo.gl/maps/U3cAKtKM9JdQmPwQ8"><u>Mombasa</u></a></p>
                                <p class="m-1 text-secondary"><span class="mx-2"><img  style="width:20px; height:20px;" src="/assets/img/wasapu.png" alt="wasapu"></span><a href="https://web.whatsapp.com/">+254 786-786440</a><span class="mx-2">-</span><a class="text-secondary" target="_black" href="https://goo.gl/maps/CGwz5kTppatG8JDt5"><u>Kisumu</u></a></p>
                              </div>
                                <div class="col">
                                  <h6 class="text-dark"><b>Tanzania</b></h6>
                                  <p class="m-1 text-secondary"><span class="mx-2"><img  style="width:20px; height:20px;" src="/assets/img/wasapu.png" alt="wasapu"></span><a href="https://web.whatsapp.com/">+255 658382549</a><span class="mx-2">-</span><a class="text-secondary" target="_black" href="https://goo.gl/maps/ogs1etfQ183x7LLN8"><u>Dar es salaam</u></a></p>
                                  <p class="m-1 text-secondary"><span class="mx-2"><img  style="width:20px; height:20px;" src="/assets/img/wasapu.png" alt="wasapu"></span><a href="https://web.whatsapp.com/">+255 658382549</a><span class="mx-2">-</span><a class="text-secondary" target="_black" href="https://goo.gl/maps/1GHSede3ZvLj8aMH6"><u>Mwanza</u></a></p>                          
                                </div>
                                <div class="col">

                                </div>
                              </div>                                                   
                            </div>

                            <!--Bank Transfer-->
                            <div style="display:none;" id="py_4" class="m-3 bg-light">
                              <div class="form-group m-1">
                                <label class="text-info" for="">Place of Payment<span class="text-danger mx-1">*</span></label>
                                <input type="text" class="form-control" name="place_payment">
                              </div>   
                              <div class="form-group m-1">
                                <label class="text-info" for="">Date of Payment<span class="text-danger mx-1">*</span></label>
                                <input type="text" class="form-control" name="place_payment">
                              </div>
                              <div class="form-group m-1">
                                <label class="text-info" for="">Time of Payment<span class="text-danger mx-1">*</span></label>
                                <input type="text" class="form-control" name="place_payment">
                              </div>                         
                              <div class="form-group m-1">
                                <label class="text-info" for="">Remitance Bank Name<span class="text-danger mx-1">*</span></label>
                                <input type="text" class="form-control" name="place_payment">
                              </div>
                              <div class="form-group m-1">
                                <label class="text-info" for="">Branch Name<span class="text-danger mx-1">*</span></label>
                                <input type="text" class="form-control" name="place_payment">
                              </div>
                              <div class="form-group m-1">
                                <label class="text-info" for="">Account Number<span class="text-danger mx-1">*</span></label>
                                <input type="text" class="form-control" name="place_payment">
                              </div>
                            </div>
                            <script>
                              function myFunction() {
                               var x = document.getElementById("py_4");                             
                                if (x.style.display === "none") {
                                 x.style.display = "block";
                                 } else {
                                 x.style.display = "none";
                               }
                             }

                             function mypayment_office() {                        
                               var y = document.getElementById("py_5");                             
                               if(y.style.display === "none"){
                                y.style.display = "block";
                               }else{
                                y.style.display = "none";
                               }
                             }
                            </script>

                            <div class="mt-5 m-1 border-top">
                                <p><small>The selected vehicles will be reserved for <strong class="text-danger">48 hours</strong> after placing this order.<br>
                                (Excluding Saturday & Sunday)<br>
                                If you are going to make payment after lapse of 48hrs, please inform us your intention to pay and the schedule of payment by email.</small></p>
                            </div>
                           </div>
                        </div>

                        <div class="mt-5 ">
                            <div class="title border-bottom">
                                <h6><b>Selected vehicle</b></h6>
                            </div>
                            <div class="text-dark d-flex" style="">
                                <img style="width: 350px; height:120;" class="img-fluid border mt-1" src="/otherImages/{{$selected->cover_p}}"  alt="img">
                               <div class="m-1">
                                 <table class="table-sm ">
                                   <tbody>
                                     <tr>
                                       <td><b>Make Company:</b></td>
                                       <td><small>{{$selected->MakeCompany}}</small></td>
                                     </tr>
                                     <tr>
                                       <td><b>Car Name:</b></td>
                                       <td><small>{{$selected->carName}}</small></td>
                                     </tr>
                                     <tr>
                                       <td><b>Model:</b></td>
                                       <td><small>{{$selected->ProductionYear}}</small></td>
                                     </tr>
                                     <tr>
                                       <td><b>Price:</b></td>
                                       <td><small class="text-danger"><i><b>{{$selected->price}}</b></i></small></td>
                                     </tr>
                                     <tr>
                                       <td><b>Transmission:</b></td>
                                       <td><small>{{$selected->transmission}}</small></td>
                                     </tr>
                                     <tr>
                                       <td><b>Engine Capacity:</b></td>
                                       <td><small>{{$selected->EngineCapacity}}</small></td>
                                     </tr>
                                     <tr>
                                       <td><b>Fuel:</b></td>
                                       <td><small>{{$selected->fuel}}</small></td>
                                     </tr>
                                   </tbody>
                                 </table>                   
                             </div>
                           </div>
                           <div class="title mt-5 border-bottom">
                                <h6 class="text-secondary"><small>Ordered by:</small></h6>
                            </div>
                             <table class="table-sm">
                               <tbody>
                                 <tr>
                                   <td><b>Full Name:</b></td>
                                   <td><small>{{$data->full_name}}</small></td>
                                 </tr>
                                 <tr>
                                   <td><b>Country:</b></td>
                                   <td><small>{{$data->country}}</small></td>
                                 </tr>
                                 <tr>
                                   <td><b>City:</b></td>
                                   <td><small>{{$data->city}}</small></td>
                                 </tr>
                                 <tr>
                                   <td><b>Adress:</b></td>
                                   <td><small>{{$data->address}}</small></td>
                                 </tr>
                                 <tr>
                                   <td><b>Phone Number:</b></td>
                                   <td><small>{{$data->phone}}</small></td>
                                 </tr>
                               </tbody>
                             </table>
                        </div>
                      </div>
                      </div>
                      <a class="btn btn-md  text-light bg-primary" href="">Submit</a>
                  </div>
                  
              </div>
          </div>
      </div>
  </div>

 
  @else

  <div class="container bg-light">
    <div class="row">
    <div class="form m-3">
               @if(Session::has('fail'))
                   <div class="alert alert-danger">
                   {{Session::get('fail')}}
                   </div>
                   @endif
               <form action="{{route('custom_login')}}" method="post">
                  @csrf
                  <div class="form-group m-1">
                      <label class="text-success" for="">Username/Email</label>
                      <input type="email" class="form-control" name="email" placeholder="---" required>
                  </div>
                  <div class="form-group m-1">
                      <label class="text-success" for="">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="---" required>
                  </div>
                  <div class="form-group mt-3">
                      <button class="btn btn-primary" type="submit">Login</button>
                  </div>
              </form>
          </div>
    </div>
  </div>
  @endif


  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

      </body>
</html>

