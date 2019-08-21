@extends('layouts.app')


@section('content')
    
    <header class="flex items-center mb-3">
        <div class="flex justify-between items-center w-full">
            <h2 class="text-grey text-sm font-normal">My Projects</h2>
            <a href="/projects/create" class="button py-2 px-5">Add Project</a>
        </div>
    </header>

    <main class="lg:flex lg:flex-wrap -mx-3">
        @forelse ($projects as $project)
            <div class="lg:w-1/3 pb-6">
                <div class="bg-white rounded-lg shadow p-5 mx-3" style="height: 200px;">
                    <h3 class="font-normal text-xl py-4 border-blue-light border-solid border-t-0 border-b-0 border-r-0 border-l-4 pl-4 -ml-5 my-0 mb-3">
                        <a href="{{ $project->path() }}" class="text-black no-underline">{{ $project->title }}</a>
                    </h3>

                    <div class="text-grey">{{ str_limit($project->description, 100) }}</div>
                </div>
            </div>
        @empty
            <div>No Projects Yet.</div>
        @endforelse
        </main>

@endsection