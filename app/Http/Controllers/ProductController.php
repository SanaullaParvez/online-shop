<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

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
        return redirect('/product/add')->with('message','Product Info Save Successfully');
    }

    public function manageProductInfo(){
//        $categories = Product::all();
        $products = DB::table('products')
                    ->join('categories','products.category_id','=','categories.id')
                    ->join('brands','products.brand_id','=','brands.id')
                    ->select('products.*','categories.category_name','brands.brand_name')
                    ->get();
//        return $products;
        return view('admin.product.manage-product',['products'=>$products]);
    }

    public function viewProductInfo($id){
        $product = Product::find($id);
        return view('admin.product.view-product',['product'=>$product]);

    }

    public function unpublishedProductInfo($id){
        $product = Product::find($id);
        $product->publication_status = 0;
        $product->save();
        return redirect('/product/manage')->with('message','Product Unpublished');
    }

    public function publishedProductInfo($id){
        $product = Product::find($id);
        $product->publication_status = 1;
        $product->save();
        return redirect('/product/manage')->with('message','Product Published');

    }
    public function editProductInfo($id){
        $categories = Category::where('publication_status',1)->get();
        $brands = Brand::where('publication_status',1)->get();
        $product = Product::find($id);
        return view('admin.product.edit-product',[
            'product'=>$product,
            'categories'=>$categories,
            'brands'=>$brands
        ]);
    }
    public function updateProductInfo(Request $request){
        $productImage = $request->file('product_image');
        $product = Product::find($request->product_id);
        if($productImage){
            unlink($product->product_image);

            $imageName = $productImage->getClientOriginalName();
            $directory = 'product_images/';
            $imageUrl = $directory.$imageName;
//            $productImage->move($directory,$imageName);
            Image::make($productImage)->resize(250,250)->save($imageUrl);

            $product->product_image = $imageUrl;
        }
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->publication_status = $request->publication_status;
        $product->save();
        return redirect('/product/manage')->with('message','Product Info Updated Successfully');
    }

    public function deleteProduct(){

    }





}
