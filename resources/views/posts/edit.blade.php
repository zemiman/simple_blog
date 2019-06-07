@extends('Layouts.app')

@section('content')
  <h1 style="text-align: center; font-size: 20px;">Edit Post!</h1>
   {!! Form::open(['action'=>['PostsController@update', $post->id], 'method'=>'POST', 'enctype'=>'multipart/form-data']) !!}
        <div class="form-group">
       {{Form::label('title', 'Title:')}}
       {{Form::text('title', $post->title, ['class'=>'form-control', 'placeholder'=>'title'])}}
       </div>
       <div class="form-group">
       {{Form::label('body', 'Body:')}}
       {{Form::textarea('body', $post->body, ['id'=>'article-ckeditor', 'class'=>'form-control', 'placeholder'=>'text body', 'rows'=>8, 'cols'=>25])}}
       </div>
       <div class="form-group">
         {{Form::file('cover_image')}}
       </div>
       <div class="form-group col-sm-11">
        {{Form::hidden('_method', 'PUT')}}
         {{Form::submit('submit', ['class'=>'btn btn-success', 'style'=>'float:right;'])}}
        
      
       </div>
   {!! Form::close() !!}
   
@endsection