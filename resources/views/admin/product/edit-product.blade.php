@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-success text-center">Add Product Form</h3>
                </div>
                <div class="panel-body">
                    <h3>{{Session::get('message')}}</h3>
                    <form action="{{route('update-product')}}" method="post" class="form-horizontal" id="editProductForm" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 control-label">Category Name</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="category_id">
                                    <option value="">--- Select Category Name ---</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->category_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 control-label">Product Name</label>
                            <div class="col-sm-9">
                                <select class="form-control" name="brand_id">
                                    <option value="">--- Select Brand Name ---</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}">{{$brand->brand_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 control-label">Product Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="product_name" class="form-control" id="inputEmail3" placeholder="Product Name" value="{{$product->product_name}}">
                                <input type="text" name="product_id" class="form-control" id="inputEmail3" placeholder="Product Name" value="{{$product->id}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 control-label">Product Price</label>
                            <div class="col-sm-9">
                                <input type="text" name="product_price" class="form-control" id="inputEmail3" placeholder="Product Price" value="{{$product->product_price}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 control-label">Product Quantity</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="product_quantity" id="product_quantity">{{$product->product_quantity}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 control-label">Short Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="short_description" id="short_description">{{$product->short_description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 control-label">Long Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="long_description" id="editor">{{$product->long_description}}</textarea>
                                <span class="text-success">{{$errors->has('long_description') ? $errors->first('long_description') : ''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 control-label">Product Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="product_image" id="product_image" accept="image/*"/>
                                <span class="text-success">{{$errors->has('product_image') ? $errors->first('product_image') : ''}}</span>
                                <img src="{{asset($product->product_image)}}" alt="Image"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 control-label">Publication Status</label>
                            <div class="col-sm-9">
                                <input type="radio" id="publication_status_published"  name="publication_status" value="1"> Published
                                <input type="radio" id="publication_status_unpublished" name="publication_status" value="0"> Unpublished
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" name="btn" class="btn btn-primary btn-block">Update Product Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection








@section('script')
    <script>
        var publication_status  = "{{$product->publication_status}}"
        if(publication_status == "1"){
            $('#publication_status_published').prop('checked', true);
        }else{
            $('#publication_status_unpublished').prop('checked', true);
        }
        document.forms['editProductForm'].elements['category_id'].value = '{{ $product->category_id }}';
        document.forms['editProductForm'].elements['brand_id'].value = '{{ $product->brand_id }}';
//        $('select[name=category_id] option:eq(3)').prop('selected', true)
    </script>
@endsection
