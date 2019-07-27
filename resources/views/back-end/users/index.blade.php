@extends('back-end.layout.app')

@php 
$pageTitle = "User control";
$pageDes = "Here You Can add / edit / delete User"; 
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

<div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-8">
                    <h4 class="card-title"> {{$pageTitle}}</h4>
                    <p>{{$pageDes}}</p>
                  </div> 
                  <div class="col-md-4 text-right">
                      <button class="btn btn-primary">Add User</button>
                    </div>
                </div>
               
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <tr><th>
                        Id
                      </th>
                      <th>
                      Name
                      </th>
                      <th>
                        Email
                      </th>
                      <th class="text-right">
                        Control
                      </th>
                    </tr></thead>
                    <tbody>
                    @foreach($users as $user)
                      <tr>
                        <td>
                          {{$user->id}}
                        </td>
                        <td>
                          {{$user->name}}
                        </td>
                        <td>
                          {{$user->email}}
                        </td>
                        <td class="text-right">
                          {{$user->created_at}}
                        </td>
                        <td class="text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Remove">
                              <i class="material-icons">close</i>
                          </button>
                        </td>
                        <td class="text-right">
                          <button type="button" rel="tooltip" title="" class="btn btn-white btn-link btn-sm" data-original-title="Edit Task">
                              <i class="material-icons">edit</i>
                          </button>
                        </td>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


@endsection
