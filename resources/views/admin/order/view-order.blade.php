@extends('admin.home.home')
@section('body')
    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <div class="panel panel-default">
                    <div class="panel-head">
                        <h4 class="text-center font-weight-bold text-success">Order Info Order For this Order</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <h3>{{ Session::get('message')}}</h3>
                            <tr>
                                <th scope="col">Product Name</th>
                                <td>{{}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <div class="panel panel-default">
                    <div class="panel-head">
                        <h4 class="text-center font-weight-bold text-success">Customer Info Order For this Order</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <h3>{{ Session::get('message')}}</h3>
                            <tr>
                                <th scope="col">Product Name</th>
                                <td>{{}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 mx-auto">
                <div class="panel panel-default">
                    <div class="panel-head">
                        <h4 class="text-center font-weight-bold text-success">Payment Info Order For this Order</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table">
                            <h3>{{ Session::get('message')}}</h3>
                            <tr>
                                <th scope="col">Product Name</th>
                                <td>{{}}</td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection