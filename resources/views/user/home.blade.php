@extends('layout')

@section('content')
    <div class="container-fluid pb-4 pt-4">
        <div class="container d-flex flex-row justify-content-end mt-3">
            <h1>Hello! {{$name}}</h1>
        </div>
        
        
        <div class="container pt-4"> 
            
            <h1>
                Tasks:
            </h1>
            @if(empty($tasks))
                <h2>Empty</h2>
            @else
                @foreach ($tasks as $task)
                    <div class="card container mb-3 pt-2 pb-2">
                        <a href="task/{{$task['id']}}">
                            {{$task['taskName']}}
                        </a>
                        <p>
                            {{$task['description']}}
                        </p>
                    </div>
                @endforeach
            @endif
            <div class="d-flex flex-row justify-content-center">
                <button class="btn btn-primary">Add task</button>
            </div>
        </div>
    </div>
@endsection
