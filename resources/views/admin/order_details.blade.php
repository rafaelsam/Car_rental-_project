
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
            <a class="nav-link scrollto active text-success"><span><small><b>Welcome</b>:</small></span> <small>{{Session::get('logId')}}</small></a>
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
          <li><a class="getstarted scrollto" href="{{route('view_order')}}">Back</a></li>
          @if(Session::has('logId'))
          <li><a class="getstarted scrollto" href="{{route('logout')}}">Logout</a></li>
          @endif
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <div class="container mt-5">
      <div class="card m-2">
      @if(Session::has('order_delete'))
                   <div class="alert alert-success">
                   {{Session::get('order_delete')}}
                   </div>
                   @endif
      <div class="row">
        <div class="col">
        <div style="margin:auto;" class="card text-black  m-3" style="max-width: 18rem;">
         <div class="card-header text-white bg-success">Order By:</div>
        <div class="card-body">
                           @foreach($orders_data as $data)
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
                             @endforeach
        </div>
       </div>
        </div>
        <div class="col">
        <div style="margin:auto;" class="card text-black  m-3" style="max-width: 18rem;">
         <div class="card-header text-white bg-success">Orderd Vehicle(s) - Accessories</div>
        <div class="card-body">
                           @foreach($orders_data as $data)
                           <table class="table-sm table-bordered mt-3" style="width:100%">
                    <tbody>
                        <tr>
                            @if ($data->airbag != null)
                            <td class=" bg-secondary text-white py-0 my-0">Air Bag</td>
                            @else  
                            <td class="text-muted py-0 my-0">Air Bag</td>
                            @endif
                            @if ($data->radio != null)
                            <td class="bg-secondary text-white py-0 my-0">FM Radio</td>
                            @else  
                            <td class="text-muted py-0 my-0">FM Radio</td>
                            @endif
                            @if ($data->a_c != null)
                            <td class="bg-secondary text-white py-0 my-0">Air Conditioner</td>
                            @else  
                            <td class="text-muted py-0 my-0">Air Conditioner</td>
                            @endif
                            @if ($data->alloy_wh != null)
                            <td class="bg-secondary text-white py-0 my-0">Alloy Wheels</td>
                            @else  
                            <td class="text-muted py-0 my-0">Alloy Wheels</td>
                            @endif                  
                        </tr>
                        <tr>
                            @if ($data->leather_seat != null)
                            <td class=" bg-secondary text-white py-0 my-0">Leather Seats</td>
                            @else  
                            <td class="text-muted py-0 my-0">Leather Seats</td>
                            @endif
                            @if ($data->back_tire != null)
                            <td class="bg-secondary text-white py-0 my-0">Back Tire</td>
                            @else  
                            <td class="text-muted py-0 my-0">Back Tire</td>
                            @endif
                            @if ($data->fog_light != null)
                            <td class="bg-secondary text-white py-0 my-0">Fog Lights</td>
                            @else  
                            <td class="text-muted py-0 my-0">Fog Lights</td>
                            @endif
                            @if ($data->grill_guard != null)
                            <td class="bg-secondary text-white py-0 my-0">Grill Guard</td>
                            @else  
                            <td class="text-muted py-0 my-0">Grill Guard</td>
                            @endif
                       
                        </tr>
                        <tr>
                            @if ($data->navigation != null)
                            <td class=" bg-secondary text-white py-0 my-0">Navigation</td>
                            @else  
                            <td class="text-muted py-0 my-0">Navigation</td>
                            @endif
                            @if ($data->p_steering != null)
                            <td class="bg-secondary text-white py-0 my-0">Power Steering</td>
                            @else  
                            <td class="text-muted py-0 my-0">Power Steering</td>
                            @endif
                            @if ($data->p_window != null)
                            <td class="bg-secondary text-white py-0 my-0">Power Windows</td>
                            @else  
                            <td class="text-muted py-0 my-0">Power Windows</td>
                            @endif
                            @if ($data->jack != null)
                            <td class="bg-secondary text-white py-0 my-0">Jack</td>
                            @else  
                            <td class="text-muted py-0 my-0">Jack</td>
                            @endif
                            
                        </tr>
                        <tr>
                            @if ($data->back_camera != null)
                            <td class=" bg-secondary text-white py-0 my-0">Back Camera</td>
                            @else  
                            <td class="text-muted py-0 my-0">Back Camera</td>
                            @endif
                            @if ($data->sun_roof != null)
                            <td class="bg-secondary text-white py-0 my-0">Sun Roof</td>
                            @else  
                            <td class="text-muted py-0 my-0">Sun Roof</td>
                            @endif
                            @if ($data->side_airbag != null)
                            <td class="bg-secondary text-white py-0 my-0">Side Airbag</td>
                            @else  
                            <td class="text-muted py-0 my-0">Side Airbag</td>
                            @endif
                            @if ($data->body_kit != null)
                            <td class="bg-secondary text-white py-0 my-0">Body kit</td>
                            @else  
                            <td class="text-muted py-0 my-0">Body kit</td>
                            @endif
                           
                        </tr> 
                        <tr>
                            @if ($data->sp_tire != null)
                            <td class=" bg-secondary text-white py-0 my-0">Spare Tire</td>
                            @else  
                            <td class="text-muted py-0 my-0">Spare Tire</td>                
                            @endif
                            @if ($data->cd_player != null)
                            <td class=" bg-secondary text-white py-0 my-0">CD Player</td>
                            @else  
                            <td class="text-muted py-0 my-0">CD Player</td>                
                            @endif
                            @if ($data->push_start != null)
                            <td class=" bg-secondary text-white py-0 my-0">Push Start</td>
                            @else  
                            <td class="text-muted py-0 my-0">Push Start</td>                
                            @endif          
                        </tr> 
                    </tbody>               
                </table>
                             @endforeach
                          
        </div>
       </div>

        </div>
      </div>

      <div class="row">
        <div class="col">
        <div style="margin:auto;" class="card text-black  m-3" style="max-width: 18rem;">
         <div class="card-header text-white bg-success">Orderd Vehicle(s) - Pictures</div>
        <div class="card-body">
        <div  id="carouselExampleControls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                 @foreach ($orders_data as $img)
                 <div  class="carousel-item {{ $loop->first ? 'active' : '' }}">
                   <img class="img-fluid border mt-1" src="/coverImages/{{$img->cover_p}}"  alt="">
                 </div>                
                 @endforeach 
               </div>
               <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                 <span class="visually-hidden">Previous</span>
               </button>
               <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
               <span class="carousel-control-next-icon" aria-hidden="true"></span>
               <span class="visually-hidden">Next</span>
               </button>
            </div>
       
        </div>
       </div>

        </div>
        <div class="col">
       
        <div style="margin:auto;" class="card text-black  m-3" style="max-width: 18rem;">
         <div class="card-header text-white bg-success">Orderd Vehicle(s) - Details</div>
        <div class="card-body">
                           @foreach($orders_data as $data)
                           <table class="table-sm table-bordered" style="width:100%">
                     <tbody>
                         <tr class="py-0 my-0">
                             <td  class="font-weight-bold py-0 my-0"> <b>Stock Id:</b> </td>
                             <td class="py-0 my-0">{{$data->stockId}}</td>
                             <td class="font-weight-bold py-0 my-0"> <b>Location:</b> </td>
                             <td class="py-0 my-0">{{$data->office}}</td>
                         </tr>
                         <tr class="py-0 my-0">
                            <td class="font-weight-bold py-0 my-0 "><b> Chasis:</b></td>
                            <td class="py-0 my-0">{{$data->chasis}}</td>
                            <td class="font-weight-bold py-0 my-0 "><b>Car Weight:</b></td>
                            <td class="py-0 my-0"  >{{$data->weight}}</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold py-0 my-0 "><b>Production Year:</b></td>
                            <td class="py-0 my-0">{{$data->ProductionYear}}</td>
                            <td class="font-weight-bold py-0 my-0 "><b>Transmission:</b></td>
                            <td class="py-0 my-0" >{{$data->transmission}}</td>
                        </tr>
                            <tr>
                             <td  class="font-weight-bold py-0 my-0 "><b>Color:</b></td>
                             <td  class="py-0 my-0" >{{$data->color}}</td>
                             <td class="font-weight-bold py-0 my-0 "><b>Drive:</b></td>
                             <td  class="py-0 my-0" >{{$data->drive}}</td>
                         </tr>
                             <tr>
                             <td class="font-weight-bold py-0 my-0 "><b>Door:</b></td>
                             <td class="py-0 my-0" >{{$data->door}}</td>
                             <td class="font-weight-bold py-0 my-0 "><b>Steering:</b></td>
                             <td class="py-0 my-0"  >{{$data->steering}}</td>
                         </tr>
                               <tr>
                             <td class="font-weight-bold py-0 my-0 "><b>Seats:</b></td>
                             <td class="py-0 my-0" >{{$data->seat}}</td>
                             <td class="font-weight-bold py-0 my-0 "><b>Engine Type:</b></td>
                             <td class="py-0 my-0"  >{{$data->EngineType}}</td>
                         </tr>      <tr>
                            <td class="font-weight-bold py-0 my-0 "><b>Body Type:</b></td>
                            <td class="py-0 my-0" >{{$data->bodyType}}</td>
                            <td class="font-weight-bold py-0 my-0 "><b>Engine Size:</b></td>
                            <td class="py-0 my-0"  >{{$data->EngineCapacity}}</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold py-0 my-0 "><b>Mileage:</b></td>
                            <td class="py-0 my-0" >{{$data->mileage}}</td>
                            <td class="font-weight-bold py-0 my-0 "><b>Fuel:</b></td>
                            <td class="py-0 my-0"  >{{$data->fuel}}</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold py-0 my-0 "><b>Dimension:</b></td>
                            <td class="py-0 my-0" >{{$data->Dimension}}</td>
                            <td class="font-weight-bold py-0 my-0 "><b>Make:</b></td>
                            <td class="py-0 my-0"  >{{$data->MakeCompany}}</td>
                        </tr>      
                     </tbody>      
                 </table>
                 @endforeach
        </div>
       </div>
       
                   <form action="{{route('delete_order', $order_id->id)}}" method="post">
                        @csrf
                        <button style="float:right;" type="submit" onClick="return confirm('Sure you want to delete this Order?!');" class="btn btn-danger m-2">Delete</button>                     
                        @method('delete')
                    </form>
                    <p class="m-2" ><b><span class="text-dark">Time Left:</span> <small class="text-danger">00:00</small></b></p>
                   
                    
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
