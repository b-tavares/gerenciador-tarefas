@extends('layouts.main')

@section('title', 'Tarefas')

@section('content')

<div id="cards-container" class="col-md-12">
    @foreach($tasks as $task)
    <div class="card col-md-3">
        <h5 class="card-title">{{ $task->title }}</h5>
        <div class="card-body">
            <p class="card-priority">{{ $task->priority }}</p>
            <p class="card-deadline">{{ $task->deadline }}</p>
            <p class="card-assigned">{{ $task->assigned }}</p>
            <p class="card-description">{{ $task->description }}</p>
            <a href="/tarefas/editar/{{ $task->id }}" class="btn btn-primary">Editar</a>
            <a href="/tarefas/excluir/{{ $task->id }}" class="btn btn-primary">Excluir</a>
        </div>
    </div>
    @endforeach
</div>

@endsection