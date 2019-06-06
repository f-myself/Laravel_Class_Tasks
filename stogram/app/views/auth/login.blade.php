@extends('layout')

@section('content')
<form method="POST">
<label>Email <input name="email"></label>
<label>Password <input type="password" name="password"></label>
<button type="submit">Login</button>
</form>
@stop