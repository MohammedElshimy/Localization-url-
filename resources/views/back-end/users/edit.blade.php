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
        <div class="row">
          <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">{{$pageTitle}}</h4>
                  <p class="card-category">{{$pageDes}}</p>
                </div>
                <div class="card-body">
                  <form action="{{route('users.update', ['id'=> $users->id])}}" method="POST">
                    {{method_field('PUT')}}
                    @include('back-end.users.form')
                    <button type="submit" class="btn btn-primary pull-right">Update User</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
        </div>




@endsection