
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

    @include('includes.search')

       <div class="card shadow">
        <div class="row">
          <div class="col">
          <div class="d-flex m-2 justify-content-center card-header">
          <h4 class="text-success p-2"><u><strong>{{$products->carName}}</strong></u></h4>
          <h5 class="font-italic p-2">{{$products->ProductionYear}}</h5>
          <h5 class="p-2 text-warning"><span><strong>{{$products->price}}</strong></span></h5>
        </div>
        <div class="img-fluid ">
           <div class="card mb-3" style="width: 36rem;">
             <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                 @foreach ($products->images as $img)
                 <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                   <img class="img-fluid border mt-1" src="/otherImages/{{$img->image}}"  alt="">
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
            <a href="{{route('download_file', $products->cover_p)}}" class=" col-lg-3 col-sm-3 col-md-3"><i class="bi bi-download"></i></a>
            <div class="card-body">
            @foreach ($products->images as $img)
            <img class="img-fluid border mt-1" src="/otherImages/{{$img->image}}" style="height:120px; width:150px;" alt="">
            <a  href="{{route('download_extra', $img->image)}}" class=" col-lg-3 col-sm-3 col-md-3"><i class="bi bi-download"></i></a>
            @endforeach             
             </div>
             <a style="float:right;" class="btn btn-sm bg-primary text-white m-2 col-lg-3" href="{{route('print_car_info', $products->id)}}"><b>Print car details</b></a>
             
           </div>
        </div>
          </div>
          <div class="col">
                <div class="card-header rounded-0 shadow-none m-3 "  >
                    <div class="card-body p-1 rounded-0 shadow-none">
                    <div class=" h4 font-weight-bolder text-success"><b>Details</b></div>
                    </div>
                 </div>
          <table class="table-sm table-bordered" style="width:100%">
                     <tbody>
                         <tr class="py-0 my-0">
                             <td  class="font-weight-bold py-0 my-0"> <b>Stock Id:</b> </td>
                             <td class="py-0 my-0">{{$products->stockId}}</td>
                             <td class="font-weight-bold py-0 my-0"> <b>Location:</b> </td>
                             <td class="py-0 my-0">{{$products->office}}</td>
                         </tr>
                         <tr class="py-0 my-0">
                            <td class="font-weight-bold py-0 my-0 "><b> Chasis:</b></td>
                            <td class="py-0 my-0">{{$products->chasis}}</td>
                            <td class="font-weight-bold py-0 my-0 "><b>Car Weight:</b></td>
                            <td class="py-0 my-0"  >{{$products->weight}}</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold py-0 my-0 "><b>Production Year:</b></td>
                            <td class="py-0 my-0">{{$products->ProductionYear}}</td>
                            <td class="font-weight-bold py-0 my-0 "><b>Transmission:</b></td>
                            <td class="py-0 my-0" >{{$products->transmission}}</td>
                        </tr>
                            <tr>
                             <td  class="font-weight-bold py-0 my-0 "><b>Color:</b></td>
                             <td  class="py-0 my-0" >{{$products->color}}</td>
                             <td class="font-weight-bold py-0 my-0 "><b>Drive:</b></td>
                             <td  class="py-0 my-0" >{{$products->drive}}</td>
                         </tr>
                             <tr>
                             <td class="font-weight-bold py-0 my-0 "><b>Door:</b></td>
                             <td class="py-0 my-0" >{{$products->door}}</td>
                             <td class="font-weight-bold py-0 my-0 "><b>Steering:</b></td>
                             <td class="py-0 my-0"  >{{$products->steering}}</td>
                         </tr>
                               <tr>
                             <td class="font-weight-bold py-0 my-0 "><b>Seats:</b></td>
                             <td class="py-0 my-0" >{{$products->seat}}</td>
                             <td class="font-weight-bold py-0 my-0 "><b>Engine Type:</b></td>
                             <td class="py-0 my-0"  >{{$products->EngineType}}</td>
                         </tr>      <tr>
                            <td class="font-weight-bold py-0 my-0 "><b>Body Type:</b></td>
                            <td class="py-0 my-0" >{{$products->bodyType}}</td>
                            <td class="font-weight-bold py-0 my-0 "><b>Engine Size:</b></td>
                            <td class="py-0 my-0"  >{{$products->EngineCapacity}}</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold py-0 my-0 "><b>Mileage:</b></td>
                            <td class="py-0 my-0" >{{$products->mileage}}</td>
                            <td class="font-weight-bold py-0 my-0 "><b>Fuel:</b></td>
                            <td class="py-0 my-0"  >{{$products->fuel}}</td>
                        </tr>
                        <tr>
                            <td class="font-weight-bold py-0 my-0 "><b>Dimension:</b></td>
                            <td class="py-0 my-0" >{{$products->Dimension}}</td>
                            <td class="font-weight-bold py-0 my-0 "><b>Make:</b></td>
                            <td class="py-0 my-0"  >{{$products->MakeCompany}}</td>
                        </tr>      
                     </tbody>      
                 </table>

                 <div class="card-header mt-3 rounded-0 shadow-none" >
                    <div class="card-body p-1 rounded-0 shadow-none ">
                     <div class=" h4 font-weight-bolder text-success"><b>Accessories</b></div>
                    </div>
                </div>
                <table class="table-sm table-bordered mt-3" style="width:100%">
                    <tbody>
                        <tr>
                            @if ($products->airbag != null)
                            <td class=" bg-info text-white py-0 my-0">Air Bag</td>
                            @else  
                            <td class="text-muted py-0 my-0">Air Bag</td>
                            @endif
                            @if ($products->radio != null)
                            <td class="bg-info text-white py-0 my-0">FM Radio</td>
                            @else  
                            <td class="text-muted py-0 my-0">FM Radio</td>
                            @endif
                            @if ($products->a_c != null)
                            <td class="bg-info text-white py-0 my-0">Air Conditioner</td>
                            @else  
                            <td class="text-muted py-0 my-0">Air Conditioner</td>
                            @endif
                            @if ($products->alloy_wh != null)
                            <td class="bg-info text-white py-0 my-0">Alloy Wheels</td>
                            @else  
                            <td class="text-muted py-0 my-0">Alloy Wheels</td>
                            @endif                  
                        </tr>
                        <tr>
                            @if ($products->leather_seat != null)
                            <td class=" bg-info text-white py-0 my-0">Leather Seats</td>
                            @else  
                            <td class="text-muted py-0 my-0">Leather Seats</td>
                            @endif
                            @if ($products->back_tire != null)
                            <td class="bg-info text-white py-0 my-0">Back Tire</td>
                            @else  
                            <td class="text-muted py-0 my-0">Back Tire</td>
                            @endif
                            @if ($products->fog_light != null)
                            <td class="bg-info text-white py-0 my-0">Fog Lights</td>
                            @else  
                            <td class="text-muted py-0 my-0">Fog Lights</td>
                            @endif
                            @if ($products->grill_guard != null)
                            <td class="bg-info text-white py-0 my-0">Grill Guard</td>
                            @else  
                            <td class="text-muted py-0 my-0">Grill Guard</td>
                            @endif
                       
                        </tr>
                        <tr>
                            @if ($products->navigation != null)
                            <td class=" bg-info text-white py-0 my-0">Navigation</td>
                            @else  
                            <td class="text-muted py-0 my-0">Navigation</td>
                            @endif
                            @if ($products->p_steering != null)
                            <td class="bg-info text-white py-0 my-0">Power Steering</td>
                            @else  
                            <td class="text-muted py-0 my-0">Power Steering</td>
                            @endif
                            @if ($products->p_window != null)
                            <td class="bg-info text-white py-0 my-0">Power Windows</td>
                            @else  
                            <td class="text-muted py-0 my-0">Power Windows</td>
                            @endif
                            @if ($products->jack != null)
                            <td class="bg-info text-white py-0 my-0">Jack</td>
                            @else  
                            <td class="text-muted py-0 my-0">Jack</td>
                            @endif
                            
                        </tr>
                        <tr>
                            @if ($products->back_camera != null)
                            <td class=" bg-info text-white py-0 my-0">Back Camera</td>
                            @else  
                            <td class="text-muted py-0 my-0">Back Camera</td>
                            @endif
                            @if ($products->sun_roof != null)
                            <td class="bg-info text-white py-0 my-0">Sun Roof</td>
                            @else  
                            <td class="text-muted py-0 my-0">Sun Roof</td>
                            @endif
                            @if ($products->side_airbag != null)
                            <td class="bg-info text-white py-0 my-0">Side Airbag</td>
                            @else  
                            <td class="text-muted py-0 my-0">Side Airbag</td>
                            @endif
                            @if ($products->body_kit != null)
                            <td class="bg-info text-white py-0 my-0">Body kit</td>
                            @else  
                            <td class="text-muted py-0 my-0">Body kit</td>
                            @endif
                           
                        </tr> 
                        <tr>
                            @if ($products->sp_tire != null)
                            <td class=" bg-info text-white py-0 my-0">Spare Tire</td>
                            @else  
                            <td class="text-muted py-0 my-0">Spare Tire</td>                
                            @endif
                            @if ($products->cd_player != null)
                            <td class=" bg-info text-white py-0 my-0">CD Player</td>
                            @else  
                            <td class="text-muted py-0 my-0">CD Player</td>                
                            @endif
                            @if ($products->push_start != null)
                            <td class=" bg-info text-white py-0 my-0">Push Start</td>
                            @else  
                            <td class="text-muted py-0 my-0">Push Start</td>                
                            @endif          
                        </tr> 
                    </tbody>               
                </table>
                <div class="card mt-5">
                      <div class="card-header text-success"><h5><b>Payment methods</b></h5></div>
                      <div class="row m-1">
                        <div class="col"><img style="width:150px; height:100px;" src="/assets/img/py.png" alt=""></div>
                        <div class="col"><img style="width:150px; height:100px;" src="/assets/img/py3.png" alt=""></div>
                      </div>
                      <div class="row m-1">
                        <div class="col"><img style="width:150px; height:100px;" src="/assets/img/py2.png" alt=""></div>
                        <div class="col"><img style="width:150px; height:100px;" src="/assets/img/py4.png" alt=""></div>
                      </div>         
                      <div class="row">
                        <div class="col">
                        <div class="card mx-3 bg-dark" style="width:150px;">
                         <h6 class="btn btn-dark"><b>Pay at Sales Office</b></h6>
                        </div>
                        </div>      
                          <div class="row m-3">                        
                          @if(Session::has('Custom_logId'))                          
                          <div class="col"><a style="background:#ff9933" href="{{route('price_quote', $products->id)}}" class="btn btn-lg text-light elevation-2 mt-3" ><b>Get price qoute</b></a></div>
                          @else
                          <div class="col"><a style="background:#ff9933" class="btn btn-lg text-light elevation-2 mt-3" href="#reg"><b>Get price qoute</b></a></div>
                          @endif            
                          <div class="col"><a href="{{route('order_now', $products->id)}}"><button style="background:#ff751a" type="button" class="btn btn-lg text-light elevation-2 mt-3"><b>Order now</b></button></a></div>
                          </div>                
                      </div>           
                    </div>
          </div>
        </div>
   
      </div>
    </div>
  </div>
 </div>
