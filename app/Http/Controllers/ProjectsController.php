<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('projects.index', [
            'projects' => Project::all(),
        ]);
    }

    public function create()
    {
        return view('projects.create');
    }

    /**
     * @author Jeremy Ward <jeremy.ward@webdevstudios.com>
     * @since 2019-01-13
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store()
    {
        $attributes = request()->validate([
            'title'       => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
        ]);

        Project::create($attributes);

        return redirect('/projects');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        $project->setAttribute('title', request('title'));
        $project->setAttribute('description', request('description'));
        $project->save();

        return redirect('/projects');
    }

    public function destroy($id)
    {
        Project::findOrFail($id)->delete();

        return redirect('/projects');
    }
}


