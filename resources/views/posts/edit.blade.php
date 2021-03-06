@extends('layouts.app')
<br><br><br>
@section('content')
    <h1>Edit Post</h1>
    {{ Form::open(['action'=>['PostsController@update', $post->id],'method'=>'POST','enctype'=>'multipart/form-data']) }}
    <div class="Form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
    </div>

    <div class="Form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body',$post->body,['id'=>'article-ckeditor','class'=>'ckeditor','placeholder'=>'Body'])}}
        </div>
        <div class="Form-group">
                {{Form::file('cover_image')}}
                </div>
{{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{{ Form::close() }}
@endsection