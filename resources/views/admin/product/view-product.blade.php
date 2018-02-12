@extends('admin.master')
@section('body')
<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-sm-10 mx-auto">
            <div class="panel">
                <div class="panel-head">
                    <h3 class="text-success text-center">Product Details</h3>
                </div>
                <div class="panel-body">
                    <table class="table table-border">
                        <tr>
                            <th>Product ID</th>
                            <td>{{$product->id}}</td>
                        </tr>
                        <tr>
                            <th>Product Name</th>
                            <td>{{$product->product_name}}</td>
                        </tr>
                        <tr>
                            <th>Category ID</th>
                            <td>{{$product->category_id}}</td>
                        </tr>
                        <tr>
                            <th>Brand ID</th>
                            <td>{{$product->brand_id}}</td>
                        </tr>
                        <tr>
                            <th>Product Price</th>
                            <td>{{$product->product_price}}</td>
                        </tr>
                        <tr>
                            <th>Product Quantity</th>
                            <td>{{$product->product_quantity}}</td>
                        </tr>
                        <tr>
                            <th>Product Short Description</th>
                            <td>{{$product->short_description}}</td>
                        </tr>
                        <tr>
                            <th>Product Long Description</th>
                            <td>{!! $product->long_description !!}</td>
                        </tr>
                        <tr>
                            <th>Product Image</th>
                            <td><img src="{{ asset($product->product_image) }}" alt=""/> </td>
                        </tr>
                        <tr>
                            <th>Publication Status</th>
                            <td>{{$product->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                        </tr>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
