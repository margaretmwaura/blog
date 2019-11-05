@extends('layout.app')
@section('content')
<h1>Edit POST</h1>
{!! Form::open(['action'=> ['PostsController@update',$post->id] , 'method' =>'POST']) !!}
    <div class ="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$post->title)}}
    </div>
    <div class ="form-group">
        {{Form::label('title','Body')}}
        {{Form::textarea('body', $post->body , ['id' => 'summary-ckeditor'])  }}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Submit')}}
{!! Form::close() !!}
@endsection
