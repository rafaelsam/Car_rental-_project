<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Image;
use App\Models\Customer;

use Illuminate\support\Facades\Storage;
use File;
use Illuminate\Support\Facades\DB;
use App\Notifications\EmailNotification;
use Notification;

class PostController extends Controller
{
    //

    public function store(Request $request){

    

        if($request->hasFile("cover_p")){ 
            $file= $request->file("cover_p");

            $imageName = $request->chasis.'_'.$file->getClientOriginalName();

            $file->move(public_path("coverImages/"), $imageName);

            $product = new Product([
                "carName" => $request->carName,
                "MakeCompany" => $request->MakeCompany,
                "price" => $request->price,
                "stockId" => $request->stockId,
                "EngineType" => $request->EngineType,
                "ProductionYear" => $request->ProductionYear,
                "seat" => $request->seat,
                "color" => $request->color,
                "door" => $request->door,
                "bodyType" => $request->bodyType,
                "Dimension" => $request->Dimension,
                "mileage" => $request->mileage,
                "chasis" => $request->chasis,
                "drive" => $request->drive,
                "office" => $request->office,            
                "transmission" => $request->transmission,
                "EngineCapacity" => $request->EngineCapacity,
                "steering" => $request->steering,
                "weight" => $request->weight,
                "fuel" => $request->fuel,
                "airbag" => $request->airbag,
                "p_steering" => $request->p_steering,
                "p_window" => $request->p_window,
                "radio" => $request->radio,
                "cd_player" => $request->cd_player,
                "back_camera" => $request->back_camera,
                "power_seat" => $request->power_seat,
                "back_tire" => $request->back_tire,
                "grill_guard" => $request->grill_guard,
                "wheel_sp" => $request->wheel_sp,
                "push_start" => $request->push_start,
                "fog_light" => $request->fog_light,
                "P_mirror" => $request->P_mirror,
                "sp_tire" => $request->sp_tire,
                "side_airbag" => $request->side_airbag,
                "navigation" => $request->navigation,
                "a_c" => $request->a_c,
                "sun_roof" => $request->sun_roof,
                "leather_seat" => $request->leather_seat,
                "alloy_wh" => $request->alloy_wh,
                "jack" => $request->jack,
                "body_kit" => $request->body_kit,
                "cover_p" => $imageName
            ]  
            );
    
            $product->save();
        }

        if($request->hasFile("extra_p")){
            $files = $request->file("extra_p");
            foreach($files as $file){
                $imageName = $request->chasis.'_'.$file->getClientOriginalName();
                $request['product_id'] = $product->id;
                $request['image'] = $imageName;
                $file->move(public_path("/otherImages"), $imageName);
                Image::create($request->all());
            }
        }


        return redirect('carstock')->with('flash_message','Data added successfully');


    }

    public function update(Request $request, $id){
        $products = Product::findOrFail($id);
        $products->update([
            "carName" => $request->carName,
            "MakeCompany" => $request->MakeCompany,
            "price" => $request->price,
            "stockId" => $request->stockId,
            "EngineType" => $request->EngineType,
            "ProductionYear" => $request->ProductionYear,
            "seat" => $request->seat,
            "color" => $request->color,
            "door" => $request->door,
            "bodyType" => $request->bodyType,
            "Dimension" => $request->Dimension,
            "mileage" => $request->mileage,
            "chasis" => $request->chasis,
            "drive" => $request->drive,
            "office" => $request->office,            
            "transmission" => $request->transmission,
            "EngineCapacity" => $request->EngineCapacity,
            "steering" => $request->steering,
            "weight" => $request->weight,
            "fuel" => $request->fuel
        ]);
        
        return redirect('carstock')->with('success_update', 'Data updated successifully');
    }


    public function update_accessories(Request $request, $id){
        $products = Product::findOrFail($id);
        $products->update([
            "airbag" => $request->airbag,
            "p_steering" => $request->p_steering,
            "p_window" => $request->p_window,
            "radio" => $request->radio,
            "cd_player" => $request->cd_player,
            "back_camera" => $request->back_camera,
            "power_seat" => $request->power_seat,
            "back_tire" => $request->back_tire,
            "grill_guard" => $request->grill_guard,
            "wheel_sp" => $request->wheel_sp,
            "push_start" => $request->push_start,
            "fog_light" => $request->fog_light,
            "P_mirror" => $request->P_mirror,
            "sp_tire" => $request->sp_tire,
            "side_airbag" => $request->side_airbag,
            "navigation" => $request->navigation,
            "a_c" => $request->a_c,
            "sun_roof" => $request->sun_roof,
            "leather_seat" => $request->leather_seat,
            "alloy_wh" => $request->alloy_wh,
            "jack" => $request->jack,
            "body_kit" => $request->body_kit,        
        ]);

 
        return redirect('carstock')->with('success_update', 'Data updated successifully');
    }

