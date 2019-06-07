@extends('Layouts.app')

@section('content')
  <h1 style="text-align: center; font-size: 20px;">Posts!</h1>
  @if(count($posts)>0)
     @foreach($posts as $post)
        <div class="well" style="text-align: center;">
          <div class="row">
            <div class="col-md-4 col-sm-4">
              <img style="width: 120%;" src="/storage/cover_images/{{$post->cover_image}}">
            </div>
            
            <div class="col-md-8 col-sm-8">
              <h3 style="padding: 0; text-align: center;"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
          <small style="font-style: italic; text-align: center;">Written on {{$post->created_at}} by {{$post->user->name}}</small>

            </div>

          </div>
        </div>

     @endforeach
     {{$posts->links()}}

  @else
     <p>No post found!</p>

  @endif
@endsection