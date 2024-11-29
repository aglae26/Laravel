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

    <form method="POST" id="crearForm" action="{{route('users.store')}}">
        @csrf
        <label for="nombre_completo">Nombre Completo</label>
        <input type="text" id="nombre_completo" name="nombre_completo" required>

        <label for="rol">Rol:</label>
        <select name="rol" id="rol" required>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
                required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <button type="submit" class="btn">Guardar cambios</button>
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
    