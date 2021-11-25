@extends('layouts.main')

@section('title', 'Editar: ' . $task->title)

@section('content')

<div id="task-create-container">
        <form action="{{ route('update_task', ['id' => $task->id]) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="form-group">  
                <label for="title">Tarefa:</label>
                <input type="text" class="form" id="title" name="title" value="{{ $task->title }}">
            </div>
            <div class="form-group">  
                <label for="title">Prioridade:</label>
                <select name="priority" id="priority" class="form" value="{{ $task->priority }}">
                    <option value="0">Normal</option>
                    <option value="1">Urgente</option>
                </select>
            </div>
            <div class="form-group">   
                <label for="deadline">Prazo:</label>
                <input type="date" class="form" id="deadline" name="deadline" value="{{ $task->deadline }}">
            </div>
            <div class="form-group">
                <label for="title">Responsável:</label>
                <input type="text" class="form" id="assigned" name="assigned" value="{{ $task->assigned }}">
            </div>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form">{{ $task->description }}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="update" class="btn btn-primary"  value="Atualizar">
                <input type="submit" name="cancel" class="btn btn-primary"  value="Cancelar">
            </div>
        </form>
</div>

@endsection
