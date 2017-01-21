<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TasksController extends Controller
{
    public function index()
    {
      $tasks = Task::all();

      return view('tasks.index')->withTasks($tasks);
    }

    public function create()
    {
      return view('tasks.create');
    }

    public function store(Request $request)
    {
      $this->validate($request, [
        'title' => 'required',
        'description' => 'required'
      ]);

      $input = $request->all();

      Task::create($input);

      Session::flash('flash_message', 'Task successfully added!');

      return redirect()->back();
    }

    public function show($id)
    {
      $task = Task::findOrFail($id);

      return view('tasks.show')->withTask($task);
    }

    public function edit($id)
    {
      $task = Task::findOrFail($id);
      
      return view('tasks.edit')->withTask($task);
    }
}
