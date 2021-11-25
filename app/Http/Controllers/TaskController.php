<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Task; //não esquecer de chamar a classe Task!!!!

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all(); //'welcome' @foreach. o que aconteceu?? - de novo o mesmo erro... $task undefined

        return view('welcome', ['tasks' => $tasks]);
    }

    public function create() //Crud
    { 
        return view('tasks.create');
    }

    public function store(Request $request) //Crud esse request é uma classe? r: sim
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

    public function show($id)  //cRud
    {
        $task = Task::findOrFail($id);
        
        return view('tasks.show', ['task' => $task]);
    }

    public function edit($id) //crUd
    { 
        $task = Task::findOrFail($id);
        
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, $id)  //crUd NAO TA FUNCIONANDO. ESSA FOI MUITO DIFICIL!!!!! MENTORIA: TENTAR ENTENDER PQ ESSE IF
    {
        $task = Task::findOrFail($id);

        if (! $request->has('update')) 
        {
            return redirect()->route('home');
        }

        else 
        {
            
            $task->update([ //esses métodos ja existem no laravel?
                'title' => $request->title,
                'priority' => $request->priority,
                'deadline' => $request->deadline,
                'assigned' => $request->assigned,
                'description' => $request->description,
            ]);

            return "Tarefa atualizada!";
        }
    }

    public function delete($id) //cruD
    {
        $task = Task::findOrFail($id);
        
        return view('tasks.delete', ['task' => $task]);
    }

    public function destroy($id) //cruD poderia colocar o tipagem
    {
        $task = Task::findOrFail($id);
        $task->delete();
        
        return redirect('/')->with('msg', 'Tarefa excluída.');
    }
}