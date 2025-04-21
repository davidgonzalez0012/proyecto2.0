
@extends('layout.app')

@section('content')


    <div class="tab-content">
        <div class="tab-pane active " id="s1">
            <br>

            <h1>BIENVENIDO</h1>
            <div class="logo-container">
                <img class="imagen03" src="{{ asset('imagenes/Captura de pantalla 2025-04-07 193104.png') }}"
                    alt="logo jobs">
            </div>
            <p style="text-align: center">
                <br>
                <br>

                Encuentra rápidamente oportunidades laborales temporales que se adapten a tus necesidades.
                <br> Conéctate con
                empleadores y comienza tu búsqueda de empleo hoy mismo.
            </p>
            <pre>

            </pre>

            <hr>

            <div id="contenedor">
                <h3 id="sub">Tu mejor Solución</h3>
                <br>
                <div class="fila hidden">


                    <img id="imagen1" src="{{ asset('imagenes/descarga.jpg') }}" alt="Imagen 1">
                    <p id="texto">
                        En un mundo laboral en constante cambio, la flexibilidad es clave. Nuestra plataforma de empleos
                        temporales está diseñada para conectar a empresas con profesionales capacitados en busca de
                        oportunidades
                        de trabajo de corta duración. Ya sea que necesites cubrir un puesto por días, semanas o meses,
                        aquí encontrarás el talento adecuado para cada necesidad.
                    </p>
                </div>
                <pre>

                   

                </pre>
                <div class="fila hidden">

                    <img id="imagen2" src="{{ asset('imagenes/istockphoto-117145047-612x612.jpg') }}"
                        alt="Imagen 2">
                    <p id="texto2">
                        Con un proceso ágil y eficiente, facilitamos la contratación de trabajadores calificados en
                        diversas industrias, permitiendo a las empresas adaptarse rápidamente a sus demandas operativas.
                        Además, brindamos a los profesionales la posibilidad de acceder a múltiples oportunidades
                        laborales, ampliar su experiencia y fortalecer su red de contactos.
                        <br>
                        Únete a nuestra comunidad y descubre una nueva forma de trabajar, donde la flexibilidad y la
                        eficiencia van de la mano para impulsar tu crecimiento y el de tu empresa.
                    </p>
                </div>
            </div>

            <hr>
            <pre>


            </pre>
            <h3 style="text-align: center;" class="hidden">¿Que ofrecemos</h3>
            <br>
            <br>
            <h4 class="hidden">Para los trabajadores:</h4>
            <ul id="lista_trabajadores" class="hidden">
                <li> Acceso a cientos de ofertas de empleo temporal: Filtra por ubicación, sector, salario y duración
                    del contrato.</li>
                <li>Registro rápido y sencillo: Crea tu perfil en minutos y empieza a postularte.</li>
                <li> Notificaciones en tiempo real: Recibe alertas sobre nuevas oportunidades que coincidan con tu
                    perfil.</li>
                <li>Sistema de calificación: Gana reputación con cada trabajo completado y accede a mejores
                    oportunidades.</li>
                <li>Soporte y asesoramiento: Nuestro equipo está aquí para ayudarte a mejorar tu perfil y encontrar la
                    mejor oferta.</li>
            </ul>
            <br>


            <h4 class="hidden">Para los empleadores:</h4>
            <ul id="lista_empleadores" class="hidden">
                <li>Publicación de ofertas en minutos: Describe el puesto, el pago y la duración, y encuentra candidatos
                    al instante. </li>
                <li> Evaluaciones y referencias: Consulta calificaciones y opiniones de trabajadores anteriores antes de
                    contratarlos.</li>
                <li>Búsqueda de talento optimizada: Filtra por habilidades, experiencia y disponibilidad. </li>
                <li>Gestión de postulaciones: Revisa, selecciona y contacta a candidatos fácilmente desde tu panel de
                    control.</li>

            </ul>


            <pre>




            </pre>
            <h2 class="hidden"><b>Empleos mas solicitados</b></h2>
            <br>
            <p class="hidden">
                Dentro de este apartado vas a encontrar los mas recientes empleos publicados:
            </p>

            <div class="container">
                <section class="destacados">
                    <div class="trabajo-destacado hidden">
                        <h3>Desarrollador Web</h3>
                        <p><strong>Empresa:</strong> Tech Innovations</p>
                        <p><strong>Salario:</strong> $25,000 - $35,000</p>
                        <button class="btn">Aplicar Ahora</button>
                    </div>
                    <div class="trabajo-destacado hidden">
                        <h3>Diseñador UX/UI</h3>
                        <p><strong>Empresa:</strong> Creative Solutions</p>
                        <p><strong>Salario:</strong> $20,000 - $30,000</p>
                        <button class="btn">Aplicar Ahora</button>
                    </div>
                    <div class="trabajo-destacado hidden">
                        <h3>Analista de Datos</h3>
                        <p><strong>Empresa:</strong> Data Insights</p>
                        <p><strong>Salario:</strong> $28,000 - $40,000</p>
                        <button class="btn">Aplicar Ahora</button>
                    </div>
                </section>



                <div class="lista-empleos ">

                    <div class="empleo">
                        <h4>Ayudante de Carga</h4>
                        <p><strong>Empresa:</strong> Logística Express</p>
                        <p><strong>Ubicación:</strong> Ciudad de México</p>
                        <p><strong>Duración:</strong> 1 semana</p>
                        <button class="btn">Ver más</button>
                    </div>
                    <div class="empleo ">
                        <h4>Mesero para Evento</h4>
                        <p><strong>Empresa:</strong> Eventos VIP</p>
                        <p><strong>Ubicación:</strong> Guadalajara</p>
                        <p><strong>Duración:</strong> 2 días</p>
                        <button class="btn">Ver más</button>
                    </div>
                    <div class="empleo ">
                        <h4>Community Manager</h4>
                        <p><strong>Empresa:</strong> Social Media Pro</p>
                        <p><strong>Ubicación:</strong> Monterrey</p>
                        <p><strong>Tipo:</strong> Tiempo completo</p>
                        <button class="btn">Ver más</button>
                    </div>
                    <div class="empleo ">
                        <h4>Repartidor</h4>
                        <p><strong>Empresa:</strong> Delivery Fast</p>
                        <p><strong>Ubicación:</strong> Ciudad de México</p>
                        <p><strong>Tipo:</strong> Medio tiempo</p>
                        <button class="btn">Ver más</button>
                    </div>
                </div>
                </section>
            </div>

            

@endsection










