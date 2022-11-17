
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Al Husnain Traders Limited</title>

<meta content="" name="description">
  <meta content="" name="keywords">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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


  <style>
    .row_img{
      position: relative;
      width:60%;
      margin: 50px auto;
      padding: 50px 20px;
      border-radius: 7px;
      background:white;
      border: 2px solid black;
    }

    input[type="file"]{
      display:none;
    }

    .file{
      display: block;
      position: relative;
      width: 300px;
      background:#025bee;
      text-align:center;
      border-radius: 7px;
      margin:  auto;
      padding: 18px 10px;
      color:white;
      cursor: pointer;
    }
    .row_img p{
      text-align:center;
      margin:20px 0 30px 0;
    }

    #images{
      width:100px;
      border: 1px solid black;
      position:relative;
      margin:auto;
    }
  </style>




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

  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="">Al Husnain Traders limited</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>      
          <li><a class="getstarted scrollto" href="{{route('carstock')}}">Back</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Form Section ======= -->
  <section id="contact" class="contact">
      <div class="container">
        <div class="row">

        <form action="{{route('update', $products->id)}}" method="post" enctype="multipart/form-data">
          @csrf
  <div class="row mt-3">

    <div class="col">
      <div class="form-group">
      <label class="text text-success mb-2" for="">Car Name</label>
      <input type="text" value="{{$products->carName}}" class="form-control" placeholder="-----" name="carName" required>
      </div>
    </div>

    <div class="col">
      <div class="form-group">
      <label class="text text-success mb-2" for="">Make Company</label>
      <select name="MakeCompany" id="" class="form-control">
      <option value="{{$products->MakeCompany}}">{{$products->MakeCompany}}</option>
      <option value="Acura">Acura</option>
<option value="Allis Chalmers">Allis Chalmers</option>
<option value="Alpha Romeo">Alpha Romeo</option>
<option value="AMC">AMC</option>
<option value="Audi">Audi</option>
<option value="BMW">BMW</option>
<option value="Briggs & Stratton">Briggs & Stratton</option>
<option value="Buick">Buick</option>
<option value="Cadillac">Cadillac</option>
<option value="Caterpillar">Caterpillar</option>
<option value="Chevrolet">Chevrolet</option>
<option value="Chrysler">Chrysler</option>
<option value="Continental">Continental</option>
<option value="Cummins">Cummins</option>
<option value="Detroit Diesel">Detroit Diesel</option>
<option value="Deutz">Deutz</option>
<option value="Deutz(Heavy Duty Trucks)">Deutz(Heavy Duty Trucks)</option>
<option value="Dodge">Dodge</option>
<option value="Fiat">Fiat</option>
<option value="Ford">Ford</option>
<option value="Ford(Heavy Duty Trucks)">Ford(Heavy Duty Trucks)</option>
<option value="Geo">Geo</option>
<option value="GMC">GMC</option>
<option value="Henshel">Henshel</option>
<option value="Hercules">Hercules</option>
<option value="Hino">Hino</option>
<option value="Honda">Honda</option>
<option value="Hunmer">Hunmer</option>
<option value="Honda-Industrial">Honda-Industrial</option>
<option value="Hyundai">Hyundai</option>
<option value="Infinity">Infinity</option>
<option value="International">International</option>
<option value="Isuzu">Isuzu</option>
<option value="Isuzu(Heavy Duty Trucks)">Isuzu(Heavy Duty Trucks)</option>
<option value="Iveco-Fiat">Iveco-Fiat</option>
<option value="Jaguar">Jaguar</option>
<option value="Jeep">Jeep</option>
<option value="John Deere">John Deere</option>
<option value="Kia">Kia</option>
<option value="Kohler">Kohler</option>
<option value="Komatsu">Komatsu</option>
<option value="Kubota">Kubota</option>
<option value="Land Rove">Land Rover</option>
<option value="Lexus">Lexus</option>
<option value="Lincoln">Lincoln</option>
<option value="Lister Petter">Lister Petter</option>
<option value="Mack">Mack</option>
<option value="Mazda">Mazda</option>
<option value="Mercedes">Mercedes</option>
<option value="Mercedes(Heavy Duty Trucks)">Mercedes(Heavy Duty Trucks)</option>
<option value="Mercury">Mercury</option>
<option value="Mini Cooper">Mini Cooper</option>
<option value="Mitsubishi">Mitsubishi</option>
<option value="Mitsubishi Fuso">Mitsubishi Fuso</option>
<option value="Nissan">Nissan</option>
<option value="Oldsmobile">Oldsmobile</option>
<option value="Onan">Onan</option>
<option value="Perkins">Perkins</option>
<option value="Peugeot">Peugeot</option>
<option value="Plymouth">Plymouth</option>
<option value="Pontiac">Pontiac</option>
<option value="Porsche">Porsche</option>
<option value="Renault">Renault</option>
<option value="Saab">Saab</option>
<option value="Saturn">Saturn</option>
<option value="Scania">Scania</option>
<option value="Scion">Scion</option>
<option value="Subaru">Subaru</option>
<option value="Suzuki">Suzuki</option>
<option value="Toyota">Toyota</option>
<option value="Tractors (Massey Fergurson)">Tractors (Massey Fergurson)</option>
<option value="Tractors (Ford)">Tractors (Ford)</option>
<option value="UD-Nissan">UD-Nissan</option>
<option value="Volvo">Volvo</option>
<option value="Volvo Penta">Volvo Penta</option>
<option value="Volvo Truck">Volvo Truck</option>
<option value="Volkswagen">Volkswagen</option>
<option value="Wisconsin">Wisconsin</option>
<option value="Wisconsin-Robin">Wisconsin-Robin</option>
<option value="Yanmer-Industrial">Yanmer-Industrial</option>
<option value="Yanmer-marine">Yanmer-marine</option>
      </select>
      </div>
    </div>
  
    </div>

    <div class="row mt-3">

