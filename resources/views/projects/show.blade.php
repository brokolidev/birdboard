@extends('layouts.app')


@section('content')
<header class="flex items-center mb-3 py-4">
    <div class="flex justify-between items-end w-full">
        <p class="text-grey text-sm font-normal">
            <a href="/projects" class="text-grey text-sm font-normal no-underline">My Projects</a> / {{ $project->title }}
        </p>
        <a href="/projects/create" class="button py-2 px-5">Add Project</a>
    </div>
</header>

<main>
    <div class="lg:flex -mx-3">
        <div class="lg:w-3/4 px-3 mb-6">
            <div class="mb-8">
                <h2 class="text-grey font-normal text-lg mb-3">Tasks</h2>

                @foreach ($project->tasks as $task)
                    <div class="card ml-0 mb-3">
                        <form action="{{ $task->path() }}" method="post">
                            @method('PATCH')
                            @csrf
                            <div class="flex">
                                <input type="text" name="body" value="{{ $task->body }}" class="w-full {{ $task->completed ? 'text-grey' : '' }}">
                                <input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                            </div>
                        </form>
                    </div>
                @endforeach
                <div class="card ml-0 mb-3">
                    <form action="{{ $project->path() . '/tasks' }}" method="post">
                        @csrf
                        <input type="text" placeholder="Add new task" class="w-full" name="body">
                    </form>
                </div>
            </div>

            <div>
                <h2 class="text-grey font-normal text-lg mb-3">General Notes</h2>
                <textarea class="card w-full" style="min-height: 200px;">Lorem Ipsum</textarea>
            </div>
        </div>

        <div class="lg:w-1/4 px-3">
            @include('projects.card')
        </div>
    </div>
</main>


@endsection