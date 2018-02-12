<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class SuperMarketController extends Controller
{
    public function index(){
        $categories = Category::where('publication_status',1)->get();
//        return $categories;
        $name = 'Sanaulla';
//        return view('admin.context',compact('name'));
//        return view('admin.context')->with('names',$name);
        return view('front.home.home-content',[
            'names'=>$name,
            'categories' => $categories
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
}
