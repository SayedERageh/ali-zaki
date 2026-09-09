@extends('layouts.app')

@section('content')


  @if(isset($products) && $products->isNotEmpty())
        @include('components.home.products')
    @endif

@endsection