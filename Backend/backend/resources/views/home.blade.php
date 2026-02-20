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
                    <div class="presenta-bg" style="background-image: url('{{ asset('Images/sampa_casa1.jpg') }}')">
                        <div class="presenta-overlay"></div>
                        <div class="presenta-content">
                            <div class="presenta_text animate__animated animate__fadeInUp">
                                <h1>Fabricación profesional <br>de aberturas de aluminio</h1>
                                <p>Más de 17 años de experiencia en soluciones a medida</p>
                                <a href="{{ url('/contacto') }}" class="btn btn-custom-green">Solicitar presupuesto</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="presenta-bg" style="background-image: url('{{ asset('Images/sampa_casa_2.jpg') }}')">
                        <div class="presenta-overlay"></div>
                        <div class="presenta-content">
                            <div class="presenta_text animate__animated animate__fadeInUp">
                                <h1>Proyectos realizados <br>con garantía de calidad</h1>
                                <p>Más de 500 obras entregadas a clientes satisfechos</p>
                                <a href="{{ url('/obras') }}" class="btn btn-custom-green">Ver nuestros proyectos</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="presenta-bg" style="background-image: url('{{ asset('Images/sampa_casa_3.jpg') }}')">
                        <div class="presenta-overlay"></div>
                        <div class="presenta-content">
                            <div class="presenta_text animate__animated animate__fadeInUp">
                                <h1>Tecnología y diseño <br>para tu hogar u oficina</h1>
                                <p>Materiales de primera calidad con instalación profesional</p>
                                <a href="{{ url('/tienda') }}" class="btn btn-custom-green">Ver productos disponibles</a>
                            </div>
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
            <!-- Scroll indicator -->
            <div class="scroll-indicator">
                <span>Descubre más</span>
                <div class="scroll-arrow">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 5v14M5 12l7 7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section id="sobre-nosotros" class="seccion animate-on-scroll">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="nosotros-imagen">
                        <div class="image-wrapper">
                            <img src="{{ asset('Images/sampa_nosotros_1.jpg') }}" alt="Nuestro taller" class="img-fluid rounded-4">
                            <div class="image-badge">
                                <span class="badge-years">17+</span>
                                <span class="badge-text">Años de experiencia</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="nosotros-contenido">
                        <span class="section-subtitle">Sobre Nosotros</span>
                        <h2>Líderes en aberturas de aluminio de calidad</h2>
                        <p>Con más de 17 años de experiencia en el mercado, <strong>Sampa Aberturas</strong> se ha consolidado como líder en la fabricación e instalación de aberturas de aluminio de alta calidad en la región.</p>

                        <div class="nosotros-destacados">
                            <div class="destacado-item">
                                <div class="icon-box">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                                <div class="destacado-text">
                                    <h4>Más de 500 proyectos realizados</h4>
                                    <p>Clientes satisfechos en toda la región</p>
                                </div>
                            </div>
                            <div class="destacado-item">
                                <div class="icon-box">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                                <div class="destacado-text">
                                    <h4>Materiales de primera calidad</h4>
                                    <p>Con garantía extendida</p>
                                </div>
                            </div>
                            <div class="destacado-item">
                                <div class="icon-box">
                                    <i class="bi bi-check-circle-fill"></i>
                                </div>
                                <div class="destacado-text">
                                    <h4>Equipo profesional certificado</h4>
                                    <p>Experiencia y profesionalismo</p>
                                </div>
                            </div>
                        </div>

                        <p class="mb-4">Nos especializamos en soluciones a medida para hogares, oficinas y proyectos comerciales, combinando tecnología avanzada con diseño personalizado.</p>

                        <div class="d-flex gap-3 flex-wrap">
                            <a href="{{ url('/nosotros') }}" class="btn btn-custom-green">Conocer más</a>
                            <a href="{{ url('/contacto') }}" class="btn btn-outline-dark">Contactarnos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="servicios" class="servicios animate-on-scroll">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Nuestros Servicios</span>
                <h2>¿Por qué elegirnos?</h2>
                <p class="section-desc">Compromiso, calidad y profesionalismo en cada proyecto</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="servicio-card">
                        <div class="servicio-icon-wrapper">
                            <div class="servicio-icon">
                                <i class="bi bi-rulers"></i>
                            </div>
                            <div class="servicio-number">01</div>
                        </div>
                        <div class="servicio-content">
                            <h3>Medición Profesional</h3>
                            <p>Servicio de medición técnico sin cargo para garantizar precisión milimétrica en cada proyecto.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="servicio-card">
                        <div class="servicio-icon-wrapper">
                            <div class="servicio-icon">
                                <i class="bi bi-shield-check"></i>
                            </div>
                            <div class="servicio-number">02</div>
                        </div>
                        <div class="servicio-content">
                            <h3>Equipo Profesional</h3>
                            <p>Contamos con profesionales altamente capacitados para asegurar la excelencia de tu proyecto y brindarte máxima tranquilidad.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="servicio-card">
                        <div class="servicio-icon-wrapper">
                            <div class="servicio-icon">
                                <i class="bi bi-calendar-check"></i>
                            </div>
                            <div class="servicio-number">03</div>
                        </div>
                        <div class="servicio-content">
                            <h3>Entrega en Tiempo</h3>
                            <p>Plazos de fabricación claros y cumplimiento garantizado según lo acordado.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="proyectos-destacados" class="proyectos-seccion animate-on-scroll">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Portafolio</span>
                <h2>Proyectos Destacados</h2>
                <p class="section-desc">Más de 500 obras realizadas con los más altos estándares de calidad</p>
            </div>

            <div class="proyectos-grid">
                <!-- Proyecto 1 -->
                <div class="proyecto-card">
                    <div class="proyecto-imagen">
                        <img src="{{ asset('Images/sampa_obra_1.jpg') }}" alt="Proyecto Residencial Moderno" class="img-fluid">
                        <div class="proyecto-overlay">
                            <div class="proyecto-overlay-content">
                                <span class="proyecto-categoria">Residencial</span>
                                <h3>Residencia Moderna</h3>
                                <p class="proyecto-lugar"><i class="bi bi-geo-alt-fill"></i> Buenos Aires, Argentina</p>
                                <a href="{{ url('/obras') }}" class="btn btn-proyecto">Ver Proyecto</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 2 -->
                <div class="proyecto-card">
                    <div class="proyecto-imagen">
                        <img src="{{ asset('Images/sampa_obra_2.jpg') }}" alt="Proyecto Comercial" class="img-fluid">
                        <div class="proyecto-overlay">
                            <div class="proyecto-overlay-content">
                                <span class="proyecto-categoria">Comercial</span>
                                <h3>Edificio Comercial</h3>
                                <p class="proyecto-lugar"><i class="bi bi-geo-alt-fill"></i> Córdoba, Argentina</p>
                                <a href="{{ url('/obras') }}" class="btn btn-proyecto">Ver Proyecto</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Proyecto 3 -->
                <div class="proyecto-card">
                    <div class="proyecto-imagen">
                        <img src="{{ asset('Images/sampa_obra_3.jpg') }}" alt="Proyecto de Remodelación" class="img-fluid">
                        <div class="proyecto-overlay">
                            <div class="proyecto-overlay-content">
                                <span class="proyecto-categoria">Remodelación</span>
                                <h3>Remodelación Integral</h3>
                                <p class="proyecto-lugar"><i class="bi bi-geo-alt-fill"></i> Rosario, Argentina</p>
                                <a href="{{ url('/obras') }}" class="btn btn-proyecto">Ver Proyecto</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center mt-5">
                <a href="{{ url('/obras') }}" class="btn btn-custom-green btn-lg">Ver Todos Nuestros Proyectos</a>
            </div>
        </div>
    </section>

    <section id="productos" class="productos-seccion animate-on-scroll">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Catálogo</span>
                <h2>Nuestros Productos</h2>
                <p class="section-desc">Soluciones completas para tu hogar u oficina</p>
            </div>

            <div class="productos-grid">
                <!-- 1. Aberturas de Aluminio -->
                <div class="producto-card">
                    <div class="producto-imagen">
                        <img src="{{ asset('Images/sampa_aluminio.jpeg') }}" alt="Aberturas de Aluminio" class="img-fluid">
                        <div class="producto-overlay">
                            <a href="{{ url('/aberturas-aluminio') }}" class="btn btn-producto">Ver Más</a>
                        </div>
                    </div>
                    <div class="producto-info">
                        <h3>Aberturas de Aluminio</h3>
                        <p>Perfiles de alta resistencia con aislamiento térmico y acústico</p>
                    </div>
                </div>

                <!-- 2. Puertas de Interior -->
                <div class="producto-card">
                    <div class="producto-imagen">
                        <img src="{{ asset('Images/sampa_placa.jpg') }}" alt="Puertas de Interior" class="img-fluid">
                        <div class="producto-overlay">
                            <a href="{{ url('/puertas-placa') }}" class="btn btn-producto">Ver Más</a>
                        </div>
                    </div>
                    <div class="producto-info">
                        <h3>Puertas de Interior</h3>
                        <p>Diseño moderno con máxima seguridad y aislamiento</p>
                    </div>
                </div>

                <!-- 3. Vidrios y Mamparas -->
                <div class="producto-card">
                    <div class="producto-imagen">
                        <img src="{{ asset('Images/sampa_mampara.jpg') }}" alt="Vidrios y Mamparas" class="img-fluid">
                        <div class="producto-overlay">
                            <a href="{{ url('/mamparas') }}" class="btn btn-producto">Ver Más</a>
                        </div>
                    </div>
                    <div class="producto-info">
                        <h3>Vidrios y Mamparas</h3>
                        <p>Vidrio templado con perfiles de aluminio de alta calidad</p>
                    </div>
                </div>

                <!-- 4. Cortinas y Mosquiteros -->
                <div class="producto-card">
                    <div class="producto-imagen">
                        <img src="{{ asset('Images/sampa_mosquitero.jpeg') }}" alt="Cortinas y Mosquiteros" class="img-fluid">
                        <div class="producto-overlay">
                            <a href="{{ url('/mosquiteros') }}" class="btn btn-producto">Ver Más</a>
                        </div>
                    </div>
                    <div class="producto-info">
                        <h3>Cortinas y Mosquiteros</h3>
                        <p>Protección contra insectos y control de luz natural</p>
                    </div>
                </div>

                <!-- 5. Portones Automáticos -->
                <div class="producto-card">
                    <div class="producto-imagen">
                        <img src="{{ asset('Images/sampa_casa1.jpg') }}" alt="Portones Automáticos" class="img-fluid">
                        <div class="producto-overlay">
                            <a href="{{ url('/contacto') }}" class="btn btn-producto">Ver Más</a>
                        </div>
                    </div>
                    <div class="producto-info">
                        <h3>Portones Automáticos</h3>
                        <p>Automatización y seguridad para tu hogar</p>
                    </div>
                </div>

                <!-- 6. Herrajes y Accesorios -->
                <div class="producto-card">
                    <div class="producto-imagen">
                        <img src="{{ asset('Images/sampa_herrajes.jpeg') }}" alt="Herrajes y Accesorios" class="img-fluid">
                        <div class="producto-overlay">
                            <a href="{{ url('/herrajes') }}" class="btn btn-producto">Ver Más</a>
                        </div>
                    </div>
                    <div class="producto-info">
                        <h3>Herrajes y Accesorios</h3>
                        <p>Componentes de alta resistencia para mayor durabilidad</p>
                    </div>
                </div>
            </div>

            {{-- <div class="text-center mt-5">
                <a href="{{ url('/tienda') }}" class="btn btn-custom-green btn-lg">Ver Catálogo Completo</a>
            </div> --}}
        </div>
    </section>

    <!-- Eliminado: tienda-destacada (unificado con productos) -->

    <section id="proceso-trabajo" class="proceso-seccion animate-on-scroll">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Proceso</span>
                <h2>Cómo Trabajamos</h2>
                <p class="section-desc">De la idea inicial a la instalación final</p>
            </div>

            <div class="proceso-grid">
                <!-- Paso 1 -->
                <div class="proceso-card">
                    <div class="proceso-numero">01</div>
                    <div class="proceso-icon">
                        <i class="bi bi-pencil-square"></i>
                    </div>
                    <h3>Consulta y Diseño</h3>
                    <p>Asesoramiento personalizado para entender tus necesidades y crear el diseño perfecto.</p>
                </div>

                <!-- Paso 2 -->
                <div class="proceso-card">
                    <div class="proceso-numero">02</div>
                    <div class="proceso-icon">
                        <i class="bi bi-rulers"></i>
                    </div>
                    <h3>Medición Profesional</h3>
                    <p>Mediciones precisas sin cargo para garantizar un ajuste perfecto.</p>
                </div>

                <!-- Paso 3 -->
                <div class="proceso-card">
                    <div class="proceso-numero">03</div>
                    <div class="proceso-icon">
                        <i class="bi bi-hammer"></i>
                    </div>
                    <h3>Fabricación</h3>
                    <p>Producción con materiales de primera calidad y tecnología avanzada.</p>
                </div>

                <!-- Paso 4 -->
                <div class="proceso-card">
                    <div class="proceso-numero">04</div>
                    <div class="proceso-icon">
                        <i class="bi bi-tools"></i>
                    </div>
                    <h3>Instalación</h3>
                    <p>Equipo especializado en el proceso de instalación que garantiza calidad y durabilidad.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="marcas-certificaciones" class="marcas-seccion">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Calidad Garantizada</span>
                <h2>Marcas y Certificaciones</h2>
                <p class="section-desc">Trabajamos con los mejores proveedores y certificaciones</p>
            </div>

            <!-- Marcas -->
            <div class="marcas-grid">
                <div class="marca-card">
                    <img src="{{ asset('Images/aluar-system-01.svg') }}" alt="Aluar System" class="img-fluid">
                    <p>Perfiles de aluminio premium</p>
                </div>
                <div class="marca-card">
                    <img src="{{ asset('Images/aluar-system-02.svg') }}" alt="Aluar System" class="img-fluid">
                    <p>Sistemas de apertura avanzados</p>
                </div>
                <div class="marca-card">
                    <img src="{{ asset('Images/aluar-system-06.svg') }}" alt="Aluar System" class="img-fluid">
                    <p>Tecnología de vanguardia</p>
                </div>
            </div>

            <!-- Certificaciones -->
            <div class="certificaciones-grid">
                <div class="certificacion-card">
                    <div class="cert-icon">
                        <i class="bi bi-patch-check-fill"></i>
                    </div>
                    <h4>Certificación IRAM</h4>
                    <p>Normas argentinas para calidad en aberturas</p>
                </div>
                <div class="certificacion-card">
                    <div class="cert-icon">
                        <i class="bi bi-patch-check-fill"></i>
                    </div>
                    <h4>ISO 9001:2015</h4>
                    <p>Sistema de gestión de calidad internacional</p>
                </div>
                <div class="certificacion-card">
                    <div class="cert-icon">
                        <i class="bi bi-patch-check-fill"></i>
                    </div>
                    <h4>Garantía Extendida</h4>
                    <p>5 años en materiales y 2 años en mano de obra</p>
                </div>
            </div>
        </div>
    </section> --}}

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
                            <p>Utilizamos aluminio de primera calidad con perfiles de la líneas Módena, A30 New, A40, que ofrecen excelente resistencia, durabilidad y aislamiento térmico/acústico. Todos nuestros materiales cumplen con las todas las normas de calidad.</p>
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
                                <li>Después de la medición: 25-30 días hábiles</li>
                                <li>Proyectos con tratamientos especiales: 30-45 días hábiles</li>
                                <li>Instalación: 1-2 días previa coordinación con el responsable</li>
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
                                <li>1 años en materiales contra defectos de fabricación</li>
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
                            ¿Realizan proyectos en todo el país?
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <p>Sí, realizamos proyectos en todo el territorio argentino. Si tu proyecto es fuera de la provincia de Córdoba, consúltanos para una mejor asesoría.</p>
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