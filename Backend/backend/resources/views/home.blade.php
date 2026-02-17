@extends('layouts.app')

@section('title', 'Sampa Aberturas - Inicio')

@section('content')
<main class="content mt-5">
    <section id="presenta" class="presenta">
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <!-- Indicadores -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container_presenta">
                        <div class="presenta_info">
                            <div class="presenta_text">
                                <h1>Fabricación profesional <br> de aberturas de aluminio</h1>
                                <p>Más de 15 años de experiencia en soluciones a medida</p>
                                <a href="{{ url('/contacto') }}" class="btn btn-custom-green">Solicitar presupuesto</a>
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
                                <a href="{{ url('/obras') }}" class="btn btn-custom-green">Ver nuestros proyectos</a>
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
                                <a href="{{ url('/tienda') }}" class="btn btn-custom-green">Ver productos disponibles</a>
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
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </section>

    <section id="sobre-nosotros" class="seccion animate-on-scroll">
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

    <section id="servicios" class="servicios animate-on-scroll">
        <div class="container">
            <h2>NUESTROS SERVICIOS DIFERENCIALES</h2>
            <div class="row">
                <div class="col-md-4 servicio">
                    <div class="servicio-icon-container">
                        <i class="bi bi-rulers"></i>
                    </div>
                    <div class="servicio-content">
                        <h3>Medición Profesional</h3>
                        <p>Servicio de medición técnico sin cargo para garantizar precisión milimétrica en cada proyecto.</p>
                    </div>
                </div>
                <div class="col-md-4 servicio">
                    <div class="servicio-icon-container">
                        <i class="bi bi-shield-check"></i>
                    </div>
                    <div class="servicio-content">
                        <h3>Garantía Extendida</h3>
                        <p>5 años de garantía en materiales y 2 años en mano de obra para tu total tranquilidad.</p>
                    </div>
                </div>
                <div class="col-md-4 servicio">
                    <div class="servicio-icon-container">
                        <i class="bi bi-calendar-check"></i>
                    </div>
                    <div class="servicio-content">
                        <h3>Entrega en Tiempo</h3>
                        <p>Plazos de fabricación claros y cumplimiento garantizado según lo acordado.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="proyectos-destacados" class="seccion animate-on-scroll">
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

    <section id="tienda-destacada" class="seccion animate-on-scroll">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Productos Destacados</h2>
                <p class="lead">Selección especial con entrega inmediata</p>
            </div>

            <div class="row g-4">
                <!-- Producto 1 - Puerta Placa -->
                <div class="col-md-4">
                    <div class="producto-destacado-card">
                        <div class="producto-destacado-badge">¡EN STOCK!</div>
                        <div class="producto-destacado-imagen">
                            <img src="{{ asset('Images/sampa_placa.jpg') }}" alt="Puerta Placa Premium" class="img-fluid">
                        </div>
                        <div class="producto-destacado-info">
                            <h3>Puerta Placa Premium</h3>
                            <p class="producto-destacado-precio">$125.000</p>
                            <p class="producto-destacado-desc">Puerta placa de 80cm x 210cm con aislamiento térmico y acústico. Incluye herrajes y instalación.</p>
                            <div class="producto-destacado-acciones">
                                <a href="{{ url('/tienda') }}" class="btn btn-primary">Ver en Tienda</a>
                                <a href="{{ url('/contacto') }}" class="btn btn-outline-primary">Consultar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Producto 2 - Mosquitero -->
                <div class="col-md-4">
                    <div class="producto-destacado-card">
                        <div class="producto-destacado-badge">¡EN STOCK!</div>
                        <div class="producto-destacado-imagen">
                            <img src="{{ asset('Images/sampa_mosquitero.jpeg') }}" alt="Mosquitero Corredizo" class="img-fluid">
                        </div>
                        <div class="producto-destacado-info">
                            <h3>Mosquitero Corredizo</h3>
                            <p class="producto-destacado-precio">$45.000</p>
                            <p class="producto-destacado-desc">Mosquitero de aluminio corredizo para ventana estándar. Incluye malla anti-insectos de alta durabilidad.</p>
                            <div class="producto-destacado-acciones">
                                <a href="{{ url('/tienda') }}" class="btn btn-primary">Ver en Tienda</a>
                                <a href="{{ url('/contacto') }}" class="btn btn-outline-primary">Consultar</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Producto 3 - Herrajes -->
                <div class="col-md-4">
                    <div class="producto-destacado-card">
                        <div class="producto-destacado-badge">¡EN STOCK!</div>
                        <div class="producto-destacado-imagen">
                            <img src="{{ asset('Images/sampa_herrajes.jpeg') }}" alt="Kit de Herrajes" class="img-fluid">
                        </div>
                        <div class="producto-destacado-info">
                            <h3>Kit de Herrajes Premium</h3>
                            <p class="producto-destacado-precio">$28.500</p>
                            <p class="producto-destacado-desc">Kit completo de herrajes para puerta de aluminio. Incluye manija, cerradura y bisagras de alta resistencia.</p>
                            <div class="producto-destacado-acciones">
                                <a href="{{ url('/tienda') }}" class="btn btn-primary">Ver en Tienda</a>
                                <a href="{{ url('/contacto') }}" class="btn btn-outline-primary">Consultar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <a href="{{ url('/tienda') }}" class="btn btn-primary btn-lg">Ver Todos los Productos</a>
                <p class="mt-2">Envíos a todo el país | Stock limitado</p>
            </div>
        </div>
    </section>

    <section id="productos" class="productos animate-on-scroll">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Nuestros Productos</h2>
                <p class="lead">Soluciones completas para tu hogar u oficina</p>
            </div>

            <div class="row g-4">
                <!-- Aberturas de Aluminio -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="producto-item" onclick="window.location='{{ url('/aberturas-aluminio') }}';">
                        <div class="producto-badge">Línea Premium</div>
                        <img src="{{ asset('Images/sampa_aluminio.jpeg') }}" alt="Aberturas de Aluminio" class="img-fluid rounded">
                        <div class="overlay">
                            <p>ABERTURAS<br>DE ALUMINIO</p>
                        </div>
                        <div class="producto-desc">
                            <p>Perfiles de alta resistencia con aislamiento térmico y acústico</p>
                        </div>
                    </div>
                </div>

                <!-- Puertas Placas -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="producto-item" onclick="window.location='{{ url('/puertas-placa') }}';">
                        <div class="producto-badge">Novedad</div>
                        <img src="{{ asset('Images/sampa_placa.jpg') }}" alt="Puertas Placas" class="img-fluid rounded">
                        <div class="overlay">
                            <p>PUERTAS<br>PLACAS</p>
                        </div>
                        <div class="producto-desc">
                            <p>Diseño moderno con máxima seguridad y aislamiento</p>
                        </div>
                    </div>
                </div>

                <!-- Mamparas -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="producto-item" onclick="window.location='{{ url('/mamparas') }}';">
                        <div class="producto-badge">Oferta</div>
                        <img src="{{ asset('Images/sampa_mampara.jpg') }}" alt="Mamparas" class="img-fluid rounded">
                        <div class="overlay">
                            <p>MAMPARAS<br>PARA BAÑO</p>
                        </div>
                        <div class="producto-desc">
                            <p>Mamparas de vidrio templado con perfiles de aluminio</p>
                        </div>
                    </div>
                </div>

                <!-- Mosquiteros -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="producto-item" onclick="window.location='{{ url('/mosquiteros') }}';">
                        <div class="producto-badge">Más Vendido</div>
                        <img src="{{ asset('Images/sampa_mosquitero.jpeg') }}" alt="Mosquiteros" class="img-fluid rounded">
                        <div class="overlay">
                            <p>MOSQUITEROS</p>
                        </div>
                        <div class="producto-desc">
                            <p>Protección contra insectos con mallas de alta durabilidad</p>
                        </div>
                    </div>
                </div>

                <!-- Herrajes -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="producto-item" onclick="window.location='{{ url('/herrajes') }}';">
                        <div class="producto-badge">Accesorios</div>
                        <img src="{{ asset('Images/sampa_herrajes.jpeg') }}" alt="Herrajes" class="img-fluid rounded">
                        <div class="overlay">
                            <p>HERRAJES</p>
                        </div>
                        <div class="producto-desc">
                            <p>Herrajes de alta resistencia para mayor durabilidad</p>
                        </div>
                    </div>
                </div>

                <!-- Perfilería -->
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="producto-item" onclick="window.location='{{ url('/perfileria') }}';">
                        <div class="producto-badge">Profesional</div>
                        <img src="{{ asset('Images/sampa_perfileria.jpg') }}" alt="Perfilería" class="img-fluid rounded">
                        <div class="overlay">
                            <p>PERFILERÍA</p>
                        </div>
                        <div class="producto-desc">
                            <p>Perfiles de aluminio para estructuras personalizadas</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="proceso-trabajo" class="seccion animate-on-scroll">
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

    <section id="marcas-certificaciones" class="seccion">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Marcas y Certificaciones</h2>
                <p class="lead">Trabajamos con los mejores proveedores y contamos con certificaciones de calidad</p>
            </div>

            <div class="row g-4">
                <!-- Marcas -->
                <div class="col-md-6">
                    <div class="marcas-card">
                        <h3>Nuestros Proveedores</h3>
                        <p>Trabajamos con las marcas líderes en la industria para garantizar la mejor calidad:</p>

                        <div class="marcas-logos">
                            <div class="marca-logo">
                                <img src="{{ asset('Images/aluar-system-01.svg') }}" alt="Aluar System" class="img-fluid">
                                <p>Perfiles de aluminio premium</p>
                            </div>
                            <div class="marca-logo">
                                <img src="{{ asset('Images/aluar-system-02.svg') }}" alt="Aluar System" class="img-fluid">
                                <p>Sistemas de apertura avanzados</p>
                            </div>
                            <div class="marca-logo">
                                <img src="{{ asset('Images/aluar-system-06.svg') }}" alt="Aluar System" class="img-fluid">
                                <p>Tecnología de vanguardia</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Certificaciones -->
                <div class="col-md-6">
                    <div class="certificaciones-card">
                        <h3>Certificaciones de Calidad</h3>
                        <p>Contamos con certificaciones que avalan nuestra calidad y profesionalismo:</p>

                        <div class="certificaciones-list">
                            <div class="certificacion-item">
                                <i class="bi bi-patch-check-fill"></i>
                                <div>
                                    <h4>Certificación IRAM</h4>
                                    <p>Normas argentinas para calidad en aberturas</p>
                                </div>
                            </div>

                            <div class="certificacion-item">
                                <i class="bi bi-patch-check-fill"></i>
                                <div>
                                    <h4>ISO 9001:2015</h4>
                                    <p>Sistema de gestión de calidad internacional</p>
                                </div>
                            </div>

                            <div class="certificacion-item">
                                <i class="bi bi-patch-check-fill"></i>
                                <div>
                                    <h4>Garantía Extendida</h4>
                                    <p>5 años en materiales y 2 años en mano de obra</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <p>Trabajamos con materiales certificados y procesos de fabricación controlados para garantizar tu satisfacción.</p>
            </div>
        </div>
    </section>

    <section id="preguntas-frecuentes" class="seccion">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2>Preguntas Frecuentes</h2>
                <p class="lead">Respuestas a las consultas más comunes sobre nuestros productos y servicios</p>
            </div>

            <div class="accordion" id="faqAccordion">
                <!-- Pregunta 1 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            ¿Qué materiales utilizan en sus aberturas?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>Utilizamos aluminio de primera calidad con perfiles de la línea Aluar System, que ofrecen excelente resistencia, durabilidad y aislamiento térmico/acústico. Todos nuestros materiales cumplen con las normas IRAM y cuentan con certificaciones de calidad.</p>
                        </div>
                    </div>
                </div>

                <!-- Pregunta 2 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            ¿Cuánto tiempo demora la fabricación e instalación?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>Los plazos varían según la complejidad del proyecto:</p>
                            <ul>
                                <li>Productos estándar: 7-10 días hábiles</li>
                                <li>Proyectos personalizados: 15-20 días hábiles</li>
                                <li>Instalación: 1-2 días una vez fabricados los productos</li>
                            </ul>
                            <p>Todos los plazos son coordinados y confirmados antes de iniciar la fabricación.</p>
                        </div>
                    </div>
                </div>

                <!-- Pregunta 3 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            ¿Ofrecen garantía en sus productos?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>Sí, ofrecemos garantía extendida:</p>
                            <ul>
                                <li>5 años en materiales contra defectos de fabricación</li>
                                <li>2 años en mano de obra e instalación</li>
                                <li>1 año en herrajes y accesorios</li>
                            </ul>
                            <p>La garantía cubre cualquier defecto en materiales o instalación bajo uso normal.</p>
                        </div>
                    </div>
                </div>

                <!-- Pregunta 4 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            ¿Realizan envíos a todo el país?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>Sí, realizamos envíos a todo el territorio argentino. Los costos de envío varían según la ubicación y el volumen del pedido. Para proyectos grandes, ofrecemos descuentos especiales en logística.</p>
                        </div>
                    </div>
                </div>

                <!-- Pregunta 5 -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            ¿Cómo puedo solicitar un presupuesto?
                        </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>Puedes solicitar un presupuesto de varias formas:</p>
                            <ul>
                                <li>Completando el formulario en nuestra sección de contacto</li>
                                <li>Llamando a nuestro número de teléfono</li>
                                <li>Visitando nuestro showroom para una asesoría personalizada</li>
                                <li>Enviando un mensaje por WhatsApp con las medidas y requisitos</li>
                            </ul>
                            <p>Nuestro servicio de medición técnico es sin cargo y sin compromiso.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-4">
                <p>¿No encontraste la respuesta que buscabas? <a href="{{ url('/contacto') }}" class="btn btn-outline-primary">Contáctanos</a></p>
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