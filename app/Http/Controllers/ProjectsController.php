<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    
    public function index(){
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create(){
        return view('projects.create');
    }

    // public function store(){

    //     $project = new Project;
    //     $project->title = request('title');
    //     $project->description = request('description');
    //     $project->save();
        
    //     return redirect('/projects');
    // }

    public function store(){

        // request()->validate([
        //     'title'=> 'required',
        //     'description'=> 'required'
        // ]);
        
        // $project = Project::create(request(['title','description']));     
        // return redirect('/projects');

        $validated = request()->validate([
            'title'=> ['required','min:2','max:20'],
            'description'=> ['required','min:10','max:500']
        ]);
        
        $project = Project::create($validated);     
        return redirect('/projects');
    }

    // public function edit($id){
    //     $project = Project::find($id);
    //     return view('projects.edit',compact('project'));
    // }
    
    public function edit(Project $project){
        return view('projects.edit',compact('project'));
    }

    // public function update($id){
    //     $project = Project::find($id);
    //     $project->title = request('title');
    //     $project->description = request('description');
    //     $project->update();
    
    //     return redirect('/projects');
    // }

    public function update(Project $project){
        $project->update(request(['title','description']));
        return redirect('/projects');
    }

    /* public function show($id){
        $project = Project::find($id);
        return view('projects.show',compact('project'));
    } */

    public function show(Project $project){
        return view('projects.show',compact('project'));
    }

    // public function destroy($id){
    //     $project = Project::find($id);
    //     $project->delete();
    //     return redirect('/projects');
    // }

    public function destroy(Project $project){
        $project->delete();
        return redirect('/projects');
    }

    public function api(){
        $projects = Project::all();
        return $projects;
    }
}
