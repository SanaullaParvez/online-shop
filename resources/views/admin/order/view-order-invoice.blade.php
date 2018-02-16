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
                                <th scope="col">Order ID</th>
                                <th scope="col">Customer Name</th>
                                <th scope="col">Order Total</th>
                                <th scope="col">Order Status</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Payment Type</th>
                                <th scope="col">Payment Status</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <th scope="row">{{$order->id}}</th>
                                    <td>{{$order->first_name.' '. $order->last_name}}</td>
                                    <td>{{$order->order_status}}</td>
                                    <td>{{$order->created_at}}</td>
                                    <td>{{$order->payment_type}}</td>
                                    <td>{{$order->payment_status}}</td>
                                    <td>
                                        <a href="{{route('unpublished-category',['id'=>$order->id])}}" class="btn btn-info btn-xs" title="View Order Details">
                                            <span class="glyphicon glyphicon-zoom-in"></span>
                                        </a>
                                        <a href="{{route('published-category',['id'=>$order->id])}}" class="btn btn-warning btn-xs" title="View Order Invoice">
                                            <span class="glyphicon glyphicon-zoom-out"></span>
                                        </a>
                                        <a href="{{route('edit-category',[$order->id])}}" class="btn btn-info btn-xs" title="Download Order Invoice">
                                            <span class="glyphicon glyphicon-edit"></span>
                                        </a>
                                        <a href="{{route('view-order-invoice',[$order->id])}}" class="btn btn-info btn-xs" title="Download Order Invoice">
                                            <span class="glyphicon glyphicon-download"></span>
                                        </a>
                                        <a
                                                class="btn btn-info btn-xs"
                                                href="{{route('delete-category',[$order->id])}}"
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