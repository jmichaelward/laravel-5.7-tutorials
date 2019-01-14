@extends('layout')

@section('content')
    <form method="post" action="/projects">
        {{ csrf_field() }}
        <div>
            <input type="text" name="title" placeholder="Project title"
                   class="input {{ $errors->has('title') ? 'is-danger' : '' }}" value="{{ old('title') }}" required/>
        </div>

        <div>
            <textarea name="description" placeholder=" Project description"
                      class="input {{ $errors->has('description') ? 'is-danger' : '' }}" required>
                {{ old('description') }}
            </textarea>
        </div>

        <div>
            <input type="submit">
        </div>

        @include('errors')
    </form>
@endsection
