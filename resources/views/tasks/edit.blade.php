@extends('layouts.main')

@section('title', 'Editar: ' . $task->title)

@section('content')

<div id="task-create-container">
        <form action="{{ route('update_task', ['id' => $task->id]) }}" method="POST">
        @csrf <!-- componente blade que gera token temporário, padrão de segurança do laravel-->
        @method('PUT')  <!--os forms html não dão suporte a certos verbos http, e que para contornar esta limitação o Laravel possibilita a criação de campos escondidos que definem o método e a identificação da rota. -->
            <div>  
                <label for="title">Tarefa</label>
                <input type="text" class="form" id="title" name="title" value="{{ $task->title }}">
            </div>
            <div>  
                <label for="title">Prioridade:</label>
                <select name="priority" id="priority" class="form" value="{{ $task->priority }}">
                    <option value="0">Normal</option>
                    <option value="1">Urgente</option>
                </select>
            </div>
            <div>   
                <label for="deadline">Prazo:</label>
                <input type="date" class="form" id="deadline" name="deadline" value="{{ $task->deadline }}">
            </div>
            <div>
                <label for="title">Pessoa:</label>
                <input type="text" class="form" id="assigned" name="assigned" value="{{ $task->assigned }}">
            </div>
            <div>
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form">{{ $task->description }}</textarea>
            </div>
            <div>
                <input type="submit" name="update" value="Atualizar">
                <input type="submit" name="cancel" value="Cancelar">
            </div>
        </form>
</div>

@endsection