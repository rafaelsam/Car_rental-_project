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
                     @if(Session::has('order_failed'))
                       <div class="alert alert-danger">{{Session::get('order_failed')}}</div>
                       @endif
                       @if(Session::has('check_order'))
                       <div class="alert alert-danger">{{Session::get('check_order')}}</div>
                       @endif
          <div class="card mb-5">
              <div class="card-header mt-1 bg-success">
                  <h5 class="text-light">Order Now</h5>
                  <p class="text-light"><small>It is the right time</small></p>              
              </div>    
              <div class="card-body">
                  <div class="container">
                      <div class="row">
                      
                      <div class="m-2">
                        <h6><b>Choose Consignee </b><small> (The *owner to be* of the vehicles)</small></h6>
                        <p><small>This infomation will be printed on Lading Bill(L/B)</small></p>
                    


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
                                <h6 class="text-secondary"><small>It is going to be orderd by:</small></h6>
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
                      <a style="background:#ff751a; float:right;" class="btn btn-md  text-light" href="{{route('make_order', $selected->id)}}">Place order</a>
                      </div>
                      
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

