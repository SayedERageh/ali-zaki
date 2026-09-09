@extends('layouts.app')

@section('content')

    @include('components.home.hero')

    @include('components.home.about')
  @if(isset($products) && $products->isNotEmpty())
        @include('components.home.products')
    @endif
    @include('components.home.services')

    @include('components.home.values')

    @include('components.home.projects')

    @include('components.home.commitment')

    @include('components.home.cta')

@endsection