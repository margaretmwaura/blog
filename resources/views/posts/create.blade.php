@extends('layout.app')
@section('content')
<h1>CREATE POST</h1>
{!! Form::open(['action'=> 'PostsController@store' , 'method' =>'POST']) !!}
    <div class ="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',' ')}}
    </div>
    <div class ="form-group">
        {{Form::label('title','Body')}}
        {{Form::textarea('body',' ' , ['id' => 'summary-ckeditor'])  }}
    </div>
    {{Form::submit('Submit')}}
{!! Form::close() !!}
@endsection

