<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $projects=Project::paginate(10);
        return view('dashboard.projectes.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.projectes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
        'title' => 'required',
        'image' => 'required',
    ]);

    $path= $request->file('image')->store('uploads','custom');

    Project::create([
        'title' => $request->title,
        'image' => $path,
        'link' => $request->link,
        'description' => $request->description,

    ]);

    flash()->success('Projects created successfully!');

    return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
        return view('dashboard.projectes.edit',compact('project'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
        $request->validate([
        'title' => 'required',
        'image' => 'required',
    ]);

    if($request->hasFile('image')){
        File::delete(public_path($project->image));
        $path= $request->file('image')->store('uploads','custom');
    }

    $project->update([
        'title' => $request->title,
        'image' => $path ?? $project->image,
        'link' => $request->link,
        'description' => $request->description,

    ]);

    flash()->success('Projects created successfully!');

    return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
        File::delete(public_path($project->image));

        $project->delete();
        flash()->success('Project deleted successfully!');
        return redirect()->route('projects.index');

    }
}