{{-- Navbar para la vista de empleado --}}
{{-- Esta vista se incluye en las vistas de empleado para mostrar la barra de navegación --}}
{{-- Se utiliza Bootstrap 5 para el diseño y estilo de la barra de navegación --}}
{{-- Se utiliza la autenticación de Laravel para mostrar el nombre del usuario y su imagen de perfil --}}
{{-- Se incluyen enlaces a diferentes secciones de la aplicación, como inicio, buscar empleo, postulaciones y mensajes --}}
{{-- También se incluye un menú desplegable para el perfil del usuario con opciones de configuración y cerrar sesión --}}

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand text-dark" href="{{ url('/inicio_empleado') }}">
            <h4 class="mb-0">JOBS & JOBS</h4>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="{{ url('/inicio_empleado') }}" class="nav-link text-dark">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/buscar_empleo') }}" class="nav-link text-dark">Buscar Empleo</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/postulaciones') }}" class="nav-link text-dark">Mis Postulaciones</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/mensajes') }}" class="nav-link text-dark">Mensajes</a>
                </li>
            </ul>

            <!-- Perfil de usuario -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('imagenes/descarga.jpg') }}" alt="Perfil" width="32" height="32" class="rounded-circle me-2">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        {{-- <li><a class="dropdown-item" href="{{ url('/perfil') }}">Mi Perfil</a></li>
                        <li><a class="dropdown-item" href="{{ url('/configuracion') }}">Configuración</a></li>
                        <li><hr class="dropdown-divider"></li> --}}
                        <li>
                            <form >
                                @csrf
                                <button type="submit" class="dropdown-item"><a href="{{ route('logout') }}">Cerrar sesion </a></button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
