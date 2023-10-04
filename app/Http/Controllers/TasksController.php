<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TasksController extends Controller
{
    public function index() {
            
            return view('tasks.home',[
                'tasks' => Tasks::latest()->filter(request(['search']))->get(),
                'resultCount' => Tasks::latest()->filter(request(['search']))->count(),
            ]);
    }

    public function show(Tasks $task) {
        return view('tasks.task',[
            'task'=> $task
        ]);
    }

    public function create() {
        return view('tasks.create');
    }

    public function store(Request $request) {
        $formData = $request->validate([
            'taskName' => ['required', Rule::unique('tasks','taskName')],
            'description' => 'required'
        ]);

        Tasks::create($formData);

          return redirect('/');
    }
}
