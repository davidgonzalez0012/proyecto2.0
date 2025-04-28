@extends('layout.app_empleado')


@section('content')



<div class="tab-pane active  " id="s3">

    <div class="container00">
        <div class="job-search-platform">
            <div class="platform-header">
                <h1>Bolsa de Empleos Temporales</h1>
                <p>Encuentra tu próximo trabajo en minutos</p>
            </div>

            <div class="search-section">
                <input type="text" class="search-input" id="searchInput"
                    placeholder="Buscar trabajo por título, palabra clave...">
                <select class="category-select" id="categoryFilter">
                    <option value="">Todas las Categorías</option>
                    <option value="construccion">Construcción</option>
                    <option value="eventos">Eventos</option>
                    <option value="limpieza">Limpieza</option>
                    <option value="reparto">Reparto</option>
                    <option value="cocina">Cocina</option>
                    <option value="oficina">Trabajo de Oficina</option>
                </select>
                <select class="location-select" id="locationFilter">
                    <option value="">Todas las Ubicaciones</option>
                    <option value="cdmx">Ciudad de México</option>
                    <option value="guadalajara">Guadalajara</option>
                    <option value="monterrey">Monterrey</option>
                    <option value="puebla">Puebla</option>
                </select>
                <button class="search-button" id="searchButton">Buscar Empleos</button>
            </div>

            <div id="jobListings" class="job-listings">

            </div>
        </div>
    </div>

@endsection



   

