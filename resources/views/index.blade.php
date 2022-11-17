<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
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

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="">Al Husnain Traders limited</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Services</a></li> 
          <li><a class="nav-link scrollto" href="#about">About us</a></li>
          <li><a class="nav-link scrollto" href="#services">Why us</a></li>
          <li><a class="nav-link scrollto" href="#team">Our Team</a></li>
          <li><a class="nav-link scrollto" href="#why-us">How to buy</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
         
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          @if(Session::has('Custom_logId'))
          <li><a style="display:none;" class="getstarted scrollto" href="{{route('login_register')}}">Staff</a></li>
          @else
          <li><a class="getstarted scrollto" href="{{route('login_register')}}">Staff</a></li>
          @endif
          
          @if(Session::has('Custom_logId'))
          <li><a style="display:none;" class="getstarted scrollto" href="{{route('custom_login_register')}}">Login</a></li>
          @else
          <li><a class="getstarted scrollto" href="{{route('custom_login_register')}}">Login</a></li>
          @endif
          
          @if(Session::has('Custom_logId'))
          <li><a class="getstarted scrollto" href="{{route('customer_profile')}}"><i style="font-size:17px;" class="bi bi-person-fill mx-1"></i>profile</a></li>
          <li><a class="getstarted scrollto" href="{{route('custom_logout')}}">Logout</a></li>
          @endif
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
              <p class="animate__animated animate__fadeInUp">Nairobi: +254 786-786440</p>
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
 <!-- ======= Our Clients Section ======= -->
 <section id="clients" class="clients">
  <div class="container ">

                  <div class="container">
                     <div class="row">
                     <form action="{{route('user_search')}}" method="post">  
                       @csrf                   
                     <div class="d-flex">
                     <input style=" border-right: none;" class="form-control " type="text" name="all_search" id="" placeholder="chasis no, car name, model, etc">
                     <button style=" border-left: none;" type="submit" class="btn btn-sm bg-primary text-light"><i class="bi bi-search m-2"></i></button>
                     </div>
                     </form>
                     </div>
                   </div>

  @include('includes.search')

    <div class="section-title">
      <h2>Make Companies</h2>
      <p>Al Husnain company has huge stock of vehicles from different make companies as show below:</p>
    </div>

    <div class="clients-slider swiper">
      <div class="swiper-wrapper align-items-center">
        <div class="swiper-slide "><img src="assets/img/clients/toyota-logo.jpg" class="img-fluid" alt=""><a class="text-light btn btn-sm bg-danger" style="margin-left:40px;" href="{{route('make_view', 'Toyota')}}"><b>{{$toyota->count()}}</b></a></div>
        <div class="swiper-slide"><img src="assets/img/clients/nissan_logo.jpg" class="img-fluid" alt=""><a class="text-light btn btn-sm bg-danger mt-3" style="margin-left:40px;" href="{{route('make_view', 'Nissan')}}"><b>{{$nissan->count()}}</b></a></div>
        <div class="swiper-slide"><img src="assets/img/clients/mitsubishi.png" class="img-fluid" alt=""><a class="text-light btn btn-sm bg-danger mt-3" style="margin-left:40px;" href="{{route('make_view', 'Mitsubishi')}}"><b>{{$mitsubishi->count()}}</b></a></div>
        <div class="swiper-slide"><img src="assets/img/clients/mazda.png" class="img-fluid" alt=""><a class="text-light btn btn-sm bg-danger" style="margin-left:40px;" href="{{route('make_view', 'Mazda')}}"><b>{{$mazda->count()}}</b></a></div>
        <div class="swiper-slide"><img src="assets/img/clients/subaru.png" class="img-fluid" alt=""><a class="text-light btn btn-sm bg-danger mt-3" style="margin-left:40px;" href="{{route('make_view', 'Subaru')}}"><b>{{$Subaru->count()}}</b></a></div>
        <div class="swiper-slide"><img src="assets/img/clients/suzuki-logo.jpg" class="img-fluid" alt=""><a class="text-light btn btn-sm bg-danger mt-3" style="margin-left:40px;" href="{{route('make_view', 'Suzuki')}}"><b>{{$Suzuki->count()}}</b></a></div>
        <div class="swiper-slide"><img src="assets/img/clients/Isuzu-logo.jpg" class="img-fluid" alt=""><a class="text-light btn btn-sm bg-danger mt-5" style="margin-left:40px;" href="{{route('make_view', 'Isuzu')}}"><b>{{$Isuzu->count()}}</b></a></div>
        <div class="swiper-slide"><img src="assets/img/clients/honda.png" class="img-fluid" alt=""><a class="text-light btn btn-sm bg-danger mt-3" style="margin-left:40px;" href="{{route('make_view', 'Honda')}}"><b>{{$Honda->count()}}</b></a></div>
        <div class="swiper-slide"><img src="assets/img/clients/bmw.jpg" class="img-fluid" alt=""><a class="text-light btn btn-sm bg-danger mt-3" style="margin-left:40px;" href="{{route('make_view', 'BMW')}}"><b>{{$BMW->count()}}</b></a></div>
        <div class="swiper-slide"><img src="assets/img/clients/mercedes.jpg" class="img-fluid" alt=""><a class="text-light btn btn-sm bg-danger mt-3" style="margin-left:40px;" href="{{route('make_view', 'Mercedes')}}"><b>{{$Mercedes->count()}}</b></a></div>
        <div class="swiper-slide"><img src="assets/img/clients/audi.png" class="img-fluid" alt=""><a class="text-light btn btn-sm bg-danger mt-3" style="margin-left:40px;" href="{{route('make_view', 'Audi')}}"><b>{{$Audi->count()}}</b></a></div>
        <div class="swiper-slide"><img src="assets/img/clients/land.png" class="img-fluid" alt=""><a class="text-light btn btn-sm bg-danger" style="margin-left:40px;" href="{{route('make_view', 'Land Rove')}}"><b>{{$Land->count()}}</b></a></div>
        <div class="swiper-slide"><img src="assets/img/clients/jeep.jpg" class="img-fluid" alt=""><a class="text-light btn btn-sm bg-danger" style="margin-left:40px;" href="{{route('make_view', 'Jeep')}}"><b>{{$Jeep->count()}}</b></a></div>
        <div class="swiper-slide"><img src="assets/img/clients/lexus.png" class="img-fluid" alt=""><a class="text-light btn btn-sm bg-danger mt-5" style="margin-left:40px;" href="{{route('make_view', 'Lexus')}}"><b>{{$Lexus->count()}}</b></a></div>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section><!-- End Our Clients Section -->

