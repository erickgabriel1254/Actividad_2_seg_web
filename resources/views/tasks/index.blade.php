@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Listado de tareas</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @role('Administrador|Editor')
        <a href="{{ route('tasks.create') }}" class="btn btn-primary mb-3">Nueva tarea</a>
    @endrole

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tasks as $task)
                <tr>
                    <td>{{ $task->id }}</td>
                    <td>{{ $task->title }}</td>
                    <td>{{ $task->description }}</td>
                    <td>
                        <a href="{{ route('tasks.show', $task) }}" class="btn btn-info btn-sm">Ver</a>

                        @role('Administrador|Editor')
                            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning btn-sm">Editar</a>

                            <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar tarea?')">Eliminar</button>
                            </form>
                        @endrole
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No hay tareas registradas.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $tasks->links() }}
</div>
@endsection