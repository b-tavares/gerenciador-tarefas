@extends('layouts.main')

@section('title', 'Ver: ' . $task->title)

@section('content')

<div>  
    <label>Tarefa:</label>
    <input type="text" name="title" value="{{ $task->title }}">
</div>
<div>  
    <label>Prioridade:</label>
    <input type="text" name="priority" value="{{ $task->priority }}">

</div>
<div>   
    <label>Prazo:</label>
    <input type="date" name="deadline" value="{{ $task->deadline }}">
</div>
<div>
    <label>Pessoa:</label>
    <input type="text" name="assigned" value="{{ $task->assigned }}">
</div>
<div>
    <label for="title">Descrição:</label>
    <input type="textarea" name="description" value="{{ $task->description }}">
</div>

@endsection