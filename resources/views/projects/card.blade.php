<div class="card" style="height: 200px;">
    <h3 class="font-normal text-xl py-4 border-blue-light border-solid border-t-0 border-b-0 border-r-0 border-l-4 pl-4 -ml-5 my-0 mb-3">
        <a href="{{ $project->path() }}" class="text-black no-underline">{{ $project->title }}</a>
    </h3>

    <div class="text-grey">{{ str_limit($project->description, 100) }}</div>
</div>