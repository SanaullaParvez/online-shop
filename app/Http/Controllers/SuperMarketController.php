<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class SuperMarketController extends Controller
{
    public function index(){
        $categories = Category::where('publication_status',1)->orderBy('id','asc')->take(3)->get();
        $products = Product::where('publication_status',1)->
        orderBy('id','asc')->take(10)->paginate(2);
//        return $products;
        //simplepaginate
//        get();
//        return $categories;
        $name = 'Sanaulla';
//        return view('admin.context',compact('name'));
//        return view('admin.context')->with('names',$name);
        return view('front.home.home-content',[
            'names'=>$name,
            'categories' => $categories,
            'products' => $products
        ]);
    }

    public function contact(){
        return view('front.contact.contact');

    }
    public function groceries(){
        return view('front.groceries.groceries');
    }

    public function offers(){
        return view('front.offers.offers');
    }

    public function productDetails($id){
        $product = Product::find($id);
        return view('front.home.product-details',[
            'product' => $product
        ]);
    }
}
