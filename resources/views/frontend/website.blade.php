@extends('layout.front')
@section('content')

    @include('frontend.components.header')

   
    @include('frontend.home')
     @include('frontend.contact')
    @include('frontend.about')
    @include('frontend.gallery')
     @include('frontend.news')
    @include('frontend.staff')

    @include('frontend.components.footer')


@endsection