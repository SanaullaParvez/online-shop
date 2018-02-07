@extends('admin.master')
@section('body')
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="text-success text-center">Add Brand Form</h3>
                </div>
                <div class="panel-body">
                    <h3>{{Session::get('message')}}</h3>
                    <form action="{{route('new-brand')}}" method="post" class="form-horizontal">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 control-label">Brand Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="brand_name" class="form-control" id="inputEmail3" placeholder="Brand Name">
                                <span>{{$errors->has('brand_name') ? $errors->first('brand_name') : ''}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 control-label">Brand Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="brand_description" id="category_description"></textarea>
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
                                <button type="submit" name="btn" class="btn btn-primary btn-block">Save Brand Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection