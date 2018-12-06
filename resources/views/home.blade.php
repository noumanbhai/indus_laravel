@extends('layout')


@section('content')
<h1>Home page:</h1>
<ul>
    <hr>
@foreach($tasks as $task)
<hr>
<li>{{$task}}</li>
@endforeach

</ul>


@endsection


