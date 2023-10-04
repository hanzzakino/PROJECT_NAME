<x-main-container>
    <div class="card shadow-sm container mt-4 mb-3 pt-2 pb-2">

        <div>
            <h2 class="mt-3 mb-3">Create Task</h2>
        </div>






        <form method="POST" action="/tasks">
            @csrf
            <!-- Name input -->
            <div class="form-outline mb-4 mt-4">
                <label class="form-label" for="taskName">Task Name:</label>
                <input type="text" id="taskName" name="taskName" class="form-control" />

                @error('taskName')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="description">Description:</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea>

            </div>

            <!-- Submit button -->
            <div class="d-flex w-100 justify-content-center">
                <button type="submit" class="btn btn-primary btn-block mb-4 mt-4">Create</button>
            </div>

        </form>


    </div>
</x-main-container>
