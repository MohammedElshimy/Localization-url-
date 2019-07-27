@extends('back-end.layout.app')

@section('title')
  Home page
@endsection
@section('content')


@component('back-end.layout.header')

  @slot('nav_title')
    Home Page
  @endslot

@endcomponent




@endsection
