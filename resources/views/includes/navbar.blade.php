<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            <h4>JOBS & JOBS</h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav ms-auto" id="myTab" role="tablist">
                
                <li><a href="{{ url('/pagina_inicio') }}" class="nav-link active">INICIO</a></li>
                <li><a href="{{ url('/login') }}" class="nav-link active">INICIAR SESIÓN</a></li>
                {{-- <li><a href="{{ url('/buscar_empleo') }}" class="nav-link active">EMPLEOS</a></li>
                <li><a href="{{ url('/publicar_empleo') }}" class="nav-link active">PUBLICAR</a></li> --}}
            </ul>
        </div>
    </div>
</nav>
