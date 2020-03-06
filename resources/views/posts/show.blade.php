@extends('layouts.app')

@section('content')
    <post-show :post="{{$post}}"></post-show>
@endsection
