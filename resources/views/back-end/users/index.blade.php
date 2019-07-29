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
                <div class="card-header card-header-primary">
                <div class="row">
                  <div class="col-md-8">
                    <h4 class="card-title"> {{$pageTitle}}</h4>
                    <p>{{$pageDes}}</p>
                  </div> 
                  <div class="col-md-4 text-right">
                      <a href="{{route('users.create')}}" class="btn btn-primary" >Add User</a>
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
                      <th>
                        Time
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
                        <td>
                          {{$user->created_at}}
                        </td>
                        <td class="text-right">
                            <a href="{{ route('users.edit', ['id'=> $user->id]) }}" rel="tooltip" title="" class="btn btn-block btn-link btn-sm" data-original-title="Edit Task">
                                <i class="material-icons">edit</i>
                            </a>
                        <form action="{{route('users.destroy', ['id'=> $user->id])}}"  method="POST">
                        {{method_field('delete')}}
                                  {{csrf_field()}}
                                  
                          <button type="submit" rel="tooltip" title="" class="btn btn-block btn-link btn-sm" data-original-title="Remove">
                              <i class="material-icons">close</i>
                          </button>
                          </form>
                        </td>
                      @endforeach
                    </tbody>
                  </table>
                  {!! $user->links !!}
                  </div>
                </div>
              </div>
            </div>
@endsection
