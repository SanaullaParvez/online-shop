@extends('admin.home.home')
@section('body')
    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <div class="panel panel-default">
                    <div class="panel-head">
                        <h4 class="text-center font-weight-bold text-success">{{ Session::get('message')}}</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">Category Name</th>
                                <th scope="col">Category Description</th>
                                <th scope="col">Publication Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <th scope="row">{{$category->id}}</th>
                                    <td>{{$category->category_name}}</td>
                                    <td>{{$category->category_description}}</td>
                                    <td>{{$category->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        @if($category->publication_status == 1)
                                            <a href="{{route('unpublished-category',['id'=>$category->id])}}" class="btn btn-info btn-xs">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        @else
                                            <a href="{{route('published-category',['id'=>$category->id])}}" class="btn btn-warning btn-xs">
                                                <span class="glyphicon glyphicon-arrow-up"></span>
                                            </a>
                                        @endif
                                        <a href="{{route('edit-category',[$category->id])}}" class="btn btn-info btn-xs">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a
                                                class="btn btn-info btn-xs"
                                                href="{{route('delete-category',[$category->id])}}"
                                                onclick="return confirm('Are You Sure ?')">
                                            <span class="glyphicon glyphicon-trash"></span>
                                        </a>
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