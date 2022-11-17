<div class="card shadow  mt-3 mb-3">
    <div class="card-header">
      <h5 class="text-info"><b>Search by categories</b></h5>
    </div>
    <form class="m-3" action="{{route('search_car')}}" method="post" >
      @csrf
      <div class="row col-lg-9 col-md-6 col-sm-4">
       <div class="col">
          <div class="form-group m-1">
            <label class="text-success" for="">Car Name</label>
               <select class="form-control" name="car_name" id="">
                        <option value="---" >---</option>  
                        <option value="IST">IST</option>  
                        <option value="Outlander">Outlander</option>
                        <option value="CX-5">CX-5</option>
                        <option value="X5">X5</option>
                        <option value="Carina">Carina</option>
                        <option value="Murano">Murano</option>
                        <option value="Vanguard">Vanguard</option>
                        <option value="Noah">Noah</option>
                        <option value="Spacio">Spacio</option>
                        <option value="Harrier">Harrier</option>
                        <option value="Dualis">Dualis</option>
               </select>
          </div>
        </div>
        <div class="col">
          <div class="form-group m-1">
            <label class="text-success" for="">Year of production</label>
            <select class="form-control" name="ProductionYear" id="">
    <option value="">---</option>
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
        <div class="col">
          <div class="form-group m-1">
            <label class="text-success" for="">Make</label>
            <select name="MakeCompany" id="" class="form-control">
      <option>---</option>
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
        <div class="col">
          <div class="form-group m-1">
            <label class="text-success" for="">Engine Size</label>
            <input type="text" class="form-control"  name="engine_size" placeholder="---">
          </div>
        </div>
        </div>
        <div class="row col-lg-9 col-md-6 col-sm-4">
       <div class="col">
          <div class="form-group m-1">
            <label class="text-success" for="">Body Type</label>
            <select class="form-control" name="bodyType" id="">
                        <option >----</option>
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
        <div class="col">
          <div class="form-group m-1">
            <label class="text-success" for="">Transmission</label>
            <select class="form-control" name="transmission" id="">
                        <option >----</option>
                        <option value="Automatic" >Automatic</option>
                        <option value="Manual" >Manual</option>
  </select>
          </div>
        </div>
        <div class="col">
          <div class="form-group m-1">
            <label class="text-success" for="">Fuel</label>
            <select class="form-control" name="fuel" id="">
                        <option >----</option>
                        <option value="Petrol" >Petrol</option>
                        <option value="Diesel" >Diesel</option>
            </select>
          </div>
        </div>
        <div class="col">
          <div class="form-group m-1">
            <label class="text-success" for="">Location</label>
            <select class="form-control" name="office" id="">
                        <option >----</option>
                        <option value="Dar es salam, Tanzania" >Dar es salam, Tanzania</option>
                        <option value="Kisumu, Kenya" >Kisumu, Kenya</option>
                        <option value="Nairobi, Kenya">Nairobi, Kenya</option>
                        <option value="Mombasa, Kenya">Mombasa, Kenya</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Japan">Japan</option>
                        <option value="Dubai">Dubai</option>
  </select>
          </div>
        </div>
        </div>
        
          <div class="form-group m-1">
            <button type="submit" class="btn btn-lg bg-success text-light">search<i class="bi bi-search m-2"></i></button>
          </div>
  
        
      </form>
    </div>