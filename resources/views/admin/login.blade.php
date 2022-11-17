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
               
          <li><a class="getstarted scrollto" href="{{route('index')}}">Back</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

   <!-- ======= Hero Section ======= -->
   <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/hl.JPG)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Al Husnain Traders Limited</span></h2>
              <p class="animate__animated animate__fadeInUp">TANZANIA</p>
              <p class="animate__animated animate__fadeInUp">Dar es Salaam: +255 658382549</p>
              <img src="assets/img/slide/t-flag.jpg" alt="National flag" class="animate__animated animate__fadeInUp img-fluid" style="height: 90px; width: 120px;">
             
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/hl2.JPG)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Al Husnain Motors Limited</span></h2>
              <p class="animate__animated animate__fadeInUp">KENYA</p>
              <p class="animate__animated animate__fadeInUp">Nairobi: +255 786-786440</p>
              <p class="animate__animated animate__fadeInUp">Mombasa: +254 786-786440</p>
              <p class="animate__animated animate__fadeInUp">Kisumu: +254 786-786440</p>
              <img src="assets/img/slide/k-flag.png" alt="National flag" class="animate__animated animate__fadeInUp img-fluid" style="height: 90px; width: 120px;">
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/hl3.JPG)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Al Husnain Motors FZE</span></h2>
              <p class="animate__animated animate__fadeInUp">UAE</p>
              <p class="animate__animated animate__fadeInUp">Dubai: +971 786-786440</p>
              <img src="assets/img/slide/d-flag.jpg" alt="National flag" class="animate__animated animate__fadeInUp img-fluid" style="height: 90px; width: 120px;">
            </div>
          </div>
        </div>

         <!-- Slide 4 -->
         <div class="carousel-item" style="background-image: url(assets/img/slide/hl4.JPG)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Al Husnain Motors Limited</span></h2>
              <p class="animate__animated animate__fadeInUp">PAKISTAN</p>
              <p class="animate__animated animate__fadeInUp">+255 658382549</p>
              <img src="assets/img/slide/p-flag.png" alt="National flag" class="animate__animated animate__fadeInUp img-fluid" style="height: 90px; width: 120px;">
            </div>
          </div>
        </div>

         <!-- Slide 5 -->
         <div class="carousel-item" style="background-image: url(assets/img/slide/hl5.JPG)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Al Husnain Traders Limited</span></h2>
              <p class="animate__animated animate__fadeInUp">JAPAN</p>
              <p class="animate__animated animate__fadeInUp">+8170 4436-7828</p>
              <img src="assets/img/slide/j-flag.png" alt="National flag" class="animate__animated animate__fadeInUp img-fluid" style="height: 90px; width: 120px;">
            </div>
          </div>
        </div>

         <!-- Slide 6 -->
         <div class="carousel-item" style="background-image: url(assets/img/slide/hl6.JPG)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Welcome to <span>AZAAN Trading Limited</span></h2>
              <p class="animate__animated animate__fadeInUp">UGANDA</p>
              <p class="animate__animated animate__fadeInUp">Kampala: +256 775-765533</p>
              <img src="assets/img/slide/u-flag.png" alt="National flag" class="animate__animated animate__fadeInUp img-fluid" style="height: 90px; width: 120px;">
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->
                 
<!-- 
                   <div class="container">
      <div class="row">
          <div class="responsive m-3">
            <a href="{{route('dashboard')}}">dashboard</a>
            @if(Session::has('messej'))
                   <div class="alert alert-success">
                   {{Session::get('messej')}}
                   </div>
                   @endif
              <form action="{{route('register')}}" method="post">
                @csrf
                  <div class="form-group">
                      <label for="">Email</label>
                      <input type="email" class="form-control" name="email" placeholder="---" >
                  </div>
                  <div class="form-group">
                      <label for="">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="---" >
                  </div>
                  <div class="form-group mt-3">
                      <button class=" btn btn-primary" type="submit">Register</button>
                  </div>
              </form>

          </div>
      </div>
  </div> -->

  <div class="container">
      <div class="row">
        <div class="card shadow m-3">
          <div class="card-header text-success mt-2">
            <h5><b><u>login below</u></b></h5>
          </div>
           <div class="form m-3">
               @if(Session::has('fail'))
                   <div class="alert alert-danger">
                   {{Session::get('fail')}}
                   </div>
                   @endif
               <form action="{{route('login')}}" method="post">
                  @csrf
                  <div class="form-group m-1">
                      <label class="text-success" for="">Username/Email</label>
                      <input type="text" class="form-control" name="email" placeholder="---" required>
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
