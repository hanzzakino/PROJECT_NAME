<x-main-container>
    <div class="container-fluid pb-4 pt-4">
        <div class="container d-flex flex-row justify-content-between mt-3">
            <div class="d-flex align-items-center">
                <form class="form-group d-flex flex-row" >
                    <input class="form-control" type="text" name="search" placeholder="Search"/>
                    <button class="btn btn-primary" type="submit">Search</button>
                </form>
                
            </div>
            <div>
                <h1>Hello!</h1>
            </div>
            
        </div>
        
        
        <div class="container pt-4"> 
            <div class="container d-flex flex-row justify-content-between mt-3 mb-4">
                <div>
                    <h1>
                        Tasks
                    </h1>
                </div>
                <div class="d-flex align-items-center">
                    <p>
                        {{$resultCount}} Items
                    </p>
                </div>
            </div>
            
            @if(empty($tasks))
                <h2>Empty</h2>
            @else
                @foreach ($tasks as $task)
                    <x-task-card :task="$task"/>
                @endforeach
            @endif
            <div class="d-flex flex-row justify-content-center">
                <a href="/tasks/create" class="btn btn-primary">Add task</a>
            </div>
        </div>
    </div>
</x-main-container>
