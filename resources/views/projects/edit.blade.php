@extends('layout')

<style>
    form + form {
        margin-top: 1rem;
    }
</style>

@section('content')
    <h1 class="title">Edit Project</h1>

    <form method="post" action="/projects/{{ $project->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="field">
            <label for="title" class="label">Title</label>

            <div class="control">
                <input type="text" class="input" name="title" placeholder="Title" value="{{ $project->title }}">
            </div>
        </div>

        <div class="field">
            <label for="description" class="label">Description</label>

            <div class="control">
                <textarea name="description" class="textarea">{{ $project->description }}</textarea>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <input type="submit" class="button is-link" value="Update Project">
            </div>
        </div>
    </form>

    <form method="post" action="/projects/{{ $project->id }}">

        {{ method_field('DELETE') }}
        {{ csrf_field() }}

        <div class="field">
            <div class="control">
                <input type="submit" class="button is-link" value="Delete Project">
            </div>
        </div>
    </form>
@endsection