<div class="container">
  <div class="card shadow m-3 mb-3">
    <div class="card-header">
      <h5 class="text-info"><b>Shop by Body Type:</b></h5>
    </div>
    <div class="row">
      <div class="col m-1">  
          <div class="card-body border-bottom">
          <img class="img-fluid" src="assets/img/body/sedan.png" alt="body type image" style="width:90px; height:50px;">
           <a class="text-secondary m-1" href="{{route('bodyType', 'Sedan')}}"><u><p ><b>Sedan</b><span  class="mx-2">{{$Sedan->count()}}</span></p></u></a>
          </div>
      </div>
      <div class="col m-1">  
          <div class="card-body border-bottom">
          <img class="img-fluid" src="assets/img/body/suv.png" alt="body type image" style="width:90px; height:50px;">
           <a class="text-secondary m-1" href="{{route('bodyType', 'SUV')}}"><u><p><b>SUV</b><span  class="mx-2">{{$SUV->count()}}</span></p></u></a>
          </div>
      </div>
      <div class="col m-1">  
          <div class="card-body border-bottom">
          <img class="img-fluid" src="assets/img/body/wagon.png" alt="body type image" style="width:90px; height:50px;">
           <a class="text-secondary m-1" href="{{route('bodyType', 'Wagon')}}"><u><p ><b>Wagon</b><span class="mx-2">{{$Wagon->count()}}</span></p></u></a>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col m-1">  
          <div class="card-body border-bottom">
          <img class="img-fluid" src="assets/img/body/pickup.png" alt="body type image" style="width:90px; height:50px;">
           <a class="text-secondary m-1" href="{{route('bodyType', 'Pickup')}}"><u><p ><b>Pickup</b><span  class="mx-2">{{$Pickup->count()}}</span></p></u></a>
          </div>
      </div>
      <div class="col m-1">  
          <div class="card-body border-bottom">
          <img class="img-fluid" src="assets/img/body/mini bus.png" alt="body type image" style="width:90px; height:50px;">
           <a class="text-secondary m-1" href="{{route('bodyType', 'Mini Bus')}}"><u><p ><b>Mini Bus</b><span  class="mx-2">{{$Mini->count()}}</span></p></u></a>
          </div>
      </div>
      <div class="col m-1">  
          <div class="card-body border-bottom">
           <img class="img-fluid" src="assets/img/body/van.png" alt="body type image" style="width:90px; height:50px;">
           <a class="text-secondary m-1" href="{{route('bodyType', 'Van')}}"><u><p ><b>Van</b><span class="mx-2">{{$Van->count()}}</span></p></u></a>
          </div>
      </div>
    </div>
    <div class="row">
      <div class="col m-1">  
          <div class="card-body border-bottom">
          <img class="img-fluid" src="assets/img/body/hatchback.png" alt="body type image" style="width:90px; height:50px;">
           <a class="text-secondary m-1" href="{{route('bodyType', 'Hatchback')}}"><u><p ><b>Hatchback</b><span  class="mx-2">{{$Hatchback->count()}}</span></p></u></a>
          </div>
      </div>
      <div class="col m-1">  
          <div class="card-body border-bottom">
          <img class="img-fluid" src="assets/img/body/truck.png" alt="body type image" style="width:90px; height:50px;">
           <a class="text-secondary m-1" href="{{route('bodyType', 'Truck')}}"><u><p><b>Truck</b><span  class="mx-2">{{$Truck->count()}}</span></p></u></a>
          </div>
      </div>
      <div class="col m-1">  
          <div class="card-body border-bottom">
          <img class="img-fluid" src="assets/img/body/coupe.png" alt="body type image" style="width:90px; height:50px;">
           <a class="text-secondary m-1" href="{{route('bodyType', 'Coupe')}}"><u><p ><b>Coupe</b><span class="mx-2">{{$Coupe->count()}}</span></p></u></a>
          </div>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="card shadow m-3">
    <div class="card-header bg-success">
      <h5 class="text-white m-1"><b>Shop by Car's Accessories</b></h5>
    </div>
    <div class="card-body m-3">
      <div class="row">
        <div class="col mt-1">
         <a href="" class="btn btn bg-secondary text-light">A/C<span class="text-light">({{$a_c->count()}})</span></a>
        </div>
        <div class="col mt-1">
         <a href="" class="btn btn bg-secondary text-light">Airbag<span class="text-light">({{$airbag->count()}})</span></a>
        </div>
        <div class="col mt-1">
        <a href="" class="btn btn bg-secondary text-light">Power Steering<span class="text-light">({{$p_steering->count()}})</span></a>
        </div>
        <div class="col mt-1">
        <a href="" class="btn btn bg-secondary text-light">Power Window<span class="text-light">({{$p_window->count()}})</span></a>
        </div>
        <div class="col mt-1">
        <a href="" class="btn btn bg-secondary text-light">Radio<span class="text-light">({{$radio->count()}})</span></a>
        </div>
        <div class="col mt-1"> 
        <a href="" class="btn btn bg-secondary text-light">CD Player<span class="text-light">({{$cd_player->count()}})</span></a>
        </div>
        <div class="col mt-1">
        <a href="" class="btn btn bg-secondary text-light">Back Camera<span class="text-light">({{$back_camera->count()}})</span></a>
        </div>
        <div class="col mt-1">
        <a href="" class="btn btn bg-secondary text-light">Power Seat<span class="text-light">({{$power_seat->count()}})</span></a>
        </div>
        <div class="col mt-1">
        <a href="" class="btn btn bg-secondary text-light">Back Tire<span class="text-light">({{$back_tire->count()}})</span></a>
        </div>
        <div class="col mt-1">
        <a href="" class="btn btn bg-secondary text-light">Grill Guard<span class="text-light">({{$grill_guard->count()}})</span></a>
        </div>
        <div class="col mt-1">
        <a href="{{route('view_acc', 'true')}}" class="btn btn bg-secondary text-light">Body Kit<span class="text-light">({{$body_kit->count()}})</span></a>
        </div>
          </div>
      <div class="row mt-2">
      <div class="col mt-1"><a href="{{route('view_acc', 'true')}}" class="btn btn bg-secondary text-light">Push Start<span class="text-light">({{$push_start->count()}})</span></a></div>
      <div class="col mt-1"><a href="{{route('view_acc', 'true')}}" class="btn btn bg-secondary text-light">Fog Light<span class="text-light">({{$fog_light->count()}})</span></a></div>
      <div class="col mt-1"> <a href="{{route('view_acc', 'true')}}" class="btn btn bg-secondary text-light">Power Mirror<span class="text-light">({{$P_mirror->count()}})</span></a></div>
      <div class="col mt-1"><a href="{{route('view_acc', 'true')}}" class="btn btn bg-secondary text-light">Spare Tire<span class="text-light">({{$sp_tire->count()}})</span></a></div>
      <div class="col mt-1"> <a href="{{route('view_acc', 'true')}}" class="btn btn bg-secondary text-light">Side Airbag<span class="text-light">({{$side_airbag->count()}})</span></a></div>
      <div class="col mt-1"><a href="{{route('view_acc', 'true')}}" class="btn btn bg-secondary text-light">Navigation<span class="text-light">({{$navigation->count()}})</span></a></div>
      <div class="col mt-1"><a href="{{route('view_acc', 'true')}}" class="btn btn bg-secondary text-light">Sun Roof<span class="text-light">({{$sun_roof->count()}})</span></a></div>
      <div class="col mt-1"><a href="{{route('view_acc', 'true')}}" class="btn btn bg-secondary text-light">Leather Seat<span class="text-light">({{$leather_seat->count()}})</span></a></div>
      <div class="col mt-1"><a href="{{route('view_acc', 'true')}}" class="btn btn bg-secondary text-light">Alloy Wheel<span class="text-light">({{$alloy_wh->count()}})</span></a></div>
      <div class="col mt-1"><a href="{{route('view_acc', 'true')}}" class="btn btn bg-secondary text-light">Jack<span class="text-light">({{$jack->count()}})</span></a></div>
      <div class="col mt-1">
      <a href="" class="btn btn bg-secondary text-light">Wheel Spare<span class="text-light">({{$wheel_sp->count()}})</span></a></div>    
      </div>
    </div>
  </div>
