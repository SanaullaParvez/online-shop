<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperMarketController extends Controller
{
    public function index(){
        $name = 'Sanaulla';
//        return view('admin.context',compact('name'));
//        return view('admin.context')->with('names',$name);
        return view('front.home.home-content',[
            'names'=>$name
        ]);
    }

    public function contact(){
        return view('front.contact.contact');

    }
    public function groceries(){
        return view('front.groceries.groceries');
    }
}
