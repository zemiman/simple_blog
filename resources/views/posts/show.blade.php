@extends('Layouts.app')
@section('section1')
<a href="/posts" class="btn btn-default" style="margin-left: 0; float: left;">Go Back</a>

@endsection

@section('content')
<div style="text-align: center; padding: 0;"> 
  <h1 style="text-align: center; font-size: 20px;">{{$post->title}}!</h1>
  <div>
    <img style="width: 110%;" src="/storage/cover_images/{{$post->cover_image}}"><br><br>
    <p style="text-align: center; font-size: 17px; font-style: italic;">{!!$post->body!!}</p>
  </div>
  <hr>
  <small style="text-align: center; margin-top: 0;">Written on {{$post->created_at}} by {{$post->user->name}}</small>
</div>
<hr>
@if(!Auth::guest())
    @if(Auth::user()->id==$post->user_id)
		{!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
		   {{Form::hidden('_method', 'DELETE')}}
		   {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}

		 {!!Form::close()!!}
		<a href="/posts/{{$post->id}}/edit" class="btn btn-primary pull-right" style="margin-right: 8px;">Edit</a>
	@endif
@endif

@endsection