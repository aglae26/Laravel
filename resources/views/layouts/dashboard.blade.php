<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="{{ asset('js/sweetalert2.all.min.js')}}"></script>
</head>

<body>
    <div class="dashboard">
        <!-- Sidebar -->
        <nav class="sidebar" id="sidebar">
            <div class="sidebar-content">
                <div class="sidebar-item" onclick="window.location.href='{{ route('dashboard') }}'">
                    Inicio
                </div>
                <div class="sidebar" id="sidebar">
                    Herramientas
                    <div class="submenu">
                        <div class="submenu-item">Crear</div>
                        <div class="submenu-item">Listar</div>
                        <div class="submenu-item">Actualizar</div>
                        <div class="submenu-item">Eliminar</div>
                    </div>
                </div>
            </div>
            <div class="sidebar-item">
                Préstamo
                <div class="submenu">
                    <div class="submenu-item">Crear</div>
                    <div class="submenu-item">Actualizar</div>
                    <div class="submenu-item">Eliminar</div>
                </div>
            </div>
            <div class="sidebar-item" @if(Route::currentRouteName() == 'dashboard')
            onclick="window.location.href='{{ route('users.index') }}'" @endif>
                Usuarios
                @if(Route::currentRouteName() == 'users.index')
                    <div class="submenu">
                        <div class="submenu-item">Crear</div>
                    </div>
                @endif
            </div>
    </div>
    </nav>
    <!-- Main Content -->
    <div class="main-content" id="main-content">
        <!-- Header -->
        <header class="header">
        </header>

        <!-- Content Area -->
        <div class="content">
            @yield('content')

            <!-- Modal Crear-->
            <div id="modal" class="modal-crear">
                <div class="modal-content">
                    <span class="close-btn" id="close-btn-crear">&times;</span>
                    <h2>Formulario crear</h2>
                    @yield('formCreate')
                </div>
            </div>
            <!-- Fin modal Crear-->

            <!-- Modal Actualizar-->
            <div id="editModal" class="modal-actualizar">
            </div>
            <!-- Fin modal Actualizar-->
        </div>
    </div>
    </div>
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('js')
</body>

</html>