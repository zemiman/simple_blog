@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 30px;">
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Craete Post</a>

                    <h3>You are logged in!</h3>
                    @if(count($posts)>0)
                        <table class="table table-striped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                {{-- <th></th> --}}
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td>
                                    {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pull-right'])!!}
                                   {{Form::hidden('_method', 'DELETE')}}
                                   {{Form::submit('Delete', ['class'=>'btn btn-danger'])}}
                                   {!!Form::close()!!}
                                    <a href="/posts/{{$post->id}}/edit" class="btn btn-primary" style="float: right; margin-right: 12px;"> Edit</a>
                                </td>
                            </tr>


                            @endforeach
                        </table>
                    @else
                    <h2>You have no post!</h2>
                    @endif

                </div>
            </div>
        </div>
        {{-- <div class="col-md-2"></div> --}}
    </div>
</div>
@endsection
