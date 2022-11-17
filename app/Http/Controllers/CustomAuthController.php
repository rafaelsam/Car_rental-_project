<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\Admin;
use App\Models\Product;
use App\Models\Image;
use App\Models\Customer;
use App\Models\Comment;
use App\Models\Order;

class CustomAuthController extends Controller
{
    //
    public function index(){

        // make company
        $toyota = product::where('MakeCompany', 'Toyota');
        $nissan = product::where('MakeCompany', 'Nissan');
        $mazda = product::where('MakeCompany', 'Mazda');
        $BMW = product::where('MakeCompany', 'BMW');
        $mitsubishi = product::where('MakeCompany', 'Mitsubishi');
        $Mercedes = product::where('MakeCompany', 'Mercedes');
        $Subaru = product::where('MakeCompany', 'Subaru');
        $Suzuki = product::where('MakeCompany', 'Suzuki');
        $Isuzu = product::where('MakeCompany', 'Isuzu');
        $Honda = product::where('MakeCompany', 'Honda');
        $Audi = product::where('MakeCompany', 'Audi');
        $Land = product::where('MakeCompany', 'Land Rove');
        $Lexus = product::where('MakeCompany', 'Lexus');
        $Jeep = product::where('MakeCompany', 'Jeep');

        // body type
        $SUV = Product::all()->where('bodyType', 'SUV');
        $Van = Product::all()->where('bodyType', 'Van');
        $Mini = Product::all()->where('bodyType', 'Mini bus');
        $Pickup = Product::all()->where('bodyType', 'Pickup');
        $Wagon = Product::all()->where('bodyType', 'Wagon');
        $Sedan = Product::all()->where('bodyType', 'Sedan');
        $Hatchback = Product::all()->where('bodyType', 'Hatchback');
        $Truck = Product::all()->where('bodyType', 'Truck');
        $Coupe = Product::all()->where('bodyType', 'Coupe');

        // location
        $tz = Product::where('office', 'Dar es salam, Tanzania')->get();
        $kn = Product::all()->where('office', 'Nairobi, Kenya');
        $ug = Product::all()->where('office', 'Uganda');
        $db = Product::all()->where('office', 'Dubai');
        $jp = Product::all()->where('office', 'Japan');

        // assesories
        $airbag = Product::all()->where('airbag', 'true');
        $p_steering = Product::all()->where('p_steering', 'true');
        $p_window = Product::all()->where('p_window', 'true');
        $radio = Product::all()->where('radio', 'true');
        $cd_player = Product::all()->where('cd_player', 'true');
        $back_camera = Product::all()->where('back_camera', 'true');
        $power_seat = Product::all()->where('power_seat', 'true');
        $back_tire = Product::all()->where('back_tire', 'true');
        $grill_guard = Product::all()->where('grill_guard', 'true');
        $wheel_sp = Product::all()->where('wheel_sp', 'true');
        $push_start = Product::all()->where('push_start', 'true');
        $fog_light = Product::all()->where('fog_light', 'true');
        $P_mirror = Product::all()->where('P_mirror', 'true');
        $sp_tire = Product::all()->where('sp_tire', 'true');
        $side_airbag = Product::all()->where('side_airbag', 'true');
        $navigation = Product::all()->where('navigation', 'true');
        $a_c = Product::all()->where('a_c', 'tru');
        $sun_roof = Product::all()->where('sun_roof', 'true');
        $leather_seat = Product::all()->where('leather_seat', 'true');
        $alloy_wh = Product::all()->where('alloy_wh', 'true');
        $jack = Product::all()->where('jack', 'true');
        $body_kit = Product::all()->where('body_kit', 'true');

        // select all
        $products = Product::orderBy('id', 'DESC')->limit(5)->get();

        $comments = Comment::orderBy('id', 'DESC')->limit(6)->get();

        return view('index')->with(['products'=>$products, 'toyota'=>$toyota, 'nissan'=>$nissan, 'mazda'=>$mazda,
         'BMW'=>$BMW, 'mitsubishi'=>$mitsubishi, 'Mercedes'=>$Mercedes,
         'Subaru'=>$Subaru, 'Suzuki'=>$Suzuki, 'Isuzu'=>$Isuzu,'Honda'=>$Honda, 'Audi'=>$Audi, 'Land'=>$Land, 'Lexus'=>$Lexus, 'Jeep'=>$Jeep,
         'SUV'=>$SUV, 'Van'=>$Van, 'Mini'=>$Mini, 'Pickup'=>$Pickup,
        'Wagon'=>$Wagon, 'Sedan'=>$Sedan, 'Hatchback'=>$Hatchback, 'Truck'=>$Truck, 'Coupe'=>$Coupe,
        'tz'=>$tz, 'kn'=>$kn, 'ug'=>$ug, 'db'=>$db, 'jp'=>$jp,
    
        'airbag'=>$airbag, 
        'p_steering'=>$p_steering, 'p_window'=>$p_window,'radio'=>$radio, 'cd_player'=>$cd_player,'back_camera'=>$back_camera, 'power_seat'=>$power_seat,
        'back_tire'=>$back_tire, 'grill_guard'=>$grill_guard, 'wheel_sp'=>$wheel_sp, 'push_start'=>$push_start, 'fog_light'=>$fog_light, 'P_mirror'=>$P_mirror,
        'sp_tire'=>$sp_tire, 'side_airbag'=>$side_airbag, 'navigation'=>$navigation, 'a_c'=>$a_c, 'sun_roof'=>$sun_roof, 'leather_seat'=>$leather_seat,
        'alloy_wh'=>$alloy_wh, 'jack'=>$jack, 'body_kit'=>$body_kit, 'comments'=>$comments]);
    }

