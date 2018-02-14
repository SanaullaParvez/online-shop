<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\Payment;
use App\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    public function manageOrderInfo(){
        $orders = Order::all();
//        {
//            "id": 9,
//            "customer_id": 6,
//            "shipping_id": 1,
//            "order_total": 222,
//            "order_status": "Pending",
//            "created_at": "2018-02-14 14:32:09",
//            "updated_at": "2018-02-14 14:32:09"
//        }
        $orders = DB::table('órders')
            ->join('customers','orders.customer_id'.'='.'customers')
            ->join('payments','orders.id'.'='.'payments.order_id')
            ->select('órders.*')->get();

        return $orders;
        return view('admin.order.manage-order');
    }

    public function viewOrderInfo($id){
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::where('order_id',$order->id);

    }
}
