

<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand text-dark" href="{{ url('/inicio_empleador') }}">
            <h4 class="mb-0">JOBS & JOBS</h4>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="{{ url('/inicio_empleador') }}" class="nav-link text-dark">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/publicar_empleo') }}" class="nav-link text-dark">Publicar Empleo</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/mis_publicaciones') }}" class="nav-link text-dark">Mis Publicaciones</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/postulantes') }}" class="nav-link text-dark">Postulantes</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/mensajes') }}" class="nav-link text-dark">Mensajes</a>
                </li>
            </ul>

            <!-- Perfil de empleador -->
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('imagenes/istockphoto-117145047-612x612.jpg') }}" alt="Perfil" width="32" height="32" class="rounded-circle me-2">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        {{-- <li><a class="dropdown-item" href="{{ url('/perfil_empleador') }}">Mi Perfil</a></li>
                        <li><a class="dropdown-item" href="{{ url('/configuracion_empleador') }}">Configuración</a></li>
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
