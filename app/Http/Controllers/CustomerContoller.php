<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Order;
use App\Models\Comment;
use Hash;
use Sha1;
use Session;
use Illuminate\Support\Facades\DB;

class CustomerContoller extends Controller
{
    //
    public function custom_register(Request $request){
        $request->validate([
            'full_name'=>'required',
            'email'=>'required',
            'country'=>'required',
            'address'=>'required',
            'city'=>'required',
            'phone'=>'required',
            'password'=>'required'
        ]);

        $customer = new Customer();
        $customer->full_name = $request->full_name;
        $customer->email = $request->email;
        $customer->country = $request->country;
        $customer->address = $request->address;
        $customer->city = $request->city;
        $customer->phone = $request->phone;
        $customer->password = Hash::make($request->password);
        $customer->verification_code = Sha1(time());
        $result = $customer->save();

        if($result != null){
            // send email
             MailController::sendSignupEmail($customer->full_name, $customer->email, $customer->verification_code);
            // show message
            return redirect()->back()->with(session()->flash('messej_reg', 'Your account has been created successfully. Please login'));

        }else{
            return redirect()->back()->with(session()->flash('messej_danger', 'Something went wrong'));
        }

        // return back()->with('messej_reg', 'Registered successifly');
    }

    public function verifyCustomer(Request $request){
        $verification_code = \Illuminate\support\Facades\Request::get('code');
        $customer = Customer::where(['verification_code' => $verification_code])->first();
        if($customer != null){
            $customer->is_verified =1;
            $customer->save();
            return redirect()->route('custom_login_register')->with(session()->flash('messej_verified', 'Your account has been verified successfully. Please login'));
        }
        else{
            return redirect()->route('custom_login_register')->with(session()->flash('messej_not_verified', 'Your account has not been verified. Please try again'));
        }
    }


    public function custom_login(Request $req){
        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);

        $customer = Customer::where('email', '=', $req->email)->first();

        if($customer){
            if(Hash::check($req->password, $customer->password)){
                $req->Session()->put('Custom_logId', $customer->email);
                return redirect()->route('index');
            }else{
                return back()->with('fail', 'Password do not match');
            }
        }
        else{
            return back()->with('fail', 'Incorrect email !');
        }
    }

    public function custom_logout(){
        if(Session::has('Custom_logId')){
            Session::pull('Custom_logId');
            return redirect()->route('index');
        }
    }


    public function custom_login_register(){
        return view('customer_log');
    }

    public function customer(){
        $customers = Customer::all();
        return view('admin.customer_view')->with('customers', $customers);
    }

    public function order_now($id){
        $selected = Product::find($id);
        $session_data = Session::get('Custom_logId');

        $data = Customer::all()->where('email', $session_data)->first();
        return view('order')->with(['selected'=>$selected, 'data'=>$data]);
    }

    public function make_order($id){    
        $session_data = Session::get('Custom_logId');
        $data = Customer::all()->where('email', $session_data)->first();

            $order=new Order;
            $order->product_id=$id;           
            $order->customer_id=$data->id;
            
            $check_order = DB::select('select * from orders where product_id = "'.$order->product_id.'" and customer_id = "'.$order->customer_id.'"');         
            if($check_order){
                return back()->with('check_order', 'This order already submited');
            }
            else{
                $result = $order->save();
                if($result){
                    $selected = Product::find($id);
                    $session_data = Session::get('Custom_logId');
                    $data = Customer::all()->where('email', $session_data)->first();
                    $order_success = 'Your order has been submited successfuly';

                    // send email to notify customer's order
                    MailController::sendOrderEmail($selected, $data);

                    return view('buynow')->with(['selected'=>$selected, 'data'=>$data, 'order_success'=>$order_success] );
                }else{
                    return back()->with('order_failed', 'Your order did not submited, please try again');
                }  
            }                            
    }

    public function price_quote($id){
        $products = Product::find($id);
        $all = Product::all();
        return view('price_qoute')->with(['products'=>$products, 'all'=>$all]);
    }

    public function send_price_quote($id){
        $products = Product::find($id);
        $session_data = Session::get('Custom_logId');
        $data = Customer::all()->where('email', $session_data)->first();
          // send email to notify customer about price qoute
          MailController::send_price_quote($products, $data);
        return back()->with('quote_success', 'Your request has been sent successfuly, check it in your email');
    }
    
    public function customer_profile(){        
        $session_data = Session::get('Custom_logId');  
        $data = Customer::where('email', $session_data)->first();      

        $customer_order = DB::table('orders')
        ->join('products', 'products.id', '=', 'orders.product_id')
         ->join('customers', 'customers.id', '=', 'orders.customer_id')
        ->where('orders.customer_id', '=', $data->id)
        ->get();      
        return view('customer_profile')->with(['customer_order'=>$customer_order, 'data'=>$data]);
    }

    public function comment(Request $request){
        $session_data = Session::get('Custom_logId');
        $data = Customer::where('email', $session_data)->first();
        $comments = new Comment(
            ["commentor_name" => $data->full_name,
            "comments" => $request->comments]
        );
        $result = $comments->save();
         if($result){
             return back()->with('comment_success', 'Comment has been sent successfully');
         }
    }

    public function editCustomer($id){
        $editCustomer = Customer::find($id);
        return view('admin.edit_customer')->with('editCustomer', $editCustomer);
    }

    public function updateCustomer(Request $req, $id){
        $updateCustomer = Customer::find($id);
        $updateCustomer->update([
            "full_name" => $req->full_name,
            "country" => $req->country,
            "city" => $req->city,
            "address" => $req->address,
            "phone" => $req->phone
        ]);
        return redirect('customer')->with('updateCustomer', 'Data Updated Successfully');
    }

    public function delete_customer($id){
        $deleteCustomer = Customer::find($id)->delete();
        return redirect('customer')->with('deleteCustomer', 'Data deleted successfully');
    }

    public function view_customer($id){
        $view_customer = Customer::find($id);

        $customer_order = DB::table('orders')
        ->join('products', 'products.id', '=', 'orders.product_id')
         ->join('customers', 'customers.id', '=', 'orders.customer_id')
        ->where('orders.customer_id', '=', $id)
        ->get();

        return view('admin.view_customer')->with(['view_customer'=>$view_customer, 'customer_order'=>$customer_order]);
    }

    public function view_comment(){
        $comments = Comment::all();
        return view('admin.view_comment')->with('comments', $comments);
    }

    public function delete_comment($id){
        $delete_comment = Comment::find($id)->delete();
        return back()->with('delete_comment', 'Data deleted successfully');
    }
}
