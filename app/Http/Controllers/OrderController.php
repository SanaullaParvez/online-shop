<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\Payment;
use App\Shipping;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

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
        $orders = DB::table('orders')
            ->join('customers','orders.customer_id','=','customers.id')
            ->join('payments','orders.id','=','payments.order_id')
            ->select('orders.*','customers.first_name','customers.last_name','payments.payment_type','payments.payment_status')->get();

//        return $orders;
        return view('admin.order.manage-order',[
            'orders'=>$orders
        ]);
    }

    public function viewOrderInfo($id){
        $order = Order::find($id);
//        $customer = Customer::find($order->customer_id);
//        $shipping = Shipping::find($order->shipping_id);
//        $payment = Payment::where('order_id',$order->id);
//        return $order;
        return view('admin.order.view-order',[
            'order'=>$order
        ]);
    }

    public function viewOrderInvoice($id){
        $order = Order::find($id);
        $customer = Customer::find($order->customer_id);
        $shipping = Shipping::find($order->shipping_id);
        $payment = Payment::where('order_id',$order->id);

        return view('admin.order.view-order-invoice');
    }
    public function downloadOrderInvoice($id){
        $pdf = PDF::loadView('admin.order.download-order-invoice');
    }
}
