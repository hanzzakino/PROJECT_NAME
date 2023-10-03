<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index() {
            return view('user/home',[
                'tasks' => Tasks::latest()->filter(request(['search']))->get() 
            ]);
    }

    public function show(Tasks $task) {
        return view('user/task',[
            'task'=> $task
        ]);
    }
}
