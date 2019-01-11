@extends('layout')

@section('title','Post details')

@section('content')

    <h1>{{$project->title}}</h1>
    <p>{{$project->description}}</p>
    <a href="/projects/{{$project->id}}/edit">Edit</a> / 
    <a href="/projects">Back</a>

@endsection