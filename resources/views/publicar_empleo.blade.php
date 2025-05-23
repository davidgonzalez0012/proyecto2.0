@extends('layout.app_empleador')


@section('content')

<form action="{{ route('guardar_empleo') }}" method="POST">
    @csrf
    <div class="jp-container">
        <div class="jp-card">
            <div class="jp-card-header">
                <h3>Publicar Nueva Oferta de Empleo</h3>
            </div>
            <div class="jp-card-body">
                <!-- Información básica del puesto -->
                <div class="jp-row">
                    <div class="jp-col-half">
                        <div class="jp-form-group">
                            <label class="jp-form-label">Título del Puesto</label>
                            <input type="text" name="titulo" class="jp-form-control" required placeholder="Ej. Asistente Administrativo">
                        </div>
                    </div>
                    <div class="jp-col-half">
                        <div class="jp-form-group">
                            <label class="jp-form-label">Categoría de Empleo</label>
                            <select name="categoria" class="jp-form-select" required>
                                <option value="">Seleccionar Categoría</option>
                                <option value="administracion">Administración</option>
                                <option value="ventas">Ventas</option>
                                <option value="logistica">Logística</option>
                                <option value="tecnologia">Tecnología</option>
                                <option value="servicio-cliente">Servicio al Cliente</option>
                                <option value="produccion">Producción</option>
                                <option value="otros">Otros</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Tipo de contrato y salario -->
                <div class="jp-row">
                    <div class="jp-col-third">
                        <div class="jp-form-group">
                            <label class="jp-form-label">Tipo de Contrato</label>
                            <select name="tipo_contrato" class="jp-form-select" required>
                                <option value="">Seleccionar Tipo</option>
                                <option value="temporal">Temporal</option>
                                <option value="medio-tiempo">Medio Tiempo</option>
                                <option value="proyecto">Por Proyecto</option>
                                <option value="practicas">Prácticas</option>
                            </select>
                        </div>
                    </div>
                    <div class="jp-col-third">
                        <div class="jp-form-group">
                            <label class="jp-form-label">Duración del Contrato</label>
                            <input type="text" name="duracion_contrato" class="jp-form-control" placeholder="Ej. 3 meses">
                        </div>
                    </div>
                    <div class="jp-col-third">
                        <div class="jp-form-group">
                            <label class="jp-form-label">Salario</label>
                            <div class="jp-input-group">
                                <span class="jp-input-group-text">$</span>
                                <input type="number" name="salario" class="jp-form-control" placeholder="Monto mensual">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Descripción del puesto -->
                <div class="jp-row">
                    <div class="jp-col-full">
                        <div class="jp-form-group">
                            <label class="jp-form-label">Descripción del Puesto</label>
                            <textarea name="descripcion" class="jp-form-control jp-textarea" rows="5" required placeholder="Describe las responsabilidades, requisitos y funciones del puesto"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Requisitos mínimos -->
                <div class="jp-row">
                    <div class="jp-col-full">
                        <div class="jp-form-group">
                            <label class="jp-form-label">Requisitos Mínimos</label>
                            <div class="jp-row">
                                <div class="jp-col-half">
                                    <div class="jp-form-group">
                                        <label class="jp-form-label">Educación</label>
                                        <select name="educacion" class="jp-form-select">
                                            <option value="">Seleccionar Nivel</option>
                                            <option value="secundaria">Secundaria</option>
                                            <option value="tecnico">Técnico</option>
                                            <option value="universitario">Universitario</option>
                                            <option value="postgrado">Postgrado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="jp-col-half">
                                    <div class="jp-form-group">
                                        <label class="jp-form-label">Experiencia</label>
                                        <select name="experiencia" class="jp-form-select">
                                            <option value="">Seleccionar Experiencia</option>
                                            <option value="sin-experiencia">Sin Experiencia</option>
                                            <option value="0-1-ano">0-1 Año</option>
                                            <option value="1-3-anos">1-3 Años</option>
                                            <option value="3-5-anos">3-5 Años</option>
                                            <option value="mas-5-anos">Más de 5 Años</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contacto -->
                <div class="jp-row">
                    <div class="jp-col-half">
                        <div class="jp-form-group">
                            <label class="jp-form-label">Persona de Contacto</label>
                            <input type="text" name="contacto_nombre" class="jp-form-control" placeholder="Nombre completo">
                        </div>
                    </div>
                    <div class="jp-col-half">
                        <div class="jp-form-group">
                            <label class="jp-form-label">Correo de Contacto</label>
                            <input type="email" name="contacto_correo" class="jp-form-control" placeholder="correo@empresa.com">
                        </div>
                    </div>
                </div>

                <!-- Ubicación y modalidad -->
                <div class="jp-row">
                    <div class="jp-col-half">
                        <div class="jp-form-group">
                            <label class="jp-form-label">Ciudad</label>
                            <input type="text" name="ciudad" class="jp-form-control" placeholder="Ciudad de trabajo">
                        </div>
                    </div>
                    <div class="jp-col-half">
                        <div class="jp-form-group">
                            <label class="jp-form-label">Modalidad</label>
                            <select name="modalidad" class="jp-form-select">
                                <option value="">Seleccionar Modalidad</option>
                                <option value="presencial">Presencial</option>
                                <option value="remoto">Remoto</option>
                                <option value="hibrido">Híbrido</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Habilidades -->
                <div class="jp-row">
                    <div class="jp-col-full">
                        <div class="jp-form-group">
                            <label class="jp-form-label">Habilidades Requeridas</label>
                            <input type="text" name="habilidades" class="jp-form-control" placeholder="Ej: Proactividad, JavaScript">
                        </div>
                    </div>
                </div>

                <!-- Botones de acción -->
                <div class="jp-btn-group">
                    <button type="submit" class="jp-btn jp-btn-primary">Publicar Oferta</button>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
