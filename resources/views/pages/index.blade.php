
@extends('layout.app')

@section('content')
<h1>{{$title}}</h1>
<p>{{$body}}</p>
<ul class="list-group">
@if (count($types) > 0)
    @foreach ($types as $type)
        <li class="list-group-item">{{$type}}</li>
    @endforeach
    
@endif

</ul>
    </body>
@endsection