<div class="col">
  <div class="form-group">
  <label class="text text-success mb-2" for="">Car Price</label>
  <input type="text" value="{{$products->price}}" class="form-control" placeholder="-----" name="price">
  </div>
</div>

<div class="col">
  <div class="form-group">
  <label class="text text-success mb-2" for="">Stock Id</label>
  <input type="text" value="{{$products->stockId}}" class="form-control" placeholder="-----" name="stockId">
  </div>
</div>

</div>    

<div class="row mt-3">

<div class="col">
  <div class="form-group">
  <label class="text text-success mb-2" for="">Engine Type</label>
  <input type="text" value="{{$products->EngineType}}" class="form-control" placeholder="-----" name="EngineType">
  </div>
</div>

<div class="col">
  <div class="form-group">
  <label class="text text-success mb-2" for="">Production Year</label>
  <select class="form-control"  name="ProductionYear" id="">
    <option value="{{$products->ProductionYear}}">{{$products->ProductionYear}}</option>
    <option value="2022">2022</option>
    <option value="2021">2021</option>
    <option value="2020">2020</option>
    <option value="2019">2019</option>
    <option value="2018">2018</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2017">2017</option>
    <option value="2016">2016</option>
    <option value="2015">2015</option>
    <option value="2014">2014</option>
    <option value="2013">2013</option>
    <option value="2012">2012</option>
    <option value="2011">2011</option>
    <option value="2010">2010</option>
    <option value="2009">2009</option>
    <option value="2008">2008</option>
    <option value="2007">2007</option>
    <option value="2006">2006</option>
    <option value="2005">2005</option>
    <option value="2004">2004</option>
    <option value="2003">2003</option>
    <option value="2002">2002</option>
    <option value="2001">2001</option>
    <option value="2000">2000</option>
    <option value="1999">1999</option>
    <option value="1998">1998</option>
    <option value="1997">1997</option>
    <option value="1996">1996</option>
    <option value="1995">1995</option>
    <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
  </select>
  </div>
