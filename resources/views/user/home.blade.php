<x-main-container>
    <div class="container-fluid pb-4 pt-4">
        <div class="container d-flex flex-row justify-content-between mt-3">
            <div class="d-flex align-items-center">
                <form class="form-group d-flex flex-row" >
                    <input class="form-control" type="text" name="search" placeholder="Search"/>
                    <button class="btn btn-primary ml-2" type="submit">Search</button>
                </form>
                
            </div>
            <div>
                <h1>Hello!</h1>
            </div>
            
        </div>
        
        
        <div class="container pt-4"> 
            
            <h1>
                Tasks:
            </h1>
            @if(empty($tasks))
                <h2>Empty</h2>
            @else
                @foreach ($tasks as $task)
                    <x-task-card :task="$task"/>
                @endforeach
            @endif
            <div class="d-flex flex-row justify-content-center">
                <button class="btn btn-primary">Add task</button>
            </div>
        </div>
    </div>
</x-main-container>