    public function reg_log(){
        return view('admin.login');
    }

    public function register(Request $request){
        $request -> validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $admin = new Admin();
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $result = $admin->save();
        return back()->with('messej', 'Registered successifly');
           
    }

    public function login(Request $req){
        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $user = Admin::where('email', '=', $req->email)->first();

        if($user){
            if(Hash::check($req->password, $user->password)){
                $req->Session()->put('logId', $user->email);
                $products = Product::all(); 
                $customers = Customer::all();      
                $orders = Order::all();    
                $comments = Comment::all();           
                return view('admin.dashboard')->with(['products'=>$products, 'customers'=>$customers, 'orders'=>$orders, 'comments'=>$comments]);
            }else{
                return back()->with('fail', 'Password do not match');
            }
        }
        else{
            return back()->with('fail', 'Incorrect email !');
        }
    }

    public function logout(){
        if(Session::has('logId')){
            Session::pull('logId');
            return redirect('reg_log');
        }
    }

    public function dashboard(){    
        $products = Product::all();
        $customers = Customer::all();
        $orders = Order::all();
        $comments = Comment::all();
        return view('admin.dashboard')->with(['products'=>$products, 'customers'=>$customers, 'orders'=>$orders, 'comments'=>$comments]);
    }

    public function carstock(){
        $products = Product::orderBy('id', 'DESC')->get();
        return view('admin.carstock')->with('products', $products);
    }

    public function addnew(){
        return view('admin.addnew');
    }
    public function make_view($make){
        $makeView = Product::all()->where('MakeCompany', $make);
        $products = Product::all();
        return view('view_make')->with(['makeView'=>$makeView, 'products'=>$products]);
    }

    public function bodyType($body){
        $bodyType = Product::all()->where('bodyType', $body);
        $products = Product::all();
        return view('view_body')->with(['bodyType'=>$bodyType, 'products'=>$products]);
    }

    public function view_acc($aseso){
        $airbag = Product::all()->where('airbag', $aseso);
        $p_steering = Product::all()->where('p_steering', $aseso);
        $p_window = Product::all()->where('p_window', $aseso);
        $radio = Product::all()->where('radio', $aseso);
        $cd_player = Product::all()->where('cd_player', $aseso);
        $back_camera = Product::all()->where('back_camera', $aseso);
        $power_seat = Product::all()->where('power_seat', $aseso);
        $back_tire = Product::all()->where('back_tire', $aseso);
        $grill_guard = Product::all()->where('grill_guard', $aseso);
        $wheel_sp = Product::all()->where('wheel_sp', $aseso);
        $push_start = Product::all()->where('push_start', $aseso);
        $fog_light = Product::all()->where('fog_light', $aseso);
        $P_mirror = Product::all()->where('P_mirror', $aseso);
        $sp_tire = Product::all()->where('sp_tire', $aseso);
        $side_airbag = Product::all()->where('side_airbag', $aseso);
        $navigation = Product::all()->where('navigation', $aseso);
        $a_c = Product::all()->where('a_c', $aseso);
        $sun_roof = Product::all()->where('sun_roof', $aseso);
        $leather_seat = Product::all()->where('leather_seat', $aseso);
        $alloy_wh = Product::all()->where('alloy_wh', $aseso);
        $jack = Product::all()->where('jack', $aseso);
        $body_kit = Product::all()->where('body_kit', $aseso);

        $products = Product::all();
        return view('view_aseso')->with(['products'=>$products, 'airbag'=>$airbag, 
        'p_steering'=>$p_steering, 'p_window'=>$p_window,'radio'=>$radio, 'cd_player'=>$cd_player,'back_camera'=>$back_camera, 'power_seat'=>$power_seat,
        'back_tire'=>$back_tire, 'grill_guard'=>$grill_guard, 'wheel_sp'=>$wheel_sp, 'push_start'=>$push_start, 'fog_light'=>$fog_light, 'P_mirror'=>$P_mirror,
        'sp_tire'=>$sp_tire, 'side_airbag'=>$side_airbag, 'navigation'=>$navigation, 'a_c'=>$a_c, 'sun_roof'=>$sun_roof, 'leather_seat'=>$leather_seat,
        'alloy_wh'=>$alloy_wh, 'jack'=>$jack, 'body_kit'=>$body_kit
    ]);
    }

    public function location($loc){
        $office = Product::all()->where('office', $loc);
        $products = Product::all();
        return view('view_office')->with(['office'=>$office, 'products'=>$products]);
    }
}