</div>

</div>    

<div class="row mt-3">

<div class="col">
  <div class="form-group">
  <label class="text text-success mb-2" for="">Colour</label>
  <select class="form-control" name="color" id="">
    <option value="{{$products->color}}">{{$products->color}}</option>
    <option value="Black">Black</option>
    <option value="Red">Red</option>
    <option value="Yellow">Yellow</option>
    <option value="Green">Green</option>
    <option value="Purple">Purple</option>
    <option value="White">White</option>
    <option value="Silver">Silver</option>
    <option value="Gold">Gold</option>
    <option value="Blue">Blue</option>
    <option value="Dark Blue">Dark Blue</option>
    <option value="Light Blue">Light Blue</option>
    <option value="Wheat">Wheat</option>
    <option value="Grey/Gray">Grey/Gray</option>
    <option value="Pink">Pink</option>
    <option value="Brown">Brown</option>
    <option value="Violet">Violet</option>
    <option value="Maroon">Maroon</option>
    <option value="Multi Colour">Multi Colour</option>
  </select>
  </div>
</div>

<div class="col">
  <div class="form-group">
  <label class="text text-success mb-2" for="">Seats</label>
  <select class="form-control" name="seat" id="">
                          <option value="{{$products->seat}}">{{$products->seat}}</option>
                         <option value="1">1</option>
                         <option value="2">2</option>
                        <option value="3">3</option>
                         <option value="4">4</option> 
                         <option value="5">5</option> 
                         <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                         <option value="9">9</option> 
                         <option value="10">10</option> 
                         <option value="11">11</option>
                          <option value="12">12</option><option >2</option>
                         <option value="13">13</option> 
                         <option value="14">14</option> 
                         <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">18</option>
                         <option value="18">19</option> 
                         <option value="19">20</option> 
                         <option value="20">21</option>
                          <option value="21">22</option>
                             <option value="22">23</option>
                                <option value="23">24</option>   
                                <option value="24">25</option>   
                                <option value="25">26</option>
                                   <option value="26">27</option>
                                      <option value="28">28</option>
                                         <option value="29">29</option>
                                            <option value="30">30</option>
  </select>
  </div>
</div>
</div>  

<div class="row mt-3">

<div class="col">
  <div class="form-group">
  <label class="text text-success mb-2" for="">Doors</label>
  <select class="form-control" name="door" id="">
                        <option value="{{$products->door}}">{{$products->door}}</option>
                        <option value="2">2</option>
                         <option value="3">3</option> 
                         <option value="4">4</option> 
                         <option value="5">5</option>
                          <option value="6">6</option>
  </select>
  </div>
</div>

<div class="col">
  <div class="form-group">
  <label class="text text-success mb-2" for="">Body Type</label>
  <select class="form-control" name="bodyType" id="">
                        <option value="{{$products->bodyType}}">{{$products->bodyType}}</option>
                        <option value="Hatchback">Hatchback</option>
                        <option value="Sedan">Sedan</option>
                        <option value="Wagon">Wagon</option>
                        <option value="SUV">SUV</option>
                        <option value="Truck">Truck</option>
                        <option value="Pick up">Pick up</option>
                        <option value="Coupe">Coupe</option>                    
                        <option value="Mini van">Mini van</option>
                        <option value="Mini bu">Mini bus</option>
                        <option value="Jeep">Jeep</option>
  </select>
  </div>
</div>
</div> 

<div class="row mt-3">

<div class="col">
  <div class="form-group">
  <label class="text text-success mb-2" for="">Dimension</label>
  <input type="text" value="{{$products->dimension}}" class="form-control" placeholder="--l--w--h--" name="Dimension">
  </div>
</div>

<div class="col">
  <div class="form-group">
  <label class="text text-success mb-2" for="">Mileage</label>
  <input type="text" value="{{$products->mileage}}" class="form-control" placeholder="---km--" name="mileage">
  </div>
