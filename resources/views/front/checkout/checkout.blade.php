@extends('front.master')

@section('body')
    <!-- breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
                <li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Singlepage</li>
            </ol>
        </div>
    </div>
    <!-- //breadcrumbs -->
    <div class="register">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="text-success text-center">You have to registration first</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h3 class="text-success text-center">Registration Form</h3>
                    <hr/>
                    <form action="" class="form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="" class="control-label col-md-3">First Name</label>
                            <div class="col-md-9">
                                <input type="text" name="first_name" id="" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-3">Last Name</label>
                            <div class="col-md-9">
                                <input type="text" name="last_name" id="" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-3">E-mail</label>
                            <div class="col-md-9">
                                <input type="text" name="email_address" id="" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input type="text" name="password" id="" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-3">Phone Number</label>
                            <div class="col-md-9">
                                <input type="text" name="phone_number" id="" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-3">Address</label>
                            <div class="col-md-9">
                                <input type="text" name="address" id="" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" value="Submit" class="btn btn-success">
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-md-6">
                    <h3 class="text-success text-center">Login Form</h3>
                    <hr/>
                    <form action="" class="form-horizontal" method="POST">
                        <div class="form-group">
                            <label for="" class="control-label col-md-3">Email</label>
                            <div class="col-md-9">
                                <input type="text" name="first_name" id="" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="control-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input type="text" name="password" id="" class="form-control"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-9 col-md-offset-3">
                                <input type="submit" value="Login" class="btn btn-outline-success">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- new -->
@endsection