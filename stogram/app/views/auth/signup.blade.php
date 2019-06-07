@extends('layout')

@section('content')
<h1>Sign up form</h1>
<form method="POST" class="col-3">
    <div class="form-group">
    <label>Name <input name="name" class="form-control"></label>
    </div>
    <div class="form-group">
    <label>Email <input name="email" class="form-control"></label>
    </div>
    <div class="form-group">
    <label>Password <input type="password" name="password" class="form-control"></label>
    </div>
    <div class="form-group">
    <label>Confirm password <input type="password" name="password_confirmation" class="form-control"></label>
    </div>
    <button type="submit">Sign Up</button>
</form>
@stop