</div>

</div>    


<div class="row mt-3">
<div class="col">
  <div class="form-group">
  <label class="text text-success mb-2" for="">Chasis Number</label>
  <input type="text" value="{{$products->chasis}}" class="form-control" placeholder="----" name="chasis">
  </div>
</div>

<div class="col">
  <div class="form-group">
  <label class="text text-success mb-2" for="">Drive</label>
  <select class="form-control" name="drive" id="">
                        <option value="{{$products->drive}}"  >{{$products->drive}}</option>
                        <option value="2WD">2WD</option>
                        <option value="4WD" >4WD</option>
  </select>
  </div>
</div>
</div>  

<div class="row mt-3">
<div class="col">
  <div class="form-group">
  <label class="text text-success mb-2" for="">Location</label>
  <select class="form-control" name="office" id="">
                        <option value="{{$products->office}}" >{{$products->office}}</option>
                        <option value="Dar es salam, Tanzania" >Dar es salam, Tanzania</option>
                        <option value="Kisumu, Kenya" >Kisumu, Kenya</option>
                        <option value="Nairobi, Kenya">Nairobi, Kenya</option>
                        <option value="Mombasa, Kenya">Mombasa, Kenya</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Japan">Japan</option>
                        <option value="Dubai">Dubai</option>
  </select>
  </div>
</div>

<div class="col">
  <div class="form-group">
  <label class="text text-success mb-2" for="">Transmission</label>
  <select class="form-control" name="transmission" id="">
                        <option value="{{$products->transmission}}" >{{$products->transmission}}</option>
                        <option value="Automatic" >Automatic</option>
                        <option value="Manual" >Manual</option>
  </select>
  </div>
</div>
</div>


<div class="row mt-3">
<div class="col">
  <div class="form-group">
  <label class="text text-success mb-2" for="">Engine Capacity</label>
  <input type="text" value="{{$products->EngineCapacity}}" class="form-control" placeholder="----" name="EngineCapacity">
  </div>
</div>

<div class="col">
  <div class="form-group">
  <label class="text text-success mb-2" for="">Steering</label>
  <select class="form-control" name="steering" id="">
                        <option value="{{$products->steering}}">{{$products->steering}}</option>
                        <option value="Right" >Right</option>
                        <option value="Left">Left</option>
  </select>
  </div>
</div>
</div>

<div class="row mt-3">
<div class="col">
  <div class="form-group">
  <label class="text text-success mb-2" for="">Weight</label>
  <input type="text" value="{{$products->weight}}" class="form-control" placeholder="--kg--" name="weight">
  </div>
</div>

<div class="col">
  <div class="form-group">
  <label class="text text-success mb-2" for="">Fuel</label>
  <select class="form-control" name="fuel" id="">
                        <option value="{{$products->fuel}}" >{{$products->fuel}}</option>
                        <option value="Petrol" >Petrol</option>
                        <option value="Diesel" >Diesel</option>
  </select>
  </div>
</div>
</div>
<div class="row mt-3">
<div class="col">
  <div class="form-group">
<button class=" btn btn-success col-lg-4 btn-sm m-1" type="submit">Update Car Information</button>
  </div>
</div>
</form>


        <div class="card shadow m-3">
                <div class="card-header mt-3 rounded-0 shadow-none" >
                    <div class="card-body p-1 rounded-0 shadow-none ">
                     <div class=" h4 font-weight-bolder text-success"><b>Update Accessories</b></div>
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
<h5 class="text-success mt-3 card-header"></h5>

<form  action="{{route('update_accessories', $products->id)}}" method="post" enctype="multipart/form-data">
  @csrf
<div class="row">
<div class="col">
    <div class="form-check form-check-inline">
        <input id="my-input" class="form-check-input" type="checkbox" name="airbag" value="true">
        <label for="my-input" class="form-check-label">Airbag</label>
    </div>
</div>
<div class="col">
    <div class="form-check form-check-inline">
        <input id="my-input" class="form-check-input" type="checkbox" name="p_steering" value="true">
        <label for="my-input" class="form-check-label">Power Steering</label>
    </div>
</div>
<div class="col">
    <div class="form-check form-check-inline">
        <input id="my-input" class="form-check-input" type="checkbox" name="p_window" value="true">
        <label for="my-input" class="form-check-label">Power Window</label>
    </div>
</div>
<div class="col">
    <div class="form-check form-check-inline">
        <input id="my-input" class="form-check-input" type="checkbox" name="radio" value="true">
        <label for="my-input" class="form-check-label">Radio</label>
    </div>
</div>
<div class="col">
    <div class="form-check form-check-inline">
        <input id="my-input" class="form-check-input" type="checkbox" name="cd_player" value="true">
        <label for="my-input" class="form-check-label">CD Player</label>
    </div>
</div>
<div class="col">
    <div class="form-check form-check-inline">
        <input id="my-input" class="form-check-input" type="checkbox" name="back_camera" value="true">
        <label for="my-input" class="form-check-label">Back Camera</label>
    </div>
</div>
</div>
<div class="row">
    <div class="col">
        <div class="form-check form-check-inline">
            <input id="my-input" class="form-check-input" type="checkbox" name="power_seat" value="true">
            <label for="my-input" class="form-check-label">Power Seats</label>
        </div>
    </div>
    <div class="col">
        <div class="form-check form-check-inline">
            <input id="my-input" class="form-check-input" type="checkbox" name="back_tire" value="true">
            <label for="my-input" class="form-check-label">Back Tire</label>
        </div>
    </div>
    <div class="col">
        <div class="form-check form-check-inline">
            <input id="my-input" class="form-check-input" type="checkbox" name="grill_guard" value="true">
            <label for="my-input" class="form-check-label">Grill guard</label>
        </div>
    </div>
    <div class="col">
        <div class="form-check form-check-inline">
            <input id="my-input" class="form-check-input" type="checkbox" name="sp_tire" value="true">
            <label for="my-input" class="form-check-label">Spare Tire</label>
        </div>
    </div>
    <div class="col">
        <div class="form-check form-check-inline">
            <input id="my-input" class="form-check-input" type="checkbox" name="wheel_sp" value="true">
            <label for="my-input" class="form-check-label">Wheel Spanner</label>
        </div>
    </div>
    <div class="col">
        <div class="form-check form-check-inline">
            <input id="my-input" class="form-check-input" type="checkbox" name="fog_light" value="true">
            <label for="my-input" class="form-check-label">Fog Lights</label>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-2">
        <div class="form-check form-check-inline">
            <input id="my-input" class="form-check-input" type="checkbox" name="push_start" value="true">
            <label for="my-input" class="form-check-label">Push Start</label>
        </div>
    </div>
    <div class="col-2">
        <div class="form-check form-check-inline">
            <input id="my-input" class="form-check-input" type="checkbox" name="P_mirror" value="true">
            <label for="my-input" class="form-check-label">Power Mirror</label>
        </div>
    </div>
    <div class="col-2">
        <div class="form-check form-check-inline">
            <input id="my-input" class="form-check-input" type="checkbox" name="side_airbag" value="true">
            <label for="my-input" class="form-check-label">Side Airbag</label>
        </div>
    </div> <div class="col-2">
        <div class="form-check form-check-inline">
            <input id="my-input" class="form-check-input" type="checkbox" name="navigation" value="true">
            <label for="my-input" class="form-check-label">Navigation</label>
        </div>
    </div>
     <div class="col-2">
        <div class="form-check form-check-inline">
            <input id="my-input" class="form-check-input" type="checkbox" name="a_c" value="true">
            <label for="my-input" class="form-check-label">A/C</label>
        </div>
    </div> 
    <div class="col-2">
        <div class="form-check form-check-inline">
            <input id="my-input" class="form-check-input" type="checkbox" name="sun_roof" value="true">
            <label for="my-input" class="form-check-label">Sun Roof</label>
        </div>
    </div>
   <div class="col-2">
        <div class="form-check form-check-inline">
            <input id="my-input" class="form-check-input" type="checkbox" name="leather_seat" value="true">
            <label for="my-input" class="form-check-label">Leather Seats</label>
        </div>
    </div>
   
    <div class="col-2">
        <div class="form-check form-check-inline">
            <input id="my-input" class="form-check-input" type="checkbox" name="alloy_wh" value="true">
            <label for="my-input" class="form-check-label">Alloy Wheels</label>
        </div>
    </div>

    <div class="col-2">
        <div class="form-check form-check-inline">
            <input id="my-input" class="form-check-input" type="checkbox" name="jack" value="true">
            <label for="my-input" class="form-check-label">Jack</label>
        </div>
    </div>

    <div class="col-2">
        <div class="form-check form-check-inline">
            <input id="my-input" class="form-check-input" type="checkbox" name="body_kit" value="true">
            <label for="my-input" class="form-check-label">Body kit</label>
        </div>
    </div>  
    </div>
    <div class="form-group">
      <button class="btn btn-success btn-sm col-lg-4 m-3" type="submit">Update Accessories</button>
  </div>
    </form>
