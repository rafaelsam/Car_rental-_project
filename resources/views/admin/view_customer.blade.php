<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Al Husnain Traders Limited</title>


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

    </head>


    <body>


                      <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">alhusnaintradersltd@gmail.com</a>
        <i class="bi bi-phone-fill phone-icon"></i> +255 658382549
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
               
          <li><a class="getstarted scrollto" href="{{route('customer')}}">Back</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->



  <div class="container">
      <div class="row">
      
      <div style="margin:auto;" class="card text-white  m-2" >
         <div class="card-header bg-success">Personal Details</div>
        <div class="card-body text-dark bg-light">                      
                             <table class="table-sm">
                               <tbody>
                                 <tr>
                                   <td><b>Full Name:</b></td>
                                   <td><small>{{$view_customer->full_name}}</small></td>
                                 </tr>
                                 <tr>
                                   <td><b>Country:</b></td>
                                   <td><small>{{$view_customer->country}}</small></td>
                                 </tr>
                                 <tr>
                                   <td><b>City:</b></td>
                                   <td><small>{{$view_customer->city}}</small></td>
                                 </tr>
                                 <tr>
                                   <td><b>Adress:</b></td>
                                   <td><small>{{$view_customer->address}}</small></td>
                                 </tr>
                                 <tr>
                                   <td><b>Phone Number:</b></td>
                                   <td><small>{{$view_customer->phone}}</small></td>
                                 </tr>
                               </tbody>
                             </table> 
                             </div>
                          </div>

                          <div class="title m-2 bg-success elavation-2"><h6 class="text-white m-2">Order Details - Vehicle(s)</h6></div>
       @foreach($customer_order as $product)
      <div class="card shadow m-2">
        <div class="d-flex">
          <div class="card-img" style="width:200px;">
          <img src="/coverImages/{{$product->cover_p}}" alt="Lights" style="width:180px; height:140px;">
          </div>
           <div class="card-body">      
             <div class="card-header d-flex">
               <h5 class="text-primary"><u><b>{{$product->MakeCompany}}</b></u></h5>
               <h5>,</h5>
               <h5 class="text-success" style="padding-left:10px;"><i><small>{{$product->carName}}</small></i></h5>

               <h6 class="text-dark" style="padding-left:30px"><b>Year</b></h6>
               <h5>|</h5>
               <p class="text-danger" style="padding-left:10px;"><i><small><b>{{$product->ProductionYear}}</b></small></i></p>

               <h6 class="text-dark" style="padding-left:30px"><b>Transmission</b></h6>
               <h5>|</h5>
               <p class="text-success" style="padding-left:10px;"><i><small>{{$product->transmission}}</small></i></p>

               <h6 class="text-dark" style="padding-left:30px"><b>Location</b></h6>
               <h5>|</h5>
               <p class="text-success" style="padding-left:10px;"><i><small>{{$product->office}}</small></i></p>

               <h4 class="text-warning" style="padding-left:20px;"><strong>{{$product->price}}</strong></h4>

              </div>

             <table class="table table-bordered">
                     <tbody>
                         <tr class="py-0 my-0">                                          
                             <td style="background:#e0ebeb; width:10%;" class="font-weight-bold py-0 my-0 "><b>Seats:</b></td>
                             <td class="py-0 my-0" >{{$product->seat}}</td>
                             <td style="background:#e0ebeb; width:10%" class="font-weight-bold py-0 my-0 "><b>Fuel:</b></td>
                             <td class="py-0 my-0"  >{{$product->fuel}}</td> 
                             <td style="background:#e0ebeb; width:10%" class="font-weight-bold py-0 my-0 "><b>Drive:</b></td>
                             <td  class="py-0 my-0" >{{$product->drive}}</td>
                             <td style="background:#e0ebeb; width:10%" class="font-weight-bold py-0 my-0 "><b>Steering:</b></td>
                             <td class="py-0 my-0"  >{{$product->steering}}</td>
                             <td style="background:#e0ebeb; width:10%" class="font-weight-bold py-0 my-0 "><b>Body Type:</b></td>
                             <td class="py-0 my-0" >{{$product->bodyType}}</td>
                         </tr>  
                        <tr>
                            <td style="background:#e0ebeb; width:10%" class="font-weight-bold py-0 my-0 "><b>Door:</b></td>
                             <td class="py-0 my-0" >{{$product->door}}</td>
                             <td  style="background:#e0ebeb; width:10%" class="font-weight-bold py-0 my-0 "><b>Color:</b></td>
                             <td  class="py-0 my-0" >{{$product->color}}</td>
                             <td style="background:#e0ebeb; width:10%" class="font-weight-bold py-0 my-0 "><b>Engine Size:</b></td>
                             <td class="py-0 my-0"  >{{$product->EngineCapacity}}</td>
                             <td style="background:#e0ebeb; width:10%" class="font-weight-bold py-0 my-0 "><b>Engine Type:</b></td>
                             <td class="py-0 my-0"  >{{$product->EngineType}}</td>
                             <td style="background:#e0ebeb; width:10%" class="font-weight-bold py-0 my-0 "><b>Mileage:</b></td>
                            <td class="py-0 my-0" >{{$product->mileage}}</td>  
                        </tr>                                                                                            
                     </tbody>      
                  </table>
                  
            </div>
        </div>
      </div>
      @endforeach

      </div>
  </div>


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <h3>Al Husnain Traders ltd</h3>
      <p>Your Trusted Automotive Brand.</p>
      <div class="social-links">
        <a href="https://twitter.com/HusnainTraders" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100078825040189" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/tradersltdalhusnain/" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
      <div class="copyright">
        &copy; Copyright <strong><span>Al Husnain Traders ltd</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/green-free-one-page-bootstrap-template/ -->
          Designed by <a href="https://www.linkedin.com/in/rafael-samwel-87b4981b1/">Rafael Js</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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
