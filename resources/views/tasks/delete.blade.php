@extends('layouts.main')

@section('title', 'Excluir tarefa')

@section('content')

<form action="{{ route('delete_task', ['id' => $task->id]) }}" method="POST">
    @csrf <!-- componente blade que gera token temporário, padrão de segurança do laravel-->
    <div>    
        <div>  
            <label for="title">Essa ação é irreversível. Tem certeza que deseja excluir essa tarefa?</label>
            <input type="text" class="form" id="title" name="title" value="{{ $task->title }}">
        </div>
        <button>Sim</button>
    </div>
</form>

@endsection