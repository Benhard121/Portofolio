<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'technologies' => 'nullable|string',
            'github_url' => 'nullable|url',
            'live_url' => 'nullable|url',
        ]);

        Project::create($validated);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Proyek berhasil ditambahkan.');
    }

    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'technologies' => 'nullable|string',
            'github_url' => 'nullable|url',
            'live_url' => 'nullable|url',
        ]);

        $project->update($validated);

        return redirect()->route('admin.projects.index')
            ->with('success', 'Proyek berhasil diperbarui.');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('admin.projects.index')
            ->with('success', 'Proyek berhasil dihapus.');
    }
}