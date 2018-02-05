@extends('admin.master')
@section('body')
<div class="container" style="margin-top: 10px;">
    <div class="row">
        <div class="col-sm-10 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4></h4><br/>
                    <form action="{{route('update-category')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-3 col-form-label">Category Name</label>
                            <div class="col-sm-9">
                                <input type="text" name="category_name" class="form-control" id="inputEmail3" placeholder="Category Name" value="{{$category->category_name}}">
                                <input type="text" name="category_id" class="form-control" id="inputEmail3" placeholder="Category Name" value="{{$category->id}}">

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Category Description</label>
                            <div class="col-sm-9">
                                <textarea class="form-control" name="category_description" id="category_description">{{$category->category_description}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label">Publication Status</label>
                            <div class="col-sm-9">
                                <input type="radio" id="publication_status_published" name="publication_status" value="1"> Published
                                <input type="radio" id="publication_status_unpublished" name="publication_status" value="0"> Unpublished
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-12">
                                <button type="submit" name="btn" class="btn btn-primary btn-block">Save Category Info</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>
        var publication_status  = "{{$category->publication_status}}"
        if(publication_status == "1"){
            $('#publication_status_published').prop('checked', true);
        }else{
            $('#publication_status_unpublished').prop('checked', true);
        }
    </script>
@endsection
