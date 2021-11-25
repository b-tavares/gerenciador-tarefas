<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task; //não esquecer de chamar a classe Task!!!!

class TaskAPIController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return $tasks;
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);
        
        return $task;
    }

    public function store(Request $request)
    { 
        $task = Task::create($request->all()); //create seria criar a task em vez de instanciar - metodo proprio

        return $task;
    }

    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $task->update($request->all()); // poderia dar return no inicio da linha

        return $task;
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);

        $task->delete(); 

        return response()->noContent();
    }

}