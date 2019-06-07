@extends('layout')

@section('content')
<form method="POST">
<div class="form-group">
<label>Email <input class="form-control" name="email"></label>
</div>
<div class="form-group">
<label>Password <input class="form-control" type="password" name="password"></label>
</div>
<button type="submit">Login</button>
</form>
@stop