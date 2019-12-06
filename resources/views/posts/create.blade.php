
@extends('layouts.app')
<br><br><br>
@section('content')
    <h1>Create Post</h1>
    {{ Form::open(['action'=>'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']) }}
    <div class="Form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
    </div>

    <div class="Form-group">
            {{Form::label('body','Body')}}
            {!!Form::textarea('body','',['id'=>'article-ckeditor','class'=>'ckeditor','placeholder'=>'Body'])!!}
    </div>
    <div class="Form-group">
            {{Form::label('u_count','Count of Collaboration')}}
            {!!Form::number('u_count','',['id'=>'article-ckeditor','class'=>'ckeditor','min'=>'0','placeholder'=>'Count'])!!}
    </div>
    <div class="Form-group">
    {{Form::file('cover_image')}}
    </div>
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
{{ Form::close() }}
@endsection