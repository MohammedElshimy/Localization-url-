@extends('back-end.layout.app')

@php 
$pageTitle = "User Control";
$pageDes = "Here You Can edit User"; 
@endphp

@section('title')
  {{$pageTitle}}
@endsection
@section('content')

<!-- Navbar -->
@component('back-end.layout.header') <!-- ,['nav_title' => 'Home Page'] -->

  @slot('nav_title')
    {{$pageTitle}}
  @endslot

@endcomponent
<!-- End Navbar -->
<h1>home</h1>




@endsection