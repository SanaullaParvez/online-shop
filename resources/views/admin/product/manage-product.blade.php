@extends('admin.home.home')
@section('body')
    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <div class="panel">
                    <div class="panel-head">
                        <h3 class="text-success text-center">Manage Products</h3>
                    </div>
                    <h4 class="text-center font-weight-bold text-success">{{ Session::get('message')}}</h4>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Brand Name</th>
                                <th scope="col">Product Price</th>
                                <th scope="col">Product Quantity</th>
                                <th scope="col">Publication</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i=1)
                            @foreach($products as $product)
                                <tr>
                                    <th scope="row">{{$i++}}</th>
                                    <td>{{$product->product_name}}</td>
                                    <td>{{$product->category_name}}</td>
                                    <td>{{$product->brand_name}}</td>
                                    <td>{{$product->product_price}}</td>
                                    <td>{{$product->product_quantity}}</td>
                                    <td>{{$product->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        <a href="{{route('view-product',[$product->id])}}" class="btn btn-success btn-xs">
                                        <span class="glyphicon glyphicon-zoom-in"></span>
                                        </a>
                                        @if($product->publication_status == 1)
                                            <a href="{{route('unpublished-product',['id'=>$product->id])}}" class="btn btn-info btn-xs">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        @else
                                            <a href="{{route('published-product',['id'=>$product->id])}}" class="btn btn-warning btn-xs">
                                                <span class="glyphicon glyphicon-arrow-down"></span>
                                            </a>
                                        @endif
                                        <a href="{{route('edit-product',[$product->id])}}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        {{--<a--}}
                                                {{--class="btn btn-danger btn-xs"--}}
                                                {{--href="{{route('delete-product',[$product->id])}}"--}}
                                                {{--onclick="return confirm('Are You Sure ?')">--}}
                                            {{--<span class="glyphicon glyphicon-trash"></span>--}}
                                        {{--</a>--}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection