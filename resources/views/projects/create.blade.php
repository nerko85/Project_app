@extends('layout')

@section('title','Create project')

@section('content')
  
    <h1 class="title">Create new project</h1>

    <form action="/projects" method="POST">

        {{ csrf_field() }}
    
        <div class="form-group {{$errors->has('title')? "has-error":""}}">
          <label for="name">Project name:</label>
        <input type="text" name="title" id="title" class="form-control" aria-describedby="helpId" value="{{old('title')}}">
        </div>


        <div class="form-group {{$errors->has('description')? "has-error":""}}">
            <label for="description">Project description:</label>
            <textarea class="form-control" name="description" id="description" rows="3">{{old('description')}}</textarea>
        </div>
  
        <button type="submit" class="btn btn-primary">Create</button>

    </form>

    <br>
    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li><strong>{{$error}}</strong></li>
                @endforeach
            </ul>
        </div>    
    @endif

@endsection