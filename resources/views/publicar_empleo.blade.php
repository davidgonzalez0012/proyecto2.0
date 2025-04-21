@extends('layout.app')


@section('content')
    {{-- <div class="tab-pane active " id="s4">
        <div class="container mt-5">
            <div class="card">
                <div class="  text-white">
                    <h3 class="text-center">Publicar Nueva Oferta de Empleo</h3>
                </div>
                <div class="card-body">
                    <form id="jobPostingForm">

                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Título del Puesto</label>
                                <input type="text" class="form-control" required
                                    placeholder="Ej. Asistente Administrativo">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Categoría de Empleo</label>
                                <select class="form-select" required>
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


                        <div class="row mb-3">
                            <div class="col-md-4">
                                <label class="form-label">Tipo de Contrato</label>
                                <select class="form-select" required>
                                    <option value="">Seleccionar Tipo</option>
                                    <option value="temporal">Temporal</option>
                                    <option value="medio-tiempo">Medio Tiempo</option>
                                    <option value="proyecto">Por Proyecto</option>
                                    <option value="practicas">Prácticas</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Duración del Contrato</label>
                                <input type="text" class="form-control" placeholder="Ej. 3 meses">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Salario</label>
                                <div class="input-group">
                                    <span class="input-group-text">$</span>
                                    <input type="number" class="form-control" placeholder="Monto mensual">
                                </div>
                            </div>
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Descripción del Puesto</label>
                            <textarea class="form-control" rows="5" required
                                placeholder="Describe las responsabilidades, requisitos y funciones del puesto"></textarea>
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Requisitos Mínimos</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <label class="form-label">Educación</label>
                                    <select class="form-select">
                                        <option value="">Seleccionar Nivel</option>
                                        <option value="secundaria">Secundaria</option>
                                        <option value="tecnico">Técnico</option>
                                        <option value="universitario">Universitario</option>
                                        <option value="postgrado">Postgrado</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Experiencia</label>
                                    <select class="form-select">
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


                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Persona de Contacto</label>
                                <input type="text" class="form-control" placeholder="Nombre completo">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Correo de Contacto</label>
                                <input type="email" class="form-control" placeholder="correo@empresa.com">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <div class="col-md-6">
                                <label class="form-label">Ciudad</label>
                                <input type="text" class="form-control" placeholder="Ciudad de trabajo">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Modalidad</label>
                                <select class="form-select">
                                    <option value="">Seleccionar Modalidad</option>
                                    <option value="presencial">Presencial</option>
                                    <option value="remoto">Remoto</option>
                                    <option value="hibrido">Híbrido</option>
                                </select>
                            </div>
                        </div>


                        {{-- <div class="mb-3">
                            <label class="form-label">Habilidades Requeridas</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="habilidad1">
                                <label class="form-check-label" for="habilidad1">
                                    Manejo de Office
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="habilidad2">
                                <label class="form-check-label" for="habilidad2">
                                    Atención al Cliente
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="habilidad3">
                                <label class="form-check-label" for="habilidad3">
                                    Trabajo en Equipo
                                </label>
                            </div>
                        </div> 

                        <div class="mb-3">
                            <label class="form-label">Habilidades Requeridas</label>

                            {{-- Habilidades predefinidas
                            <div class="form-check">
                                <input class="form-check-input habilidad-check" type="checkbox" value="Manejo de Office" id="habilidad1">
                                <label class="form-check-label" for="habilidad1">Manejo de Office</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input habilidad-check" type="checkbox" value="Atención al Cliente" id="habilidad2">
                                <label class="form-check-label" for="habilidad2">Atención al Cliente</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input habilidad-check" type="checkbox" value="Trabajo en Equipo" id="habilidad3">
                                <label class="form-check-label" for="habilidad3">Trabajo en Equipo</label>
                            </div>
                         
                            Campo adicional para habilidades personalizadas 
                            <div class="mt-3">
                                {{-- <label for="otrasHabilidades" class="form-label">Otras habilidades (separadas por comas):</label> 
                                <input type="text" class="form-control" id="otrasHabilidades" placeholder="Ej: Proactividad, JavaScript">
                            </div>

                             Campo oculto que se enviará al backend 
                            <input type="hidden" name="habilidades" id="habilidadesFinal">
                        </div>


                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="boton_publicacion">Guardar Borrador</button>
                            <button type="submit" class="boton_publicacion2">Publicar Oferta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        


    </div> --}}
 
        <div class="jp-container">
            <div class="jp-card">
                <div class="jp-card-header">
                    <h3>Publicar Nueva Oferta de Empleo</h3>
                </div>
                <div class="jp-card-body">
                    <form id="jp-jobPostingForm">
                        <!-- Información básica del puesto -->
                        <div class="jp-row">
                            <div class="jp-col-half">
                                <div class="jp-form-group">
                                    <label class="jp-form-label">Título del Puesto</label>
                                    <input type="text" class="jp-form-control" required
                                        placeholder="Ej. Asistente Administrativo">
                                </div>
                            </div>
                            <div class="jp-col-half">
                                <div class="jp-form-group">
                                    <label class="jp-form-label">Categoría de Empleo</label>
                                    <select class="jp-form-select" required>
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
                                    <select class="jp-form-select" required>
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
                                    <input type="text" class="jp-form-control" placeholder="Ej. 3 meses">
                                </div>
                            </div>
                            <div class="jp-col-third">
                                <div class="jp-form-group">
                                    <label class="jp-form-label">Salario</label>
                                    <div class="jp-input-group">
                                        <span class="jp-input-group-text">$</span>
                                        <input type="number" class="jp-form-control" placeholder="Monto mensual">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Descripción del puesto -->
                        <div class="jp-row">
                            <div class="jp-col-full">
                                <div class="jp-form-group">
                                    <label class="jp-form-label">Descripción del Puesto</label>
                                    <textarea class="jp-form-control jp-textarea" rows="5" required
                                        placeholder="Describe las responsabilidades, requisitos y funciones del puesto"></textarea>
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
                                                <select class="jp-form-select">
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
                                                <select class="jp-form-select">
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
                                    <input type="text" class="jp-form-control" placeholder="Nombre completo">
                                </div>
                            </div>
                            <div class="jp-col-half">
                                <div class="jp-form-group">
                                    <label class="jp-form-label">Correo de Contacto</label>
                                    <input type="email" class="jp-form-control" placeholder="correo@empresa.com">
                                </div>
                            </div>
                        </div>

                        <!-- Ubicación y modalidad -->
                        <div class="jp-row">
                            <div class="jp-col-half">
                                <div class="jp-form-group">
                                    <label class="jp-form-label">Ciudad</label>
                                    <input type="text" class="jp-form-control" placeholder="Ciudad de trabajo">
                                </div>
                            </div>
                            <div class="jp-col-half">
                                <div class="jp-form-group">
                                    <label class="jp-form-label">Modalidad</label>
                                    <select class="jp-form-select">
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
                                    <input type="text" class="jp-form-control" id="jp-otrasHabilidades"
                                        placeholder="Ej: Proactividad, JavaScript">
                                    <div class="jp-badge-container" id="jp-habilidadesSeleccionadas">
                                        <!-- Las habilidades se agregarán aquí dinámicamente -->
                                    </div>
                                    <input type="hidden" name="habilidades" id="jp-habilidadesFinal">
                                </div>
                            </div>
                        </div>

                        <!-- Botones de acción -->
                        <div class="jp-btn-group">
                            <button type="button" class="jp-btn jp-btn-secondary">Guardar Borrador</button>
                            <button type="submit" class="jp-btn jp-btn-primary">Publicar Oferta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    
@endsection
