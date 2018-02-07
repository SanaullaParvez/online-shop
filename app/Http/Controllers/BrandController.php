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
        $this->validate($request,[
            'brand_name' => 'required|alpha|min:5'
        ]);
        $brand = new Brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();
//        Brand::create($request->all());
        return 'success';
    }

    public function manageBrandInfo(){
        $brands = Brand::all();
        return view('admin.brand.manage-brand',['brands'=>$brands]);
    }
}
