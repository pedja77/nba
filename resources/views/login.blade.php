@extends('layouts.master')

@section('title')
  Login
@endsection

@section('content')
<form method="POST" action="/login">
{{ csrf_field() }}
  <div class="form-group">
    <label for="email">Email address</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="password">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>

<div class="alert alert-warning" role="alert">
  Please check you inbox to verify your email
</div>
@endsection