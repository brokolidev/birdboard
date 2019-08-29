@extends('layouts.app')

@section('content')

<form method="POST" action="/projects">
    @csrf
    <h1 class="heading is-1">Create a Project</h1>

    <div class="field">
        <label class="label">Title</label>
        <p class="control">
            <input class="input" type="text" name="title" placeholder="Title">
        </p>
    </div>

    <div class="field">
        <label class="label" for="description">Description</label>
        <p class="control">
            <textarea class="textarea" name="description" placeholder="Description"></textarea>
        </p>
    </div>

    <div class="field is-grouped">
        <p class="control">
            <button type="submit" class="button is-link">Create Project</button>
            <a href="/projects">Cancel</a>
        </p>
    </div>
</form>

@endsection