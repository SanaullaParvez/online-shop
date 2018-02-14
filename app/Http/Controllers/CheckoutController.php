<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\OrderDetails;
use App\Payment;
use App\Product;
use App\Shipping;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function index(){
        return view('front.checkout.checkout');
    }
    public function saveCustomer(Request $request){
//        return $request;
        $customer = new Customer();
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->email_address = $request->email_address;
        $customer->password = $request->password;
        $customer->phone_number = $request->phone_number;
        $customer->address = $request->address;
        $customer->save();
        Session::put('CustomerId',$customer->id);
        Session::put('CustomerName',$customer->first_name);
        $data = $customer->toArray();
//        $data =(array)$customer;

        Mail::send('front.mails.congratulation-mail',$data, function ($message) use ($data){
            $message->to($data['email_address']);
            $message->subject('Confirmaiton Mail');
        });
        return redirect('/checkout/show-shipping');

    }

    public function shippingInfo(){
//        return Session::get('CustomerName');
        $customer = Customer::find(Session::get('CustomerId'));
//        return $customer;
        return view('front.checkout.show-shipping',['customer'=>$customer]);
    }

    public function saveShippingInfo(Request $request){
        $shipping = new Shipping();
        $shipping->full_name = $request->full_name;
        $shipping->email_address = $request->email_address;
        $shipping->phone_number = $request->phone_number;
        $shipping->address = $request->address;
        $shipping->save();
        Session::put('ShippingId',$shipping->id);
        return redirect('/checkout/payment-info');
    }

    public function showPaymentInfo(){
        return view('front.checkout.payment_info');
    }

    public function saveOrderInfo(Request $request){
//        return $request;
        $payment_type =  $request->payment_type;
        if($payment_type == 'Cash'){
            $order = new Order();
            $order->customer_id = Session::get('CustomerId');
            $order->shipping_id = Session::get('ShippingId');
            $order->order_total = Session::get('grandTotal');
            $order->save();

            $payment = new Payment();
            $payment->order_id = $order->id;
            $payment->payment_type = $payment_type;
            $payment->save();

            $cartProducts = Cart::content();
//            return $cartProducts;
            foreach ($cartProducts as $cartProduct){
                $orderDetails = new OrderDetails();
                $orderDetails->order_id = $order->id;
                $orderDetails->product_id = $cartProduct->id;
                $orderDetails->product_name = $cartProduct->name;
                $orderDetails->product_price = $cartProduct->price;
                $orderDetails->product_quantity = $cartProduct->qty;
//                return $orderDetails;
                $orderDetails->save();
            }

            Cart::destroy();
            return redirect('checkout/complete-order');


        }elseif ($payment_type == 'Paypal'){

        }elseif ($payment_type == 'bKash'){

        }
    }

    public function completeOrder(){
        return view('front.checkout.complete-order');
    }

    public function customerLogout(){
        Session::forget('CustomerId');
        Session::forget('CustomerName');
        return redirect('/');
    }

    public function customerEmailCheck($email){
        $customer = Customer::where('email_address',$email)->first();
        if($customer){
            echo $customer;
        }else{
            echo 'Email Available';
        }

    }
    public function ajaxProductSearch($search){
        $product = Product::where('product_name','like','%'.$search.'%')->get();
        if($product){
            echo view('front.product.search-product',['product'=>$product]);
        }else{
//            echo view('front.product.search-product',['product'=>$product]);
            echo 'Product Not Available';
        }

    }
}