    public function update_image(Request $request, $id){
        $products = Product::findOrFail($id);
    
        if(File::exists("coverImages/", $products->cover_p)){
            File::delete("coverImages/", $products->cover_p);
        }

        $file= $request->file("cover_p");
        $products->cover_p = time().'_'.$file->getClientOriginalName();
        $file->move(public_path("coverImages/"), $products->cover_p);
        $request['cover_p'] = $products->cover_p;

        $products->update([
            "cover_p" => $products->cover_p
        ]);

        if($request->hasFile("extra_p")){
            $files = $request->file("extra_p");
            foreach($files as $file){
                $imageName = time().'_'.$file->getClientOriginalName();
                $request['product_id'] = $products->id;
                $request['image'] = $imageName;
                $file->move(public_path("/otherImages"), $imageName);
                Image::create($request->all());
            }
        }   
        return redirect('carstock')->with('success_update', 'Data updated successifully');
    }



    public function destroy($id){
        $product = Product::findOrFail($id);

        if(File::exists("coverImages/", $product->cover_p)){
            File::delete("coverImages/", $product->cover_p);
        }

        $images = Image::where("product_id", $product->id)->get();
        foreach($images as $image){
            if(File::exists("otherImages/", $image->image)){
                File::delete("otherImages/", $image->image);
            }
        }  
        $product->delete();
        return redirect('carstock')->with('success_delete', 'Data deleted successifully');
    }

    public function edit($id){
        $products=Product::findorFail($id);
        $images=Image::find($id);

        return view("admin/editcar")->with(['products'=>$products, 'images'=>$images]);      
    }

    public function deleteImage($id){
        $images = Image::findOrFail($id);

        if(File::exists("otherImages/", $images->image)){
            File::delete("otherImages/", $images->image);
        }
        Image::find($id)->delete();
        return back();
    }

    public function view($id){
        $products=Product::findorFail($id);
        $images=Image::find($id);
        return view("admin/viewCar")->with(['products'=>$products, 'images'=>$images]);       
    }

    public function view_car($id){
        $products=Product::findorFail($id);
        $images=Image::find($id);
        $all = Product::all();
        return view("view_car")->with(['products'=>$products, 'images'=>$images, 'all'=>$all]);    
    }

    public function print_car_function(){

    }
    public function print_car_info($id){
        $products=Product::findorFail($id);
        $images=Image::find($id);
        return view("print")->with(['products'=>$products, 'images'=>$images]);
    }

    public function search_car(Request $request){
        $products = DB::select('select * from products where carName LIKE "%'.$request->car_name.'%" or MakeCompany = "'.$request->MakeCompany.'"
        or ProductionYear = "'.$request->ProductionYear.'"
        or  bodyType = "'.$request->bodyType.'"
        or office = "'.$request->office.'"
        or EngineCapacity = "'.$request->engine_size.'"
        or transmission = "'.$request->transmission.'"
        or fuel = "'.$request->fuel.'" ');

        $all = Product::all();
        return view("search_view")->with(['products'=>$products, 'all'=>$all]);      
    }

    public function admn_search(Request $request){
        $products = DB::select('select * from products where carName LIKE "%'.$request->all_search.'%" or MakeCompany = "'.$request->all_search.'"
        or ProductionYear = "'.$request->all_search.'"
        or  bodyType = "'.$request->all_search.'"
        or office = "'.$request->all_search.'"
        or EngineCapacity = "'.$request->all_search.'"
        or transmission = "'.$request->all_search.'"
        or fuel = "'.$request->all_search.'"
        or chasis = "'.$request->all_search.'" ');  
        return view("admin.search_view_admin")->with('products', $products);      
    }

    public function user_search(Request $request){
        $products = DB::select('select * from products where carName LIKE "%'.$request->all_search.'%" or MakeCompany = "'.$request->all_search.'"
        or ProductionYear = "'.$request->all_search.'"
        or  bodyType = "'.$request->all_search.'"
        or office = "'.$request->all_search.'"
        or EngineCapacity = "'.$request->all_search.'"
        or transmission = "'.$request->all_search.'"
        or fuel = "'.$request->all_search.'"
        or chasis = "'.$request->all_search.'" ');  
        $all = Product::all();
        return view("search_view")->with(['products'=>$products, 'all'=>$all]);      
    }
    
    public function download_file(Request $request, $cover_p){  
        return response()->download(public_path('coverImages/'.$cover_p));
    }

    public function download_extra(Request $request, $image){
        return response()->download(public_path('otherImages/'.$image));
    }

    public function email_view($id){
        $customers=Customer::find($id);
        return view('mail.email_view')->with('customers', $customers);
    }

    public function send_email(Request $request, $id){
        $customer_data = Customer::find($id);

        $details = [
            'greeting' => $request->greeting,
            'body' => $request->body,
            'action_text' => $request->action_text,
            'action_url' => $request->action_url,
            'end_part' => $request->end_part
        ];

        Notification::send($customer_data, new EmailNotification($details));      
        return redirect()->back();
    }
}
