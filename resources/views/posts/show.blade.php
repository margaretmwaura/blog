@extends('layout.app')
@section('content')
<a href="/lsapp/public/posts/"> Go back</a>
<h1>{{$post -> title}}</h1>
<h3>{{$post -> body}}</h3>
@endsection