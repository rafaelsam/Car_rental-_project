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
          <div class="responsive m-3">          
            @if(Session::has('messej'))
                   <div class="alert alert-success">
                   {{Session::get('messej')}}
                   </div>
                   @endif
              <form action="{{route('send_email', $customers->id)}}" method="post">
                @csrf
                  <div class="form-group">
                      <label for="">Greetings</label>
                      <input type="text" class="form-control" name="greeting" placeholder="---" >
                  </div>
                  <div class="form-group">
                      <label for="">Body</label>
                      <textarea class="form-control" name="body" id="" cols="80" rows="10" placeholder="---"></textarea>                   
                  </div>
                  <div class="form-group">
                      <label for="">Action text</label>
                      <input type="text" class="form-control" name="action_text" placeholder="---" >
                  </div>
                  <div class="form-group">
                      <label for="">Action url</label>
                      <input type="text" class="form-control" name="action_url" placeholder="---" >
                  </div>
                  <div class="form-group">
                      <label for="">End part</label>
                      <input type="text" class="form-control" name="end_part" placeholder="---" >
                  </div>               
                  <div class="form-group mt-3">
                      <button class=" btn btn-primary" type="submit">Send</button>
                  </div>
              </form>

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
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>



      </body>
</html>
