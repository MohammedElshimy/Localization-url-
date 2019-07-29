@extends('back-end.layout.app')

@php 
$pageTitle = "Create User";
$pageDes = "Here You Can Create User"; 
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
                  <form action="{{route('users.store')}}" method="POST">
                    @include('back-end.users.form')
                    <button type="submit" class="btn btn-primary pull-right">Add User</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
        </div>
      


@endsection