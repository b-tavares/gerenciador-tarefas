@extends('layouts.main')

@section('title', 'Nova tarefa')

@section('content')

<div id="task-create-container">
        <form action="{{ route('create_task') }}" method="POST">
        @csrf
            <div class="form-group">  
                <label for="title">Tarefa:</label>
                <input type="text" class="form" id="title" name="title" placeholder="Nomeie sua tarefa">
            </div>
            <div class="form-group">  
                <label for="title">Prioridade:</label>
                <select name="priority" id="priority" class="form">
                    <option value="low">Baixa</option>
                    <option value="normal">Normal</option>
                    <option value="urgent">Urgente</option>
                </select>
            </div>
            <div class="form-group">   
                <label for="deadline">Prazo:</label>
                <input type="date" class="form" id="deadline" name="deadline">
            </div>
            <div class="form-group">
                <label for="title">Responsável:</label>
                <input type="text" class="form" id="assigned" name="assigned" placeholder="Quem vai realizar essa tarefa?">
            </div>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form" placeholder="O que precisa ser feito, com detalhes."></textarea>
            </div>
            <div>
                <input class="btn btn-primary" type="submit" class="button">
            </div>
        </form>
</div>

@endsection
