@extends('admin.home.home')
@section('body')
    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <div class="card">
                    <h4 class="text-center font-weight-bold text-success">{{$message = ''}}</h4>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                            <tr>
                                <th scope="col">SL No</th>
                                <th scope="col">Brand Name</th>
                                <th scope="col">Brand Description</th>
                                <th scope="col">Publication Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($brands as $brand)
                                <tr>
                                    <th scope="row">{{$brand->id}}</th>
                                    <td>{{$brand->brand_name}}</td>
                                    <td>{{$brand->brand_description}}</td>
                                    <td>{{$brand->publication_status == 1 ? 'Published' : 'Unpublished'}}</td>
                                    <td>
                                        {{--@if($brand->publication_status == 1)--}}
                                            {{--<a href="{{route('unpublished-brand',['id'=>$brand->id])}}" class="btn btn-info btn-xs">--}}
                                                {{--<span class="glyphicon glyphicon-arrow-up"></span>--}}
                                            {{--</a>--}}
                                        {{--@else--}}
                                            {{--<a href="{{route('published-brand',['id'=>$brand->id])}}" class="btn btn-warning btn-xs">--}}
                                                {{--<span class="glyphicon glyphicon-arrow-up"></span>--}}
                                            {{--</a>--}}
                                        {{--@endif--}}
                                        {{--<a href="{{route('edit-brand',[$brand->id])}}" class="btn btn-info btn-xs">--}}
                                            {{--<span class="glyphicon glyphicon-edit"></span>--}}
                                        {{--</a>--}}
                                        {{--<a--}}
                                                {{--class="btn btn-info btn-xs"--}}
                                                {{--href="{{route('delete-brand',[$brand->id])}}"--}}
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