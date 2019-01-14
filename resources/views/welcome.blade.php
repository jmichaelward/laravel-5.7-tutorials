@extends('layout')

@section('title')
    Hello, Germ
@endsection

@section('content')
    <h1>My {{ $foo }} website.</h1>

    @foreach($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
@endsection
