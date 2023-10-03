<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Home</title>
</head>
<body>
    <style>
        div {
            border: 1px dashed rgba(0, 0, 0, 0.342) !important;
        }
    </style>
    

    <div class="container m-3">
        <div class="d-flex flex-row justify-content-end">
            <h1>Hello! {{$name}}</h1>
        </div>
        
        <h1>
            Tasks:
        </h1>
        <div class="container"> 
            @if(empty($tasks))
                <h2>Empty</h2>
            @else
                @foreach ($tasks as $task)
                    <div class="card container mb-3 pt-2 pb-2">
                        <h3>
                            {{$task['taskName']}}
                        </h3>
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
    
    
</body>
</html>