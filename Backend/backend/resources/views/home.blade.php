
@extends('layouts.app')

@section('title', 'Sampa Aberturas - Inicio')

@section('content')
<main class="content mt-5">
    <section id="presenta" class="presenta">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container_presenta">
                        <div class="presenta_info">
                            <div class="presenta_text">
                                <h1>Fabricación profesional <br> de aberturas de aluminio</h1>
                                <p>Más de 15 años de experiencia en soluciones a medida</p>
                                <a href="{{ url('/contacto') }}" class="btn btn-primary">Solicitar presupuesto</a>
                            </div>
                        </div>
                        <div class="presenta_img">
                            <img src="{{ asset('Images/sampa_casa1.jpg') }}" alt="Imagen 1">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container_presenta">
                        <div class="presenta_img">
                            <img src="{{ asset('Images/sampa_casa_2.jpg') }}" alt="Imagen 2">
                        </div>
                        <div class="presenta_info">
                            <div class="presenta_text">
                                <h1>Proyectos realizados <br> con garantía de calidad</h1>
                                <p>Más de 500 obras entregadas a clientes satisfechos</p>
                                <a href="{{ url('/obras') }}" class="btn btn-primary">Ver nuestros proyectos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container_presenta">
                        <div class="presenta_info">
                            <div class="presenta_text">
                                <h1>Tecnología y diseño <br> para tu hogar u oficina</h1>
                                <p>Materiales de primera calidad con instalación profesional</p>
                                <a href="{{ url('/tienda') }}" class="btn btn-primary">Ver productos disponibles</a>
                            </div>
                        </div>
                        <div class="presenta_img">
                            <img src="{{ asset('Images/sampa_casa_3.jpg') }}" alt="Imagen 3">
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>

    <section id="sobre-nosotros" class="seccion">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="nosotros-imagen">
                        <img src="{{ asset('Images/sampa_nosotros_1.jpg') }}" alt="Nuestro taller" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="nosotros-contenido">
                        <h2>Sobre Sampa Aberturas</h2>
                        <p>Con más de 15 años de experiencia en el mercado, <strong>Sampa Aberturas</strong> se ha consolidado como líder en la fabricación e instalación de aberturas de aluminio de alta calidad en la región.</p>

                        <div class="nosotros-destacados">
                            <div class="destacado-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Más de 500 proyectos realizados</span>
                            </div>
                            <div class="destacado-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Materiales de primera calidad con garantía</span>
                            </div>
                            <div class="destacado-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Equipo profesional con experiencia certificada</span>
                            </div>
                        </div>

                        <p>Nos especializamos en soluciones a medida para hogares, oficinas y proyectos comerciales, combinando tecnología avanzada con diseño personalizado.</p>

                        <a href="{{ url('/nosotros') }}" class="btn btn-primary">Conocer más sobre nosotros</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </section>

    <section id="servicios" class="servicios">
        <div class="imagen_fondo">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 servicio">
                        <i class="bi bi-rulers"></i> <h3>Medición Profesional</h3>
                        <p>Servicio de medición técnico sin cargo <br>para garantizar precisión milimétrica.</p>
                    </div>
                    <div class="col-md-4 servicio">
                        <i class="bi bi-shield-check"></i> <h3>Garantía Extendida</h3>
                        <p>5 años de garantía en materiales <br>y 2 años en mano de obra.</p>
                    </div>
                    <div class="col-md-4 servicio">
                        <i class="bi bi-calendar-check"></i> <h3>Entrega en Tiempo</h3>
                        <p>Plazos de fabricación claros <br>y cumplimiento garantizado.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="proyectos-destacados" class="seccion">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Nuestros Proyectos Destacados</h2>
                <p class="lead">Más de 500 obras realizadas con los más altos estándares de calidad</p>
            </div>

            <div class="row g-4">
                <!-- Proyecto 1 -->
                <div class="col-md-4">
                    <div class="proyecto-card">
                        <div class="proyecto-imagen">
                            <img src="{{ asset('Images/sampa_obra_1.jpg') }}" alt="Proyecto Residencial Moderno" class="img-fluid">
                        </div>
                        <div class="proyecto-info">
                            <h3>Residencia Moderna</h3>
                            <p class="proyecto-lugar"><i class="bi bi-geo-alt"></i> Buenos Aires, Argentina</p>
                            <p class="proyecto-tipo"><i class="bi bi-house"></i> Residencial</p>
                            <a href="{{ url('/obras') }}" class="btn btn-outline-primary">Ver todos los proyectos</a>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 2 -->
                <div class="col-md-4">
                    <div class="proyecto-card">
                        <div class="proyecto-imagen">
                            <img src="{{ asset('Images/sampa_obra_2.jpg') }}" alt="Proyecto Comercial" class="img-fluid">
                        </div>
                        <div class="proyecto-info">
                            <h3>Edificio Comercial</h3>
                            <p class="proyecto-lugar"><i class="bi bi-geo-alt"></i> Córdoba, Argentina</p>
                            <p class="proyecto-tipo"><i class="bi bi-building"></i> Comercial</p>
                            <a href="{{ url('/obras') }}" class="btn btn-outline-primary">Ver todos los proyectos</a>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 3 -->
                <div class="col-md-4">
                    <div class="proyecto-card">
                        <div class="proyecto-imagen">
                            <img src="{{ asset('Images/sampa_obra_3.jpg') }}" alt="Proyecto de Remodelación" class="img-fluid">
                        </div>
                        <div class="proyecto-info">
                            <h3>Remodelación Integral</h3>
                            <p class="proyecto-lugar"><i class="bi bi-geo-alt"></i> Rosario, Argentina</p>
                            <p class="proyecto-tipo"><i class="bi bi-tools"></i> Remodelación</p>
                            <a href="{{ url('/obras') }}" class="btn btn-outline-primary">Ver todos los proyectos</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="{{ url('/obras') }}" class="btn btn-primary btn-lg">Ver Todos Nuestros Proyectos</a>
            </div>
        </div>
    </section>
    
    <section id="productos" class="productos">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="producto-item" onclick="window.location='{{ url('/aberturas-aluminio') }}';">
                        <img src="{{ asset('Images/sampa_aluminio.jpeg') }}" alt="Aberturas de Aluminio" class="img-fluid rounded">
                        <div class="overlay">
                            <p>ABERTURAS<br>DE ALUMINIO</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">

    <section id="proceso-trabajo" class="seccion">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Nuestro Proceso de Trabajo</h2>
                <p class="lead">De la idea inicial a la instalación final, cada paso con profesionalismo</p>
            </div>

            <div class="proceso-timeline">
                <!-- Paso 1 -->
                <div class="proceso-paso">
                    <div class="proceso-icon">
                        <i class="bi bi-pencil-square"></i>
                        <span class="proceso-numero">1</span>
                    </div>
                    <div class="proceso-contenido">
                        <h3>Consulta y Diseño</h3>
                        <p>Asesoramiento personalizado para entender tus necesidades y crear el diseño perfecto para tu espacio.</p>
                    </div>
                </div>

                <!-- Paso 2 -->
                <div class="proceso-paso">
                    <div class="proceso-icon">
                        <i class="bi bi-rulers"></i>
                        <span class="proceso-numero">2</span>
                    </div>
                    <div class="proceso-contenido">
                        <h3>Medición Profesional</h3>
                        <p>Nuestro equipo técnico realiza mediciones precisas sin cargo para garantizar un ajuste perfecto.</p>
                    </div>
                </div>

                <!-- Paso 3 -->
                <div class="proceso-paso">
                    <div class="proceso-icon">
                        <i class="bi bi-hammer"></i>
                        <span class="proceso-numero">3</span>
                    </div>
                    <div class="proceso-contenido">
                        <h3>Fabricación a Medida</h3>
                        <p>Producción con materiales de primera calidad en nuestro taller equipado con tecnología avanzada.</p>
                    </div>
                </div>

                <!-- Paso 4 -->
                <div class="proceso-paso">
                    <div class="proceso-icon">
                        <i class="bi bi-truck"></i>
                        <span class="proceso-numero">4</span>
                    </div>
                    <div class="proceso-contenido">
                        <h3>Entrega y Logística</h3>
                        <p>Coordinación de entrega en el plazo acordado con protección especial para tus aberturas.</p>
                    </div>
                </div>

                <!-- Paso 5 -->
                <div class="proceso-paso">
                    <div class="proceso-icon">
                        <i class="bi bi-tools"></i>
                        <span class="proceso-numero">5</span>
                    </div>
                    <div class="proceso-contenido">
                        <h3>Instalación Profesional</h3>
                        <p>Instalación realizada por nuestro equipo especializado con limpieza y sin molestias.</p>
                    </div>
                </div>

                <!-- Paso 6 -->
                <div class="proceso-paso">
                    <div class="proceso-icon">
                        <i class="bi bi-shield-check"></i>
                        <span class="proceso-numero">6</span>
                    </div>
                    <div class="proceso-contenido">
                        <h3>Garantía y Soporte</h3>
                        <p>5 años de garantía en materiales y servicio postventa para tu total tranquilidad.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
                    <div class="producto-item" onclick="window.location='{{ url('/puertas-placa') }}';">
                        <img src="{{ asset('Images/sampa_placa.jpg') }}" alt="Puertas Placas" class="img-fluid rounded">

    <section id="testimonios" class="seccion">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Lo que Nuestros Clientes Dicen</h2>
                <p class="lead">Más de 500 clientes satisfechos en toda la región</p>
            </div>

            <div class="row g-4">
                <!-- Testimonio 1 -->
                <div class="col-md-4">
                    <div class="testimonio-card">
                        <div class="testimonio-header">
                            <img src="{{ asset('Images/sampa_nosotros_2.jpg') }}" alt="Cliente 1" class="testimonio-img">
                            <div class="testimonio-info">
                                <h4>Carlos Martínez</h4>
                                <p class="testimonio-proyecto">Residencia en Palermo</p>
                                <div class="testimonio-calificacion">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonio-contenido">
                            <p>"Excelente servicio desde el primer contacto. La calidad de las aberturas superó nuestras expectativas y la instalación fue impecable. Recomiendo Sampa Aberturas sin dudarlo."</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonio 2 -->
                <div class="col-md-4">
                    <div class="testimonio-card">
                        <div class="testimonio-header">
                            <img src="{{ asset('Images/sampa_nosotros_3.jpg') }}" alt="Cliente 2" class="testimonio-img">
                            <div class="testimonio-info">
                                <h4>Laura Gómez</h4>
                                <p class="testimonio-proyecto">Oficina en Microcentro</p>
                                <div class="testimonio-calificacion">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonio-contenido">
                            <p>"Quedamos muy conformes con el trabajo realizado. El equipo fue muy profesional y respetuoso con los plazos. Las aberturas de aluminio le dieron un look moderno a nuestras oficinas."</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonio 3 -->
                <div class="col-md-4">
                    <div class="testimonio-card">
                        <div class="testimonio-header">
                            <img src="{{ asset('Images/sampa_nosotros_4.jpg') }}" alt="Cliente 3" class="testimonio-img">
                            <div class="testimonio-info">
                                <h4>Roberto Sánchez</h4>
                                <p class="testimonio-proyecto">Local Comercial</p>
                                <div class="testimonio-calificacion">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                        <div class="testimonio-contenido">
                            <p>"La atención postventa es excepcional. Tuvimos un pequeño problema con una puerta y lo resolvieron en menos de 24 horas. Eso demuestra su compromiso con el cliente."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
                        <div class="overlay">
                            <p>PUERTAS<br>PLACAS</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="producto-item" onclick="window.location='{{ url('/mamparas') }}';">
                        <img src="{{ asset('Images/sampa_mampara.jpg') }}" alt="Mamparas" class="img-fluid rounded">
                        <div class="overlay">
                            <p>MAMPARAS<br>PARA BAÑO</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="producto-item" onclick="window.location='{{ url('/mosquiteros') }}';">
                        <img src="{{ asset('Images/sampa_mosquitero.jpeg') }}" alt="Mosquiteros" class="img-fluid rounded">
                        <div class="overlay">
                            <p>MOSQUITEROS</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="producto-item" onclick="window.location='{{ url('/herrajes') }}';">
                        <img src="{{ asset('Images/sampa_herrajes.jpeg') }}" alt="Herrajes" class="img-fluid rounded">
                        <div class="overlay">
                            <p>HERRAJES</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-6 col-12">
                    <div class="producto-item" onclick="window.location='{{ url('/perfileria') }}';">
                        <img src="{{ asset('Images/sampa_perfileria.jpg') }}" alt="Perfilería" class="img-fluid rounded">
                        <div class="overlay">
                            <p>PERFILERÍA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
@section ('script')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Configuración del observador
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };
    
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
    
        // Observar todos los productos
        document.querySelectorAll('#productos .producto-item').forEach(item => {
            observer.observe(item);
        });
    
        // Optimización para resize
        let resizeTimer;
        window.addEventListener('resize', () => {
            document.body.classList.add('resize-animation-stopper');
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                document.body.classList.remove('resize-animation-stopper');
            }, 400);
        });
    });
    </script>
@endsection