</div>

  <main id="main">
    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services section-bg">
      <div class="container">
        <div class="row no-gutters">
        <!--Cars from Tanzania-->
        <div class="card shadow m-1">  
         <div class="card-header bg-success ">
          <h5 class="text-white"><i class="bi bi-geo-alt-fill mx-1" style="color:#b30000;"></i> <b><a href="{{route('office', 'Dar es salam, Tanzania')}}">Dar es salam, Tanzania <span class="text-danger">({{$tz->count()}})</span></a></b></h5>
        </div> 
         <div class="row m-2">
         @foreach($products->take(10) as $product)
          <div class="col-md-3">
           <div class="thumbnail border m-1">
             <a href="{{route('view_car', $product->id)}}">
              <div class="card-header d-flex">
              <h5 class="text-primary"><u><b>{{$product->MakeCompany}}</b></u></h5>
              <h5>,</h5>
              <h5 style="padding-left:10px;"><i><small>{{$product->carName}}</small></i></h5>
              </div>
              <img src="coverImages/{{$product->cover_p}}" alt="Lights" style="width:100%">
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
      
        <!--Cars from Uganda-->
        <div class="card shadow m-1">  
         <div class="card-header bg-success m-1">
          <h5 class="text-white"><i class="bi bi-geo-alt-fill mx-1 text-danger" ></i><b><a class="text-white" href="{{route('office', 'Uganda')}}">Kampala, Uganda <span class="text-white">({{$ug->count()}})</span></a></b></h5>
        </div> 
         <div class="row m-2">
         @foreach($products as $product)
          <div class="col-md-3">
           <div class="thumbnail border m-1">
             <a href="{{route('view_car', $product->id)}}">
              <div class="card-header d-flex">
              <h5 class="text-primary"><u><b>{{$product->MakeCompany}}</b></u></h5>
              <h5>,</h5>
              <h5 style="padding-left:10px;"><i><small>{{$product->carName}}</small></i></h5>
              </div>
              <img src="coverImages/{{$product->cover_p}}" alt="Lights" style="width:100%">
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
       <!--Cars from Japan-->
       <div class="card shadow m-1">  
         <div class="card-header">
          <h5 class="text-info"><i class="bi bi-geo-alt-fill mx-1" style="color:#b30000;"></i><b><a href="{{route('office', 'Japan')}}">Japan <span class="text-danger">({{$jp->count()}})</span></a></b></h5>
        </div> 
         <div class="row m-2">
         @foreach($products as $product)
          <div class="col-md-3">
           <div class="thumbnail border m-1">
             <a href="{{route('view_car', $product->id)}}">
              <div class="card-header d-flex">
              <h5 class="text-primary"><u><b>{{$product->MakeCompany}}</b></u></h5>
              <h5>,</h5>
              <h5 style="padding-left:10px;"><i><small>{{$product->carName}}</small></i></h5>
              </div>
              <img src="coverImages/{{$product->cover_p}}" alt="Lights" style="width:100%">
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
        <!--Cars from Dubai-->
        <div class="card shadow m-1">  
         <div class="card-header">
          <h5 class="text-info"><i class="bi bi-geo-alt-fill mx-1" style="color:#b30000;"></i><b><a href="{{route('office', 'Dubai')}}">Dubai <span class="text-danger">({{$db->count()}})</span></a></b></h5>
        </div> 
         <div class="row m-2">
         @foreach($products as $product)
          <div class="col-md-3">
           <div class="thumbnail border m-1">
             <a href="{{route('view_car', $product->id)}}">
              <div class="card-header d-flex">
              <h5 class="text-primary"><u><b>{{$product->MakeCompany}}</b></u></h5>
              <h5>,</h5>
              <h5 style="padding-left:10px;"><i><small>{{$product->carName}}</small></i></h5>
              </div>
              <img src="coverImages/{{$product->cover_p}}" alt="Lights" style="width:100%">
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
    </section><!-- End Featured Services Section -->

    

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About Us</h2>
          <p>You can choose your best car from our global source including Japan,
                 South Korea, Thailand, USA, UK, Germany and Singapore.</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="assets/img/bango.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
            <h3>Al Husnain Traders Limited. Manager - Humayun Taj.</h3>
            <p class="fst-italic">
              Al Husnain Traders Limited was established in 2020. The Company is one of the pioneers in UAE for exporting
              vehicles from Japan and Dubai. The company is selling its products mostly to the African 
              contries including Tanzania, Kenya and Uganda.
            </p>
            <ul>
              <li><i class="bi bi-check-circled"></i> The company has showrooms in Tanzania(Dar es salaam & Mwanza), Kenya(Nairobi, Mombasa & Kisumu) and Uganda(Kampala).</li>
              <li><i class="bi bi-check-circled"></i>The company provide service of car registration when Customer purchased a car.</li>
              <li><i class="bi bi-check-circled"></i> Via our website, Customer can purchase a car online by placing order and make payments through available methods.</li>
            </ul>
            <p>
            Al Husnain Traders Limited Your Trusted Automotive Brand.
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= how to buy Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row no-gutters">
        <div class="section-title">
          <h2>How to buy</h2>
        </div>
          <div class="col-lg-4 col-md-6 content-item">
            <span>01</span>
            <h4>Registration</h4>
            <p>Registration is required. After registration is completed, you can buy any car that you want.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>02</span>
            <h4>Car selection</h4>
            <p>Choose any car/cars you want to buy.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>03</span>
            <h4>Order</h4>
            <p>Using "Place order" or "Buy now" you can place your order.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>04</span>
            <h4>Payment</h4>
            <p>After placing the order, promptly make the payment using available payment methods.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>05</span>
            <h4>Shipment</h4>
            <p>When payment is received, we will send you the shipping schedule for your order.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item">
            <span>06</span>
            <h4>Delivery</h4>
            <p>Receive your vehicle at the Agreed Destination. You are required to clear vehicle(s) at the customs, usually through a clearing agent.</p>
          </div>

        </div>

      </div>
    </section><!-- End How to buy Section -->

   
    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Why us</h2>
          <p>Why choose AL-HUSNAIN TRADERS LIMITED ?</p>
        </div>

        <div class="row">

        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                </svg>
                <i class="bx bx-slideshow"></i>
              </div>
              <h4><a href="">You name it ,we have it</a></h4>
              <p>You can choose your best car from our global source including Japan,
                 South Korea, Thailand, USA, UK, Germany and Singapore.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i class="bx bx-arch"></i>
              </div>
              <h4><a href="">You can get your car if your in this planet</a></h4>
              <p>We can ship used cars globally to Africa, Asia, Middle East, Caribbean,
                 Oceania, South America, and Europe with offices in over 30 offices.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-blue ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="">Always by your side to help you!</a></h4>
              <p>Decent and energetic staffs are always ready for 24/7/365 
                Customer Support via Live Chat, Skype, phones, and emails.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="">High quality is our pride!</a></h4>
              <p>Proper and thorough inspections before shipment assure you the best condition that you can expect.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-tachometer"></i>
              </div>
              <h4><a href="">We regard “speed” as a global standard!</a></h4>
              <p> Prompt shipment enables you to get your dream car sooner than you imagine no matter where you are.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="bx bx-layer"></i>
              </div>
              <h4><a href="">Reliability is always there!</a></h4>
              <p>We have built up excellence in used car industry for 25 years, and have put the finest focus on reliability.</p>
            </div>
          </div>

         

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Al Husnain Traders Limited</h3>
            <p> -----</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#hero">Your Trusted Automotive Brand.</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Team</h2>
          <p>Top Members of Al Husnain Traders Limited.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/seb.jpg" alt="">
              <h4>SHAHID SADDIQUE</h4>
              <span>Managing Director</span>
              <p>
                --
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/Taj.jpg" alt="">
              <h4>HUMAYUN TAJ</h4>
              <span>Director</span>
              <p>
               --
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="assets/img/team/Ah.jpg" alt="">
              <h4>AHMAD ATIQUE</h4>
              <span>Manager</span>
              <p>
                --
              </p>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->
    
    </section><!-- End About Us Section -->

