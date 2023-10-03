@props(['task'])

<div class="card container mb-3 pt-2 pb-2">
    <a href="task/{{$task->id}}">
        {{$task->taskName}}
    </a>
    <p>
        {{$task->description}}
    </p>
</div>