<x-main-container>
    <div class="card container mb-3 pt-2 pb-2">
        <form method="POST" action="/tasks" >
            @csrf
            <!-- Name input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="taskName">Task Name:</label>
              <input type="text" id="taskName" name="taskName" class="form-control" />
              
              @error('taskName')
                    <p class="text-danger">{{$message}}</p>
            @enderror
            </div>
          
            <!-- Message input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="description">Message</label>
              <textarea class="form-control" id="description" name="description" rows="4"></textarea>
              
            </div>
          
            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
          </form>
    </div>
</x-main-container>