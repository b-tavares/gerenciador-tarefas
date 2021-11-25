<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('welcome', ['tasks' => $tasks]);
    }

    public function create()
    { 
        return view('tasks.create');
    }

    public function store(Request $request)
    { 
        $task = new Task;

        $task->title = $request->title;
        $task->priority = $request->priority;
        $task->deadline = $request->deadline;
        $task->assigned = $request->assigned;
        $task->description = $request->description;

        $task->save();

        return redirect('/');
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);
        
        return view('tasks.show', ['task' => $task]);
    }

    public function edit($id)
    { 
        $task = Task::findOrFail($id);
        
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        if (! $request->has('update')) 
        {
            return redirect()->route('home');
        }

        else 
        {
            
            $task->update([
                'title' => $request->title,
                'priority' => $request->priority,
                'deadline' => $request->deadline,
                'person_id' => $request->person_id,
                'description' => $request->description,
            ]);

            return "Tarefa atualizada!";
        }
    }

    public function delete($id)
    {
        $task = Task::findOrFail($id);
        
        return view('tasks.delete', ['task' => $task]);
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        
        return redirect('/')->with('msg', 'Tarefa excluída.');
    }
}
