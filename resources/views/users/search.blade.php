<div class="user-cards">
    @forelse ($users as $user)
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
    @empty
        <div class="user-card">
            <div class="user-card-content">
                <h3>No se encontraron usuarios</h3>
            </div>
        </div>
    @endforelse
</div>