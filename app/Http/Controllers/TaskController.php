<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks', [
            'tasks' => Task::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate(['task' => 'required']);

        Task::create(['name' => $request->task]);

        return back(); // Simple refresh
    }
}
