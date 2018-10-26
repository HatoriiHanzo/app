@extends('layouts.app')

@section('content')
  <h1>Edit post</h1>
  {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
  
  <div class="form-group">
    {{Form::label('title', 'title')}}
    {{Form::text('title', $post->title , ['class' => 'form-control', 'placeholder' => 'title'])}}
  </div>
  <div class="form-group">
      {{Form::label('body', 'title')}}
      {{Form::textarea('body', $post->body , ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'body text'])}}
   <br>
      {{Form::file('cover_image')}}
    </div>
  
   
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('submit', ['class' => 'btn btn-primary'])}}

{!! Form::close() !!}
@endsection