@extends('layout')

@section('title','Edit project')

@section('content')
  
    <h1 class="title">Edit project</h1>

    <form action="/projects/{{$project->id}}" method="POST">

        @method("PATCH")
        @csrf

        {{-- {{dd($project->title)}} --}}
    
        <div class="form-group">
          <label for="name">Project name:</label>
          <input type="text" name="title" id="title" class="form-control" aria-describedby="helpId" value="{{$project->title}}"  required>
        </div>

    <div class="form-group">
            <label for="description">Project description:</label>
            <textarea class="form-control" name="description" id="description" rows="3" required>{{$project->description}}</textarea>
        </div>
  
        <button type="submit" class="btn btn-primary">Update</button>

    </form>

    <form action="/projects/{{$project->id}}" method="POST">

        @method("DELETE")
        @csrf

        <div class="form-group">
          <label for=""></label>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Delete</button>
        </div>
  
    </form>

@endsection