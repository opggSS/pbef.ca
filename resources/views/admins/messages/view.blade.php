@extends('admins.app')
    <!-- Begin Page Content -->
@section('content')
  <div class="container">
    <div class="row">
      <span> First Name:</span>
      <span> {{$message->firstName}}</span>
    </div>
    <div class="row">
      <span> Last Name:</span>
      <span> {{$message->lastName}}</span>
    </div>
    <div class="row">
      <span> Email:</span>
      <span> {{$message->email}}</span>
    </div>
    <div class="row">
      <span> Message:</span>
      <span> {{$message->message}}</span>
    </div>
    <hr>
    <div class="row">
      <a class="btn btn-primary btn-h1-spacing" href="{{url('admin/messages')}}">Go back</a>
    </div>
  </div>

@endsection