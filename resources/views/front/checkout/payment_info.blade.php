@extends('front.master')
@section('body')
    <div class="row">
        Dear{{ Session::get('CustomerName') }}. You have to give us product shipping info to complete shipping order.
        <br/>If shipping info = billing info > Cash on delivery
    </div>
    <form action="{{route('new-order')}}" method="post" class="form-horizontal">
        {{csrf_field()}}
        <input type="radio" name="payment_type" id="" value="Cash">
        <input type="radio" name="payment_type" id="" value="Paypal">
        <input type="radio" name="payment_type" id="" value="bKash">
        <input type="submit" value="Confirm Order">
    </form>
@endsection

{{--id--}}
{{--customer_id ---}}
{{--shipping_id ---}}
{{--payment_type - cash--}}
{{--payment_status - pending--}}
{{--order_total - 700--}}
{{--order_status ---}}
{{--order_date ---}}

{{--Order--}}
{{--Payment--}}


{{--product_id - 7,8--}}
{{--product_name ---}}
{{--product_price ---}}
{{--product_quantity ---}}
