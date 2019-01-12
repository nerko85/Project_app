@extends('layout')

@section('title','Post details')

@section('content')

    <h1>{{$project->title}}</h1>
    <p>{{$project->description}}</p>
    <a href="/projects/{{$project->id}}/edit">Edit</a> / 
    <a href="/projects">Back</a>

    @if ($project->tasks->count())
        <h5>Tasks to complete:</h5>
        <ul>
            @foreach ($project->tasks as $task)

                    <li>
                        <form action="/tasks/{{$task->id}}" method="POST">
                            @method("PATCH")
                            @csrf
                            <div class="form-check">
                                <label class="form-check-label">
                                <input type="checkbox" class="form-check-input" name="completed" id="completed" value="checkedValue" onclick="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
                                    {{$task->description}}
                                </label>
                            </div>
                        </form>
                    </li>

            @endforeach
        </ul>  
    @endif

@endsection