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
@endsection

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

@section('formEdit')
    <form method="POST" id="editForm" action="" data-action-base="{{ url('users/') }}">
        @csrf
        @method('PUT')

        <input type="hidden" id="edit_id" name="id" value="">

        <div>
            <label for="edit_nombre_completo">Nombre completo</label>
            <input type="text" id="edit_nombre_completo" name="nombre_completo">
        </div>

        <div>
            <label for="edit_rol">Rol:</label>
            <select name="edit_rol" id="rol" required>
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
        </div>

        <div>
            <label for="edit_email">Email</label>
            <input type="email" id="edit_email" name="email">
        </div>

        <div class="modal-actions">
            <button type="submit" class="save-btn">Actualizar</button>
            <button type="button" class="cancel-btn">Cancelar</button>
        </div>
    </form>
@endsection
    