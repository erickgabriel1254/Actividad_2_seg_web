@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Listado de usuarios</h1>
    <a href="{{ route('users.create') }}" class="btn btn-primary mb-3">
    Crear usuario
    </a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->roles->pluck('name')->join(', ') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">No hay usuarios.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection