@extends('layout')


    
@section('content')
    <div class="card container mb-3 pt-2 pb-2">
        <h3>{{$task['taskName']}}</h3>
        <p>{{$task['description']}}</p>
    </div>
@endsection

