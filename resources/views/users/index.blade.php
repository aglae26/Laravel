@extends('layouts.dashboard')
@section('nameModule', 'Usuarios')

@section('content')
    <div class="user-cards">

    @foreach ($users as $user)
    <div class="user-card">
        <div class="user-card-content">
            <h3>Nombre Completo:{{$user->nombre_completo}}</h3>
            <p>Usuario:{{$user->username}}</p>
            <p>Rol:{{$user->rol}}</p>
            <p>Email:{{$user->email}}</p>
        </div>
    </div>
    <div class="user-card-actions">
        <button class="edit-btn">Editar</button>
        <button class="delete-btn">Eliminar</button>
    </div>
    @endforeach
    </div>

    @section('formCreate')
    <form id="crearForm">

        <label for="nombre_completo">Nombre Completo</label>
        <input type="text" id="nombre_completo" name="nombre_completo" required>

        <label for="rol">Rol:</label>
        <select name="rol" id="rol" required>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <label for="password_confirmation">Confirmar Contraseña:</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>

        <button type="submit" class="btn">Guardar Cambios</button>
    </form>
@endsection
    