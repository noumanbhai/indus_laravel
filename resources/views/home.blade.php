@extends('layout')


@section('content')
{{-- use $pak variable --}}
<h1>Home page{{$pak}}:</h1>
<ul>
    <hr>
@foreach($tasks as $task)
<hr>
{{$task}}
@endforeach

</ul>


@endsection


