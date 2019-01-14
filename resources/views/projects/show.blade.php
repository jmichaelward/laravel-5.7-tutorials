@extends('layout')

@section('content')
    <h1 class="title">{{ $project->title }}</h1>

    <p>
        <a href="/projects/{{ $project->id }}/edit">Edit Project</a>
    </p>

    <div class="content">
        {{ $project->description }}
    </div>

    @if ($project->tasks->count())
        <div class="box">
            @foreach ($project->tasks as $task)
                    <form method="POST" action="/tasks/{{ $task->id }}">
                        @method('PATCH')
                        @csrf

                        <div>
                            <label for="completed" class="checkbox{{ $task->completed ? ' is-complete' : '' }}">
                                <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                                {{ $task->description }}
                            </label>
                        </div>

                    </form>
            @endforeach
        </div>
    @endif

    <form method="post" action="/projects/{{ $project->id }}/tasks" class="box">
        @csrf

        <div class="field">
            <label for="description" class="label">New Task</label>
            
            <div class="control">
                <input type="text" class="input" name="description" placeholder="New Task" required>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <input type="submit" class="button is-link" value="Add Task">
            </div>
        </div>

        @include('errors')
    </form>
@endsection
