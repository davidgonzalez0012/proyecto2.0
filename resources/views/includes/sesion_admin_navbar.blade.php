<body>
<!-- Sidebar -->
<nav class="sidebar d-flex flex-column p-3">
    <h4 class="mb-4 text-center">JOBS & JOBS<br>Admin</h4>
    <ul class="nav nav-pills flex-column mb-auto">
        <li><a href="{{ url('/admin/usuarios') }}" class="nav-link">Gestionar Usuarios</a></li>
        <li><a href="{{ url('/admin/publicaciones') }}" class="nav-link">Publicaciones</a></li>
        <li><a href="{{ url('/admin/postulaciones') }}" class="nav-link">Postulaciones</a></li>
        <li><a href="{{ url('/admin/comentarios') }}" class="nav-link">Comentarios</a></li>
    </ul>
</nav>

<!-- Main Content -->
<div class="content">

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container-fluid">

            <button class="btn btn-outline-secondary d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasSidebar">
                ☰
            </button>

            <div class="ms-auto d-flex align-items-right">
                <div class="me-3">
                    <button class="btn btn-outline-dark">
                        🔔
                    </button>
                </div>
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-right text-dark text-decoration-none dropdown-toggle" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('imagenes/descarga.jpg') }}" alt="Admin" width="32" height="32" class="rounded-circle me-2">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                        {{-- <li><a class="dropdown-item" href="{{ url('/admin/perfil') }}">Mi Perfil</a></li>
                        <li><a class="dropdown-item" href="{{ url('/admin/configuracion') }}">Configuración</a></li>
                        <li><hr class="dropdown-divider"></li> --}}
                        <li>
                            <form >
                                @csrf
                                <button type="submit" class="dropdown-item"><a href="{{ route('logout') }}">Cerrar sesion </a></button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>

    <!-- Page Content -->
    <main class="mt-4">
        <h1 class=admin_bienvenido>Bienvenido, Administrador</h1>
        <p class=admin_descripcion>Desde este panel puedes gestionar todos los usuarios, publicaciones y postulaciones del sistema.</p>

        <!-- Aquí puedes inyectar tarjetas de estadísticas, tablas, etc. -->
    </main>

</div>
</body>



