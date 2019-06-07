@extends('layout')

@section('content')

<div class="image">
    <img src="{{action('HomeController@getImageFile', $image->id)}}" title="{{$image->name}}">
    <p>{{$image->description}}</p>
</div>

@if($image->comments)
@foreach($image->comments as $comment)
<div class="media border col-5 pb-3 mt-3">
  <div class="media-body">
    <h5 class="mt-0">{{$comment->user->name}} said at {{$comment->created_at}}</h5>
    {{$comment->text}}
  </div>
</div>
@endforeach
@endif
<form method="post" action="{{action('HomeController@postComment')}}" class="col-3 mt-4">
<div class="form-group">
    <label for="exampleFormControlInput2">Your Comment</label>
    <textarea name="text" class="form-control" id="exampleFormControlInput2"></textarea>
</div>
<input type="hidden" name="image_id" value="{{$image->id}}">
<button type="submit">Add Comment</button>
</form>

@stop