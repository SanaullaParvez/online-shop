
@extends('admin.master')
@section('content')
    This is content
    <a href="{{url('/')}}">Hello</a>
    <a href="{{URL::to('/')}}">Hello</a>
    <a href="{{route('/a')}}">Hello</a>
@endsection