<!-- ======= Comments Section ======= -->
<section id="why-us" class="why-us">
  <div class="container">

    <div class="row no-gutters">
    <div class="section-title">
      <h2>Comments</h2>
    </div>
      <div class="col-lg-4 col-md-6 content-item">
        <span><img class="rounded-circle shadow-1-strong me-3"
                    src="assets/img/team/avatar2.jpg" alt="avatar" width="65"
                    height="65" /></span>
        <h4>Registration</h4>
        <p>Registration is required. After registration is completed, you can buy any car that you want.</p>
      </div>

      <div class="col-lg-4 col-md-6 content-item">
        <span><img class="rounded-circle shadow-1-strong me-3"
                    src="assets/img/team/avatar2.jpg" alt="avatar" width="65"
                    height="65" /></span>
        <h4>Car selection</h4>
        <p>Choose any car/cars you want to buy.</p>
      </div>

      <div class="col-lg-4 col-md-6 content-item">
        <span><img class="rounded-circle shadow-1-strong me-3"
                    src="assets/img/team/avatar2.jpg" alt="avatar" width="65"
                    height="65" /></span>
        <h4>Order</h4>
        <p>Using "Place order" or "Buy now" you can place your order.</p>
      </div>

      <div class="col-lg-4 col-md-6 content-item">
        <span><img class="rounded-circle shadow-1-strong me-3"
                    src="assets/img/team/avatar2.jpg" alt="avatar" width="65"
                    height="65" /></span>
        <h4>Payment</h4>
        <p>After placing the order, promptly make the payment using available payment methods.</p>
      </div>

      <div class="col-lg-4 col-md-6 content-item">
        <span><img class="rounded-circle shadow-1-strong me-3"
                    src="assets/img/team/avatar2.jpg" alt="avatar" width="65"
                    height="65" /></span>
        <h4>Shipment</h4>
        <p>When payment is received, we will send you the shipping schedule for your order.</p>
      </div>

      <div class="col-lg-4 col-md-6 content-item">
        <span><img class="rounded-circle shadow-1-strong me-3"
                    src="assets/img/team/avatar2.jpg" alt="avatar" width="65"
                    height="65" /></span>
        <h4>Delivery</h4>
        <p>Receive your vehicle at the Agreed Destination. You are required to clear vehicle(s) at the customs, usually through a clearing agent.</p>
      </div>

    </div>

  </div>
</section><!-- Comments Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Below is our contanct information, you may leave comment or any suggestions purposively for the company growth.</p>
        </div>

        <div class="row">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Kinondoni, New Bagamoyo road, Dar es Salaam</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>alhusnaintradersltd@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+255 658-382549, Dar es Salaam</p>
                <p>+256 775-765533, Kampala</p>
                <p>+254 786-786440, Nairobi</p>
                <p>+971 786-786440, Dubai</p>
                <p>+8170 4436-7828, Japan</p>
              </div>

              <iframe src="assets/img/team/map.png" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="{{route('comment')}}" method="post" role="form" class="form_class">
              @csrf
              <div class="row">             
              <div class="form-group mt-3">
                <label for="name">Comment</label>
                <textarea class="form-control" name="comments" rows="10" required></textarea>
              </div>
              <!-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> -->
               @if(Session::has('Custom_logId'))
               <div class="text-center"><button type="submit">Send comment</button></div>
               @else
               <div class="text-center"><a href="{{route('custom_login_register')}}"><button type="submit">Login to Send comment</button></a></div>
               @endif
              
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

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
