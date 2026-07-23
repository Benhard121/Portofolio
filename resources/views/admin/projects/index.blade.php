@extends('admin.layout')

@section('content')
<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-[#1b1b18] dark:text-[#EDEDEC]">Projects</h1>
        <a href="{{ route('admin.projects.create') }}" class="px-4 py-2 bg-[#F53003] text-white rounded-lg hover:opacity-90 transition">
            + Add Project
        </a>
    </div>
    
    @if(session('success'))
        <div class="bg-green-100 dark:bg-green-900 text-green-800 dark:text-green-200 p-3 rounded-lg mb-4">
            {{ session('success') }}
        </div>
    @endif

    @if($projects->count())
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($projects as $project)
            <div class="bg-white dark:bg-[#161615] rounded-lg shadow p-6">
                <h3 class="font-semibold mb-2">{{ $project->title }}</h3>
                <p class="text-sm text-[#706f6c] dark:text-[#A1A09A] mb-3">{{ Str::limit($project->description, 100) }}</p>
                <div class="flex gap-2">
                    <a href="{{ route('admin.projects.edit', $project) }}" class="text-[#F53003] hover:underline text-sm">Edit</a>
                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" onsubmit="return confirm('Delete this project?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline text-sm">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $projects->links() }}
        </div>
    @else
        <p class="text-[#706f6c] dark:text-[#A1A09A]">No projects found.</p>
    @endif
</div>
@endsection