</div>
  </div>

  
<!-- The Modal -->
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header bg-success">
        <h4 class="modal-title text-light">Inquiry (Free qoute)</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body justify-text-center">
        <div class="header"> <h6 style="padding-left:20%;" class="text-success"><b>Thank you! Your inquiry was submitted</b></h6></div>
        <div class="mt-1"><p style="padding-left:40%;" class=""><small><i style="font-size: 25px; color:#ff9033;" class="bi bi-forward-fill"></i></small><span><i style="font-size: 35px; color:#ff9933;" class="bi bi-envelope-fill"></i></span></p></div>
        <div class="m-3 text-secondary"><p><small>You will receive an email shortly with the price quote.
         If you have more questions, please reply to the email so we can assist you</small></p></div>
       </div>
       <div class="m-3 text-success border-top"><h5 class="mt-2" style="padding-left:25%;"><b>LIMITED TIME OFFER</b></h5>
       <h5 class="text-dark" style="padding-left:40%;"><b>{{$products->price}}</b></h5>
        <p class="text-dark" style="padding-left:25%;" >Order this vehicle Within 1 Hour.</p>
        <p class="text-dark" style="padding-left:30%;"><small>Time left:<span><b>00:00</b></span></small></p>
      </div>
        <div class="text-dark" style="padding-left:35%;">
         <img style="width: 120px; height:100;" class="img-fluid border mt-1" src="/otherImages/{{$products->cover_p}}"  alt="">
         <div class="d-flex m-1">
         <h6 class="text-primary"><u><b>{{$products->MakeCompany}}</b></u></h6>
          <h6 style="padding-left:10px;"><i><small>{{$products->carName}}</small></i></h6>
          <p style="padding-left:10px;" class="text-secondary"><b>{{$products->ProductionYear}}</b></p>
         </div>
        </div>
        <div class="text-danger m-3"><p><small><b>Note: Payment must be made within 24 hours (excluding Saturday and Sunday)</b></small></p></div>


      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Submit</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="card shadow mt-2">
      <div class="card-header mt-2">
        <h4 class="text-warning m-1">Step 1<span><i style="font-size: 15px;" class="bi bi-caret-right text-dark mx-1"></i></span><small class="text-primary"><u>Shipping destination</u></small></h4>
      </div>
      <div class="card-body">
        <form action="">
          <div class="row">
            <div class="col">
            <p class="text-success"><small><b>This vehicle is choosen:</b><strong class="text-danger mx-1"><i><b>FROM</b></i></strong></small></p>
            <div class="form-group">
            <label for=""><small>Current location</small></label>
            <select class="form-control" name="" id="">      
            <option value="">{{$products->office}}</option>   
            </select>
          </div>
          <div class="form-group ">
            <label for=""><small>City</small></label>
             <select class="form-control" name="" id="">                    
              <option value="">{{$products->office}}</option>         
            </select>
          </div>
            </div>
            <div class="col">
            <p class="text-success"><small><strong class="text-danger mx-1"><i><b>TO:</b></i></strong><b>Please select the country where your vehicle(s) will be registered finally.</b></small></p>
            <div class="form-group ">
            <label for=""><small>Choose your Country</small></label>
            <select class="form-control" name="" id="">
              <option value="">----</option>
              <option value="">----</option>
              <option value="">----</option>
              <option value="">----</option>
              <option value="">----</option>
            </select>
          </div>
          <div class="form-group ">
            <label for=""><small>City</small></label>
            <select class="form-control" name="" id="">
              <option value="">----</option>
              <option value="">----</option>
              <option value="">----</option>
              <option value="">----</option>
              <option value="">----</option>
            </select>
          </div>
            </div>
           
            <div id="askDiv" class="row border elavation-2 bg-light mt-3 mb-3">
              <div class="col m-1">
              <p><small>Have a live chat with our sales man via WhatsApp to ask for the final price with include and without includes such as shipping, duties and insuarances.</small></p>
                <p class="m-1 text-secondary"><span class="mx-2"><img  style="width:20px; height:20px;" src="/assets/img/wasapu.png" alt="wasapu"></span><a href="https://web.whatsapp.com/">+255 658382549</a><span class="mx-2">-</span>Tanzania</p>
                <p class="m-1 text-secondary"><span class="mx-2"><img  style="width:20px; height:20px;" src="/assets/img/wasapu.png" alt="wasapu"></span><a href="https://web.whatsapp.com/">+254 786-786440</a><span class="mx-2">-</span>Kenya</p>
                <p class="m-1 text-secondary"><span class="mx-2"><img  style="width:20px; height:20px;" src="/assets/img/wasapu.png" alt="wasapu"></span><a href="https://web.whatsapp.com/">+256 775-765533</a><span class="mx-2">-</span>Uganda</p>
                <p class="m-1 text-secondary"><span class="mx-2"><img  style="width:20px; height:20px;" src="/assets/img/wasapu.png" alt="wasapu"></span><a href="https://web.whatsapp.com/">+8170 4436-7828</a><span class="mx-2">-</span>Japan</p>
                <p class="m-1 text-secondary"><span class="mx-2"><img  style="width:20px; height:20px;" src="/assets/img/wasapu.png" alt="wasapu"></span><a href="https://web.whatsapp.com/">+971 786-786440</a><span class="mx-2">-</span>Dubai</p>
              </div>
              <div class="col m-1">
                <p><small>Send message via our email to ask for the final price with include and without includes such as shipping, duties and insuarances.</small></p>
                <p class="m-1"><i class="bi bi-envelope-fill mx-2"></i><a href="mailto:contact@example.com">alhusnaintradersltd@gmail.com</a></p>
              </div>
            </div>
            <script>
             function myFunction() {
               var x = document.getElementById("askDiv");
              if (x.style.display === "none") {
                 x.style.display = "block";
                } else {
                x.style.display = "none";
              }
           }
          </script>

            <div class="card-header mt-2">
           <h4 class="text-warning mt-1">Step 2<span><i style="font-size: 15px;" class="bi bi-caret-right text-dark mx-1"></i></span><small class="text-primary"><u>Get a price qoute</u></small></h4>
          </div>

          </div>
                 
          <div class="row">
       <div id="reg" class="col">
       <div class="card  mt-3">
          <div class="card-title text-success m-2">
            <h6><b><u>Login to get price qoute</u></b></h6>
          </div>
          <div class="m-2 text-secondary">
          <p>To get Proforma Invoice, please make this inquiry and do the followings:</p>
          <p></p>
          <p>1. via Sales Staff Email us intended date and time of the payment if you agree with the price and conditions of the vehicle</p>
          <p>2. The staff will issue a Proforma Invoice and send it by email</p>
          <p>via My Account (available 7days/24hours)</p>
          <p>1.Login to your account</p>
          <p>2.Click "BUY NOW" on the vehicle you would like to get an invoice and place the order</p>
          <p>3.After placing the order download a Proforma Invoice</p>
          </div>
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
                      <button style="background:#ff9933" class="btn btn-sm text-light" type="submit" data-bs-toggle="modal" data-bs-target="#myModal"><b>Login & get price qoute</b></button>
                  </div>
              </form>
          </div>
        </div>
       </div>
       <div class="col">
       <div class="card  mt-3">
         <p></p>
          <div class="card-title text-success m-2">
            <h6><b><u>Guest Inquiry</u></b></h6>
          </div>
           <div class="form m-3">
               @if(Session::has('messej_reg'))
                   <div class="alert alert-success">
                   {{Session::get('messej_reg')}}
                   </div>
                   @endif
               <form action="{{route('custom_register')}}" method="post">
                  @csrf
                  <div class="form-group m-1">
                      <label class="text-success" for="">Full Name<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="full_name" placeholder="---" required>
                  </div>
                  <div class="form-group m-1">
                      <label class="text-success" for="">Email<span class="text-danger">*</span></label>
                      <input type="email" class="form-control" name="email" placeholder="---" required>
                  </div>
                  <div class="form-group m-1">
                      <label class="text-success" for="">Your Country<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="country" placeholder="---" required>
                  </div>
                  <div class="form-group m-1">
                      <label class="text-success" for="">Address<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="address" placeholder="---" required>
                  </div>
                  <div class="form-group m-1">
                      <label class="text-success" for="">City<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="city" placeholder="---" required>
                  </div>
                  <div class="form-group m-1">
                      <label class="text-success" for="">Phone number<span class="text-danger">*</span></label>
                      <input type="text" class="form-control" name="phone" placeholder="eg +255 ---" required>
                  </div>
                  <div class="form-group m-1">
                      <label class="text-success" for="">Password<span class="text-danger">*</span></label>
                      <input type="password" class="form-control" name="password" placeholder="---" required>
                  </div>
                  <div class="form-group mt-3">
                      <button style="background:#ff9933" class="btn btn-sm text-light"  type="submit"><b>Register & get price qoute</b></button>
                  </div>
              </form>
          </div>
        </div>
       </div>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>


  <div class="container">
     
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
