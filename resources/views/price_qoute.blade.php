
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
        @if(Session::has('Custom_logId'))
            <a class="nav-link scrollto active text-success"><span><small><b>Welcome</b>:</small></span> <small>{{Session::get('Custom_logId')}}</small></a>
            @endif
      </div>
      <div class="social-links d-none d-md-block">
      <a href="https://twitter.com/HusnainTraders" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com/profile.php?id=100078825040189" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/tradersltdalhusnain/" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </section>

  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="">Al Husnain Traders limited</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul> 
          <li><a class="getstarted scrollto" href="{{route('index')}}">Back</a></li>
          @if(Session::has('Custom_logId'))
          <li><a class="getstarted scrollto" href="{{route('custom_logout')}}">Logout</a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  <div class="container">
      <div class="row">

                     @if(Session::has('quote_success'))
                       <div class="alert alert-success">{{Session::get('quote_success')}}</div>
                       @endif
          <!-- The Modal -->
<div class="" id="">
  <div class="">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-success">
        <h4 class="modal-title text-light">Inquiry (Free qoute)</h4>        
      </div>

  
      <div class="container">
                  <!-- Modal body -->
      <div class="modal-body justify-text-center">
        <div class="header"> <h6 style="padding-left:35%;" class="text-success"><b>Thank you! Your inquiry was submitted</b></h6></div>
        <div class="mt-1"><p style="padding-left:43%;" class=""><small><i style="font-size: 25px; color:#ff9033;" class="bi bi-forward-fill"></i></small><span><i style="font-size: 35px; color:#ff9933;" class="bi bi-envelope-fill"></i></span></p></div>
        <div class="m-3 text-secondary"><p style="padding-left:13%;"><small>You will receive an email shortly with the price quote.
         If you have more questions, please reply to the email so we can assist you</small></p></div>
       </div>
       <div class="m-3 text-success border-top"><h5 clas s="mt-2" style="padding-left:35%;"><b>LIMITED TIME OFFER</b></h5>
       <h5 class="text-dark" style="padding-left:40%;"><b>{{$products->price}}</b></h5>
        <p class="text-dark" style="padding-left:35%;" >Order this vehicle Within 1 Hour.</p>
        <p class="text-dark" style="padding-left:40%;"><small>Time left:<span><b>00:00</b></span></small></p>
      </div>
        <div class="text-dark" style="padding-left:40%;">
         <img style="width: 120px; height:100;" class="img-fluid border mt-1" src="/otherImages/{{$products->cover_p}}"  alt="">
         <div class="d-flex m-1">
         <h6 class="text-primary"><u><b>{{$products->MakeCompany}}</b></u></h6>
          <h6 style="padding-left:10px;"><i><small>{{$products->carName}}</small></i></h6>
          <p style="padding-left:10px;" class="text-secondary"><b>{{$products->ProductionYear}}</b></p>
         </div>
        </div>
        <div class="text-danger m-3"><p style="padding-left:20%;"><small><b>Note: Payment must be made within 72 hours after order this vehicle (excluding Saturday and Sunday)</b></small></p></div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       <a href="{{route('order_now', $products->id)}}"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Order now</button></a>
        <form action="">
        <a href="{{route('send_price_quote', $products->id)}}"><button type="button" class="btn btn-primary" data-bs-dismiss="modal">Price quote</button></a>
        </form>
      </div>

    </div>
  </div>
</div>

      </div>
  </div>

<div class="container">
  <div class="row">
  <div class="card shadow mt-5">  
         <div class="card-header">
          <h5 class="text-info"><b>Stock</b></h5>
        </div> 
         <div class="row m-1">
         @foreach($all as $product)
          <div class="col-md-3">
           <div class="thumbnail border m-2">
             <a href="{{route('view_car', $product->id)}}">
              <div class="card-header d-flex">
              <h5 class="text-primary"><u><b>{{$product->MakeCompany}}</b></u></h5>
              <h5>,</h5>
              <h5 style="padding-left:10px;"><i><small>{{$product->carName}}</small></i></h5>
              </div>
              <img src="/coverImages/{{$product->cover_p}}" alt="Lights" style="width:100%">
              <div class="caption d-flex justify-content-center m-1">
              <p class="text-secondary"><b>{{$product->ProductionYear}}</b></p>
              <p class="text-warning" style="padding-left:120px;"><b>{{$product->price}}</b></p>
              </div>
              </a>
             </div>
           </div>
          @endforeach
         </div>
       </div>
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
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>



      </body>
</html>
