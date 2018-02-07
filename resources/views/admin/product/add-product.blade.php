@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-success text-center">Add Product Form</h3>
                </div>
                <div class="panel-body">
                    <form action="{{route('new-product')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
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
                                <input type="text" name="product_name" class="form-control" id="inputEmail3" placeholder="Product Name">
                            {{--{{$error->}}--}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 control-label">Product Price</label>
                            <div class="col-sm-9">
                                <input type="text" name="product_price" class="form-control" id="inputEmail3" placeholder="Product Price">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 control-label">Product Quantity</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="product_quantity" id="product_quantity"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 control-label">Short Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="short_description" id="short_description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 control-label">Long Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="long_description" id="editor"></textarea>
                                <span class="text-success">{{$errors->has('long_description') ? $errors->first('long_description') : ''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 control-label">Product Image</label>
                            <div class="col-sm-9">
                                <input type="file" name="product_image" id="product_image" accept="image/*"/>
                                <span class="text-success">{{$errors->has('product_image') ? $errors->first('product_image') : ''}}</span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 control-label">Publication Status</label>
                            <div class="col-sm-9">
                                <input type="radio" name="publication_status" value="1"> Published
                                <input type="radio" name="publication_status" value="0"> Unpublished
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" name="btn" class="btn btn-primary btn-block">Save Product Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection