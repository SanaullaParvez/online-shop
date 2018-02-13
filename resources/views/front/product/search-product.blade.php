{{--@extends('front.master')--}}
{{--@section('body')--}}
    @foreach($product as $produc)
        <un>
            <li>{{$produc->product_name}}</li>
        </un>
    @endforeach
{{--@endsection--}}