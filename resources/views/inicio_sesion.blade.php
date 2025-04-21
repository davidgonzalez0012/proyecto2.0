{{-- @extends('layout.app')


@section('content')

    <div class="tab-content">
        <div class="tab-pane active " id="s2">

            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">

                            <div class="card-header  text-white text-center">
                                <h3>Inicio de Sesión</h3>
                            </div>
                            <div class="card-body">

                                <div class="mb-3">
                                    <label for="tipoUsuario" class="form-label">Tipo de Usuario</label>
                                    <select class="form-select" id="tipoUsuario">
                                        <option value="">Seleccione un tipo de usuario</option>
                                        <option value="empleador">Empleador</option>
                                        <option value="administrador">Administrador</option>
                                        <option value="empleado">Empleado</option>
                                    </select>
                                </div>



                                <form id="loginForm" action="{{ route('sesion.form') }}" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="correoElectronico" class="form-label">Correo Electrónico</label>
                                        <input type="email" class="form-control" id="correoElectronico" required
                                            placeholder="ejemplo@dominio.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="contrasena" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" id="contrasena" required
                                            placeholder="Ingrese su contraseña">
                                    </div>
                                    <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="recordarme">
                                        <label class="form-check-label" for="recordarme">Recordarme</label>
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="boton_publicacion">Iniciar Sesión</button>
                                    </div>
                                </form>


                                <div class="text-center mt-3">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#registroModal"
                                        class="text-primary">
                                        Registrarse
                                    </a>
                                    <span class="mx-2">|</span>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#recuperarContrasenaModal"
                                        class="text-primary">
                                        ¿Olvidaste tu contraseña?
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="registroModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Registro de Usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                           

                                <div class="mb-3">
                                    <label class="form-label">Tipo de Usuario</label>
                                    <select class="form-select">
                                        <option value="empleador">Empleador</option>
                                        <option value="administrador">Administrador</option>
                                        <option value="empleado">Empleado</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nombre Completo</label>
                                    <input type="text" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Contraseña</label>
                                    <input type="password" class="form-control" required>
                                
                                <button type="submit" class="btn btn-primary w-100">Registrarse</button>
                            
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="recuperarContrasenaModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Recuperar Contraseña</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" required
                                        placeholder="Ingrese su correo electrónico">
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Recuperar Contraseña</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
@endsection
 --}}

@extends('layout.app')


@section('content')
    {{-- <div class="tab-content">
        <div class="tab-pane active " id="s2">

            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">

                            <div class="card-header  text-white text-center">
                                <h3>Inicio de Sesión</h3>
                            </div>
                            <div class="card-body">

                                <div class="mb-3">
                                    <label for="tipoUsuario" class="form-label">Tipo de Usuario</label>
                                    <select class="form-select" id="tipoUsuario">
                                        <option value="">Seleccione un tipo de usuario</option>
                                        <option value="empleador">Empleador</option>
                                        <option value="administrador">Administrador</option>
                                        <option value="empleado">Empleado</option>
                                    </select>

                                </div>



                                <form id="loginForm" action="{{ route('login') }}" method="POST"
                                    enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="correoElectronico" class="form-label">Correo Electrónico</label>
                                        <input type="email" class="form-control" id="correoElectronico" required
                                            placeholder="ejemplo@dominio.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="contrasena" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" id="contrasena" required
                                            placeholder="Ingrese su contraseña">
                                    </div>
                                     <div class="mb-3 form-check">
                                        <input type="checkbox" class="form-check-input" id="recordarme">
                                        <label class="form-check-label" for="recordarme">Recordarme</label>
                                    </div> 
                                    <div class="d-grid">
                                        <button type="submit" class="boton_publicacion">Iniciar Sesión</button>
                                    </div>
                                </form>



                                <div class="text-center mt-3">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#registroModal"
                                        class="text-primary">
                                        Registrarse
                                    </a>
                                    <span class="mx-2">|</span>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#recuperarContrasenaModal"
                                        class="text-primary">
                                        ¿Olvidaste tu contraseña?
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="registroModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Registro de Usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">


                            <div class="mb-3">
                                <label class="form-label">Tipo de Usuario</label>
                                <select class="form-select">
                                    <option value="empleador">Empleador</option>
                                    <option value="administrador">Administrador</option>
                                    <option value="empleado">Empleado</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nombre Completo</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Correo Electrónico</label>
                                <input type="email" class="form-control" required>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Contraseña</label>
                                <input type="password" class="form-control" required>
                            </div>
                            <!-- <div class="mb-3">
                                                    <label class="form-label">Confirmar Contraseña</label>
                                                    <input type="password" class="form-control" required>
                                                </div>-->
                            <button type="submit" class="btn btn-primary w-100">Registrarse</button>

                        </div>
                    </div>
                </div>
            </div>


            <div class="modal fade" id="recuperarContrasenaModal" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Recuperar Contraseña</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label class="form-label">Correo Electrónico</label>
                                    <input type="email" class="form-control" required
                                        placeholder="Ingrese su correo electrónico">
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Recuperar Contraseña</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
 --}}






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
                                    <form>
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3 icono-login"></i>
                                            <span class="h1 fw-bold mb-0">JOBS & JOBS</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3 login-subtitle">inicio de sesión</h5>
                                        <hr>

                                        <div class="mb-3">
                                            <label for="tipoUsuario" class="form-label">Tipo de Usuario</label>
                                            <select class="form-select" id="tipoUsuario">
                                                <option value="">Seleccione un tipo de usuario</option>
                                                <option value="empleador">Empleador</option>
                                                <option value="administrador">Administrador</option>
                                                <option value="empleado">Empleado</option>
                                            </select>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label for="correoElectronico" class="form-label">Correo Electrónico</label>
                                            <input type="email" class="form-control" id="correoElectronico" required
                                                placeholder="ejemplo@dominio.com">
                                        </div>

                                        <div class="mb-3">
                                            <label for="contrasena" class="form-label">Contraseña</label>
                                            <input type="password" class="form-control" id="contrasena" required
                                                placeholder="Ingrese su contraseña">
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button class="btn btn-dark btn-lg btn-block" type="button">Ingresar</button>
                                        </div>
                                    </form>

                                    <a class="small text-muted" href="#" data-bs-toggle="modal"
                                        data-bs-target="#recuperarModal">¿Olvidaste tu contraseña?</a>

                                    <p class="mb-5 pb-lg-2">¿No tienes una cuenta?
                                        <a href="/resources/views/registrousuario.balde.php" data-bs-toggle="modal" data-bs-target="#registroModal">¡Regístrate
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
                                                    <form id="formRegistro" action="{{ route('registrousuario') }}" method="POST">
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
                                                            </select>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="registroNombre" class="form-label">Nombre
                                                                completo</label>
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
                                                        {{-- <div class="mb-3">
                                                            <label for="registroConfirmPassword"
                                                                class="form-label">Confirmar Contraseña</label>
                                                            <input type="password" class="form-control"
                                                                id="registroConfirmPassword" name="password_confirmation"
                                                                required>
                                                        </div> --}}
                                                         <div class="form-check mb-3">
                                                            <input class="form-check-input" type="checkbox"
                                                                id="terminos" required>
                                                            <label class="form-check-label" for="terminos">
                                                                Acepto los <a href="#" class="text-primary">términos
                                                                    y condiciones</a>
                                                            </label>
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
