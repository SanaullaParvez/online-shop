<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $name = 'Sanaulla';
//        return view('admin.context',compact('name'));
//        return view('admin.context')->with('names',$name);
        return view('admin.context',[
           'names'=>$name
        ]);
    }

    public function create(){
        return 'create';
    }
}
