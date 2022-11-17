<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Order;
use Hash;
use Sha1;
use Session;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    //
    public function view_order(){
        $orders = Order::orderBy('id', 'DESC')->get();
        return view('admin.view_order')->with('orders', $orders);
    }

    public function order_details($id){      
        $orders_data = DB::table('orders')
            ->join('products', 'products.id', '=', 'orders.product_id')
             ->join('customers', 'customers.id', '=', 'orders.customer_id')
            ->where('orders.id', '=', $id)
            ->get();
            $order_id = Order::find($id);

        return view('admin.order_details')->with(['orders_data'=>$orders_data, 'order_id'=>$order_id]);
    }

    public function delete_order($id){
        $order_delete = Order::find($id)->delete();
        return redirect('view_order')->with('order_delete', 'Order deleted successifuly');
    }

    public function search_order(Request $req){
        $search_order = Order::where('id', $req->order_id)->get();
        return view('admin.search_order')->with('search_order', $search_order);
    }
}
