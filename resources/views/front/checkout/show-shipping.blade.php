@extends('front.master')
@section('body')
    <div class="row">
        Dear{{ Session::get('CustomerName') }}. You have to give us product shipping info to complete shipping order.
        If shipping info = billing info >
    </div>
    <form action="{{route('new-shipping')}}" method="post" class="form-horizontal">
        {{csrf_field()}}
        <input type="text" name="full_name" id="" value="{{$customer->first_name . ' ' .$customer->last_name }}">
        <input type="text" name="email_address" id="" value="{{$customer->email_address}}">
        <input type="text" name="phone_number" id="" value="{{$customer->phone_number}}">
        <input type="text" name="address" id="" value="{{$customer->address}}">
        <input type="submit" value="Submit">
    </form>
@endsection