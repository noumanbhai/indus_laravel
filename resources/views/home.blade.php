@extends('layout')


@section('content')
{{-- use $pak variable --}}
<h1>Home page{{$pak}}:</h1>


@foreach($tasks as $task)
{{$task}}
@endforeach


@endsection


