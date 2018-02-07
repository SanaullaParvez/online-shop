<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
        $categories = Category::where('publication_status',1)->get();
        $brands = Brand::where('publication_status',1)->get();
        return view('admin.product.add-product',[
            'categories' => $categories,
            'brands' => $brands
        ]);
    }

    public function saveProductInfo(Request $request){
        $productImage = $request->file('product_image');
        $imageName = $productImage->getClientOriginalName();
        $directory = 'product_images/';
        $imageUrl = $directory.$imageName;
//        $productImage->move($imageUrl);
        $productImage->move($directory,$imageName);

        $product = new Product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->product_image = $imageUrl;
        $product->publication_status = $request->publication_status;
        $product->save();
        return 'success';
    }

    public function manageProductInfo(){
        $categories = Product::all();
        return view('admin.product.manage-product',['categories'=>$categories]);
    }
}
