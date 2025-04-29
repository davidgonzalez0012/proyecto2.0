

@extends('layout.app')


@section('content')
@if (session('error'))
<div class="alert alert-danger">
    {{ session('error') }}
</div>
@endif

    <section class="vh-100 login-section">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card login-card">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block login-image-container">
                                <img src="{{ asset('imagenes/Captura de pantalla 2025-04-07 193104.png') }}" alt="login form"
                                    class="img-fluid login-img" />
                                <h2 class="login-heading">La mejor oferta para ti</h2>
                                <p class="login-quote">
                                    "La búsqueda de un nuevo empleo es un camino lleno de oportunidades. Cada experiencia
                                    temporal es una chance para aprender, crecer y acercarte a tus metas profesionales. ¡Tu
                                    próximo gran paso comienza aquí!"
                                </p>
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <form d="loginform" action="{{ route('iniciado') }}" method="post">
                                        @csrf
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3 icono-login"></i>
                                            <span class="h1 fw-bold mb-0">JOBS & JOBS</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3 login-subtitle">inicio de sesión</h5>
                                        <hr>

                                        {{-- <div class="mb-3">
                                            <label for="tipoUsuario" class="form-label" name ="tipo_usuario">Tipo de Usuario</label>
                                            <select class="form-select" id="tipoUsuario">
                                                <option value="">Seleccione un tipo de usuario</option>
                                                <option value="empleador">Empleador</option>
                                                <option value="administrador">Administrador</option>
                                                <option value="empleado">Empleado</option>
                                            </select>
                                        </div> --}}

                                        <div class="mb-3">
                                            <label for="nombre" class="form-label">Usuario</label>
                                            <input type="text" class="form-control" id="nombre" name="nombre" required
                                                placeholder="Ingrese su nombre de usuario">
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Contraseña</label>
                                            <input type="password" class="form-control" id="password" name="password" required
                                                placeholder="Ingrese su contraseña">
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="submit">Ingresar</button>
                                        </div>
                                    </form>

                                    <a class="small text-muted" href="#" data-bs-toggle="modal"
                                        data-bs-target="#recuperarModal">¿Olvidaste tu contraseña?</a>

                                    <p class="mb-5 pb-lg-2">¿No tienes una cuenta?
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#registroModal">¡Regístrate
                                            aquí!</a>
                                    </p>





                                    <!-- Modal de Registro -->
                                    <div class="modal fade" id="registroModal" tabindex="-1"
                                        aria-labelledby="registroModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content glass-modal">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="registroModalLabel">Crear nueva cuenta</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="formRegistro" action="{{ route('registro') }}" method="POST">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="registroTipoUsuario" class="form-label">Tipo de
                                                                Usuario</label>
                                                            <select class="form-select" id="registroTipoUsuario"
                                                                name="tipo_usuario" required>
                                                                <option value="">Seleccione un tipo de usuario
                                                                </option>
                                                                <option value="empleador">Empleador</option>
                                                                <option value="empleado">Empleado</option>
                                                                <option value="administrador">administrador</option>
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="registroNombre" class="form-label">Nombre
                                                                de usuario</label>
                                                            <input type="text" class="form-control" id="registroNombre"
                                                                name="nombre" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="registroEmail" class="form-label">Correo
                                                                Electrónico</label>
                                                            <input type="email" class="form-control" id="registroEmail"
                                                                name="email" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="registroPassword"
                                                                class="form-label">Contraseña</label>
                                                            <input type="password" class="form-control"
                                                                id="registroPassword" name="password" required>
                                                        </div>

                                                        <div class="d-grid">
                                                            <button type="submit"
                                                                class="btn btn-primary">Registrarme</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Modal de Recuperación -->
                                    <div class="modal fade" id="recuperarModal" tabindex="-1"
                                        aria-labelledby="recuperarModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content glass-modal">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="recuperarModalLabel">Recuperar contraseña
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="mb-3">Ingresa tu correo electrónico y te enviaremos un
                                                        enlace para restablecer tu contraseña.</p>
                                                    <form id="formRecuperar" action="{{ route('recuperacion') }}"
                                                        method="POST">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="recuperarEmail" class="form-label">Correo
                                                                Electrónico</label>
                                                            <input type="email" class="form-control"
                                                                id="recuperarEmail" name="email" required
                                                                placeholder="ejemplo@dominio.com">
                                                        </div>
                                                        <div class="d-grid">
                                                            <button type="submit" class="btn btn-primary">Enviar enlace
                                                                de recuperación</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cerrar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection
