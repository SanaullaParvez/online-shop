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
    <div class="products">
        <div class="container">
            <table class="table table-border">
                <tr>
                    <th>Product Id</th>

                    <th>Product Image</th>

                    <th>Product Name</th>

                    <th>Product Price</th>

                    <th>Product Quantiry</th>

                    <th>Total Price</th>

                    <th>Action</th>
                </tr>
                @foreach($carts as $cart)
                    <tr>
                        <td>{{$cart->id}}</td>
                        <td>{{$cart->name}}</td>
                        <td>{{$cart->options->image}}</td>
                        <td>{{$cart->price+$cart->tax}}</td>
                        <td>
                            <form action="{{ route('update-cart-product')  }}" method="post">
                                {{csrf_field()}}
                                <input type="number" name="qty" id="" value="{{$cart->qty}}">
                                <input type="hidden" name="rowId" id="" value="{{$cart->rowId}}">
                                <button type="submit">Update</button>
                            </form>
                        </td>
                        <td>{{$cart->subtotal}}</td>
                        <td><a href="{{route('delete-cart-product',['id'=>$cart->rowId])}}">Delete</a></td>
                    </tr>
                @endforeach
            </table>
            <table class="table table-border">
                <tr>
                    <th>Total Price</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Vat</th>
                    <td></td>
                </tr>
                <tr>
                    <th>Grand Total</th>
                    <td></td>
                </tr>
            </table>
            <a href="{{route('/')}}" class="btn btn-success pull-left">Continue Shopping</a>
            <a href="{{route('/checkout')}}" class="btn btn-success pull-right">Checkout</a>
            <!-- new -->
        </div>
    </div>
@endsection