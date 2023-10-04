@props(['task'])

<div class="card shadow-sm container mb-3 p-4">
    <a href="{{ $task->id }}">
        <strong>{{ $task->user_id }} - {{ $task->taskName }}</strong>
    </a>
    <p class="pt-2">
        {{ $task->description }}
    </p>
    <div class="d-flex justify-content-end">
        <div>
            <form method="POST" action="{{ $task->id }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-light">Delete</button>
            </form>

        </div>

    </div>

</div>
