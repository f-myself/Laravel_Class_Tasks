@extends('layout')

@section('content')

<form method="POST" action="{{action("HomeController@postImage")}}" class="col-3" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlFile1">Example file input</label>
    <input type="file" class="form-control-file" name="image" id="exampleFormControlFile1">
    @if($errors->first('image'))
    <p style="color: red;">{{$errors->first('image')}}</p>
    @endif
</div>
<div class="form-group">
    <label for="exampleFormControlInput1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1">
    @if($errors->first('name'))
    <p style="color: red;">{{$errors->first('name')}}</p>
    @endif    
</div>
<div class="form-group">
    <label for="exampleFormControlInput2">Description</label>
    <textarea name="description" class="form-control" id="exampleFormControlInput2"></textarea>
</div>
    <button type="submit">Send</button>
  </div>
</form>
@stop