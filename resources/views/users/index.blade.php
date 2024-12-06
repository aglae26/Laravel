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
                <p hidden>id: {{ $user->id }}</p>
            </div>
            <div class="user-card-actions">
                <button class="edit-btn">Editar</button>
                <button class="delete-btn">Eliminar</button>
                <form method="POST" action="{{ url('users/' . $user->id) }}" style="display: none">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection

@section('formCreate')

<form method="POST" id="crearForm" action="{{route('users.store')}}">
    @csrf
    <label for="nombre_completo">Nombre Completo:</label>
    <input type="text" id="nombre_completo" name="nombre_completo" required>

    <label for="username">Nombre de Usuario: </label>
    <input type="text" id="username" name="username" require />

    <div>
        <label for="rol">Rol:</label>
        <select id="rol" name="rol" required>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
    </div>

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
        <label for="username">Nombre de Usuario: </label>
        <input type="text" id="edit_username" name="username" require />
    </div>

    <div>
        <label for="edit_rol">Rol:</label>
        <select id="edit_rol" name="rol">
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

@section('js')

<script>
    $('div').on('click', '.delete-btn', function () {
        $nombre_completo = $(this).parent().parent().find('h3').text().split(":").pop().trim();

        Swal.fire({
            title: "¿Realmente quiere eliminar a éste usuario?",
            text: "¡Este proceso es irrevercible!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Si, eliminalo!"
        }).then((result) => {
            if (result.isConfirmed) {
                $(this).next().submit();
            }
        });
    });

    // Búsqueda

    $('#qsearch').on('keyup', function (e) {
        e.preventDefault();
        $query = $(this).val();
        $token = $('input[name=_token]').val();

        $.post('users/search',
            {
                q: $query,
                _token: $token
            },
            function (data) {
                $('.content').empty().append(data);
            }
        )
    });
</script>

@endsection