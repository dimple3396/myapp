@extends('layouts.app')
@section('content')
<a href="/posts" class="btn btn-default">Go Back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br>
    <br>
<div>
    {!!$post->body!!}
</div> 
<hr>
<small>Written on {{$post->created_at}} By {{$post->user->email}}</small> 
<hr>


@if(!Auth::guest())

@if(Auth::user()->id != $post->user_id)
<a href="/posts/{{$post->id}}/email" class="btn btn-primary" style="float:right"><span>Collaborate with this Event</span></a><br><br>
 @endif


@if (Auth::user()->id == $post->user_id)    
<a href="/posts/{{$post->id}}/edit" class="btn btn-success"><span>Edit</span></a><br><br>
{!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class'=>'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}

@endif

@endif

@endsection