@extends('layouts.main')

@section('title', 'Tarefas')

@section('content')

<div>
    @foreach($tasks as $task)
    <div class="card-body">
        <h5 class="card-title">{{ $task->title }}</h5>
        <p class="card-priority">{{ $task->priority }}</p>
        <p class="card-deadline">{{ $task->deadline }}</p>
        <p class="card-assigned">{{ $task->assigned }}</p>
        <p class="card-description">{{ $task->description }}</p>
    </div>
    @endforeach
</div>

@endsection