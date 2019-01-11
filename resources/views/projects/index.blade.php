@extends('layout')

@section('title','Laracasts')

@section('content')
    
    <h1>List of Projects</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non pariatur exercitationem, possimus delectus eveniet id nemo earum optio sunt amet.</p>

    <ul class="list-unstyled">

        @foreach($projects as $project)
            <li>
                <a href="/projects/{{$project->id}}">{{$project->title}}</a>
            </li>
        @endforeach
        
    </ul>

    <div class="form-group">
      <label for="">Search</label>
      <input type="text" name="search" id="search" class="form-control" placeholder="Enter something to search" aria-describedby="helpId">
    </div>

    <div class="alert alert-info" role="alert">
        <ul class="projects">
            <div>Search for some project</div>
        </ul>
    </div>

    <script>
        
        const search = document.getElementById('search');
        const alert = document.querySelector('.alert');
        const inner = alert.querySelector('.projects');

        const endpoint = "http://127.0.0.1:8000/projects/api";
        let projects = [];

        fetch(endpoint).then(blob=>blob.json()).then(data=>projects.push(...data));

        function findMatches(wordToFind, projects){
            return projects.filter(project=>{
                const regex = new RegExp(wordToFind,'gi');
                return project.title.match(regex);
            })
        }

        function displayMatches(){
            const matchArray = findMatches(this.value,projects);
            if(this.value){
                const html = matchArray.map(project=>{
                    return `
                        <li><a href="/projects/${project.id}">${project.title}</a></li>
                    `
                }).join();
    
                inner.innerHTML = html;
            }else{
                inner.innerHTML = `<div>No results to display</div>`;
            }
        }

        search.addEventListener('change', displayMatches);
        search.addEventListener('keyup', displayMatches);
        
    </script>

@endsection