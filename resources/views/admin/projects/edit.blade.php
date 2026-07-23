@extends('admin.layout')

@section('content')
<div class="p-6">
    <h1 class="text-2xl font-bold mb-6 text-[#1b1b18] dark:text-[#EDEDEC]">Edit Project</h1>
    
    <form action="{{ route('admin.projects.update', $project) }}" method="POST" class="max-w-2xl">
        @csrf
        @method('PUT')
        <div class="space-y-4">
            <div>
                <label class="block text-sm font-medium mb-2">Title</label>
                <input type="text" name="title" value="{{ old('title', $project->title) }}" required class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg focus:ring-2 focus:ring-[#F53003] dark:bg-[#161615] dark:text-[#EDEDEC]">
            </div>
            
            <div>
                <label class="block text-sm font-medium mb-2">Description</label>
                <textarea name="description" rows="4" class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg focus:ring-2 focus:ring-[#F53003] dark:bg-[#161615] dark:text-[#EDEDEC]">{{ old('description', $project->description) }}</textarea>
            </div>
            
            <div>
                <label class="block text-sm font-medium mb-2">Technologies</label>
                <input type="text" name="technologies" value="{{ old('technologies', $project->technologies) }}" class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg focus:ring-2 focus:ring-[#F53003] dark:bg-[#161615] dark:text-[#EDEDEC]">
            </div>
            
            <div>
                <label class="block text-sm font-medium mb-2">GitHub URL</label>
                <input type="url" name="github_url" value="{{ old('github_url', $project->github_url) }}" class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg focus:ring-2 focus:ring-[#F53003] dark:bg-[#161615] dark:text-[#EDEDEC]">
            </div>
            
            <div>
                <label class="block text-sm font-medium mb-2">Live URL</label>
                <input type="url" name="live_url" value="{{ old('live_url', $project->live_url) }}" class="w-full px-4 py-2 border border-[#e3e3e0] dark:border-[#3E3E3A] rounded-lg focus:ring-2 focus:ring-[#F53003] dark:bg-[#161615] dark:text-[#EDEDEC]">
            </div>
            
            <button type="submit" class="px-6 py-2 bg-[#F53003] text-white rounded-lg hover:opacity-90 transition">
                Update Project
            </button>
        </div>
    </form>
</div>
@endsection