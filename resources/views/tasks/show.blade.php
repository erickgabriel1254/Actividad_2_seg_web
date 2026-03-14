@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Detalle de tarea</h1>

    <div class="card">
        <div class="card-body">
            <h4>{{ $task->title }}</h4>
            <p>{{ $task->description }}</p>
        </div>
    </div>

    <a href="{{ route('tasks.index') }}" class="btn btn-secondary mt-3">Volver</a>
</div>
@endsection