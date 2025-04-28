<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empleos Temporales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @vite(['resources/css/estilopagina.css'])
    @vite(['resources/css/estiloinicio_sesion.css'])
    @vite(['resources/css/estiloempleos.css'])
    @vite(['resources/css/estilopublicar.css'])
    @vite('resources/js/publicaroferta.js')
    @vite('resources/js/funciones.js')
    @vite('resources/js/fondo3d.js')
    @vite('resources/js/loader.js')
    @vite(['resources/css/diseño_inicio_admin.css'])

</head>

<body>

    <div id="fondo3d"></div>

    <div id="loader-wrapper">
        <div class="loader"></div>
    </div>

    @include('includes.sesion_admin_navbar')

    <div class="container mt-4">

        @yield('content')

    </div>

    @include('includes.footer')





</body>

</html>
