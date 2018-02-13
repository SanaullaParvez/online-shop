<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index(){
        return view('front.checkout.checkout');
    }
    public function saveCustomer(Request $request){
        return $request;
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

        return redirect('/checkout/show-shipping');

    }

    public function shippingInfo(){
        return view('front.checkout.show-shipping');
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
