<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class TasksController extends Controller
{
    public function index()
    {

        return view('tasks.home', [
            'tasks' => Tasks::where('user_id', auth()->user()->id)->latest()->filter(request(['search']))->paginate(15),
            'resultCount' => Tasks::where('user_id', auth()->user()->id)->latest()->filter(request(['search']))->count(),
        ]);
    }

    public function show(Tasks $task)
    {
        return view('tasks.task', [
            'task' => $task
        ]);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {


        $formData = $request->validate([
            'taskName' => ['required', Rule::unique('tasks', 'taskName')],
            'description' => 'required'
        ]);

        $formData['user_id'] = auth()->id();

        Tasks::create($formData);


        return back()->with('sucess', 'Task Created');
    }

    public function delete(Tasks $task)
    {
        $task->delete();
        return back()->with('sucess', 'Task Deleted');
    }
}
