<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CardController extends Controller
{
    public function addToCard(Request $request){
        $product = Product::find($request->product_id);
        $cart = Cart::add([
            'id'=>$request->product_id,
            'name'=>$product->product_name,
            'price'=>$product->product_price,
            'qty'=>$request->qty,
            'options'=>[
                'image'=>$product->product_image
            ]
        ]);
//        return $s;
        return redirect('/cart/show');
//        return redirect()->route('show-cart');

    }

    public function showCart(){
        $carts = Cart::content();
//        return $carts;
        return view('front.cart.show-cart',['carts'=>$carts]);
    }
    public function deleteCart($rowId){
        Cart::remove($rowId);
        return redirect('cart/show');
    }
    public function updateCard(Request $request){
//        return $request;
        Cart::update($request->rowId,$request->qty);
        return redirect('cart/show');
    }
}
