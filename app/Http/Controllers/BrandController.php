<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index(){
        return view('admin.brand.add-brand');
    }

    public function saveBrandInfo(Request $request){
        Brand::create($request->all());
        return 'success';
    }

    public function manageBrandInfo(){
        return view('admin.brand.manage-brand');
    }
}