</div>

    <div class="card shadow mt-3">
        <div class="row">
          <div class="col">
          <div class="d-flex m-2 justify-content-center card-header">
          <h4 class="text-success p-2"><strong>Update Car Images</strong></h4>
        </div>
        <div class="img-fluid ">
           <div class="card mb-3" style="width: 36rem;">
            <img class="card-img-top" src="/coverImages/{{$products->cover_p}}" alt="Card image cap">
            <div class="card-body">
            @foreach ($products->images as $img)
            <form action="{{route('deleteImage', $img->id)}}" method="post">
               @csrf
               <img class="img-fluid border mt-1" src="/otherImages/{{$img->image}}" style="height:120px; width:150px;" alt="">
               <button type="submit" class="text-danger col-lg-3 col-sm-3 col-md-3"><b>X</b></button>
               @method('delete')
            </form>
            @endforeach 
             </div>
           </div>
        </div>
          </div>
          <div class="col">
                <div class="container">
      
      <div class="row_img">
        <form  action="{{route('update_image', $products->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label class="file" for="photo-add"><i class="bi bi-upload"></i>Main picture</label>
          <input type="file" id="photo-add" class="form-control" name="cover_p" accept="image/png, image/jpeg, image/jpg" onchange="loadFile(event)">
          <div class="img-responsive" style="padding-left:40%; margin-top:10px;">
             <img class="img-fluid rounded" style="width:150px; height:150px;" id="output"/>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row_img">
        <div class="form-group">
          <label class="file" for="gallery-photo-add"><i class="bi bi-upload"></i>Other Pictures</label>
          <input type="file" id="gallery-photo-add" class="form-control" name="extra_p[]" accept="image/png, image/jpeg, image/jpg" multiple>
          <p id="no-of-img">No file Chosen</p>
          <div class="gallery">

          </div>
        </div>
      </div>
      <div class="form-group">
      <button class="form-control btn btn-success btn-sm col-lg-4 m-3" type="submit">Update Image</button>
  </div>
      </form>
    </div>

          </div>
        </div>
   
      </div>
    </div>
  </div>
 </div>
      <!--Container for Single image-->
   
             <script>            
               var loadFile = function(event) {
                 var output = document.getElementById('output');
                 output.src = URL.createObjectURL(event.target.files[0]);
                 output.onload = function() {
                   URL.revokeObjectURL(output.src) // free memory
                 }
               };
             </script>


    <!--Container for multiple images-->
    



        </div>

      </div>
    </section><!-- End Form Section -->

    

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
  

<!--jquery for multiple image preview-->
  <script>           
                 $(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img style="width:100px; height:100px;">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }
                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });
});
</script>

      </body>
</html>
