@extends('layout')

@section('content')
    <h1 class="title">My Projects</h1>

    <ul class="projects-list">
        @foreach($projects as $project)
            <li><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></li>
        @endforeach
    </ul>

    <a href="/projects/create" class="button is-link">Create a new project.</a>
@endsection
