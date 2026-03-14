@extends('layouts.app')

@section('content')
<div class="container">

<h2>Crear Usuario</h2>

<form method="POST" action="{{ route('users.store') }}">
@csrf

<div class="mb-3">
<label>Nombre</label>
<input type="text" name="name" class="form-control">
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="mb-3">
<label>Password</label>
<input type="password" name="password" class="form-control">
</div>

<div class="mb-3">
<label>Rol</label>
<select name="role" class="form-control">
<option value="Administrador">Administrador</option>
<option value="Editor">Editor</option>
<option value="Usuario">Usuario</option>
</select>
</div>

<button class="btn btn-primary">Crear usuario</button>

</form>

</div>
@endsection