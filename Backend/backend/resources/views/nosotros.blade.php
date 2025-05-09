@extends('layouts.app')

@section('title', 'Sampa - Nosotros')

@section('content')
<main class="container mt-5">
    <!-- Hero Header -->
    <div class="hero-header bg-gradient-green rounded-4 p-2 mb-5 text-white position-relative overflow-hidden">
        <div class="bg-overlay"></div>
        <div class="position-relative z-index-1 text-center">
            <hr class="bg-white-light">
            <h1 class="display-4 fw-bold">Historia</h1>
            <p class="lead">Más de una década de excelencia en aberturas</p>
            <hr class="bg-white-light">
        </div>
    </div>

    <!-- Sección Historia -->
    <section id="historia" class="section-card bg-section-soft rounded-4 p-5 mb-5" data-aos="fade-up">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="about-image-container rounded-4 overflow-hidden shadow">
                    <img src="{{ asset('Images/sampa_nosotros_2.jpg') }}" alt="Historia Sampa" class="img-fluid w-100">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <h2 class="fw-bold text-gradient-green mb-4">De un sueño familiar a líder en el sector</h2>
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-badge bg-green"></div>
                            <div class="timeline-content">
                                <p>Sampa Aberturas nació en Laguna Larga, Córdoba, como un proyecto familiar con el sueño de brindar productos de calidad y un servicio confiable.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-badge bg-green"></div>
                            <div class="timeline-content">
                                <p>Con humildad y dedicación, incorporamos nuevas tecnologías y materiales innovadores para fabricar aberturas más eficientes y estéticas.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-badge bg-green"></div>
                            <div class="timeline-content">
                                <p>Nuestro asesoramiento personalizado y servicio postventa nos permitieron acceder a proyectos de mayor envergadura.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-badge bg-green"></div>
                            <div class="timeline-content">
                                <p>Hoy somos referentes en Córdoba, participando en proyectos residenciales, comerciales e institucionales.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Misión y Visión -->
    <section id="mision-vision" class="section-card bg-section-green-soft rounded-4 p-5 mb-5" data-aos="fade-up">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 order-lg-2">
                <div class="about-image-container rounded-4 overflow-hidden shadow">
                    <img src="{{ asset('Images/sampa_nosotros_3.jpg') }}" alt="Misión y Visión" class="img-fluid w-100">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="mission-vision-content">
                    <div class="mission-card bg-white rounded-3 p-4 mb-4 shadow-sm">
                        <h3 class="fw-bold text-green mb-3">
                            <i class="bi bi-bullseye me-2"></i>
                            Nuestra Misión
                        </h3>
                        <p>Ofrecer soluciones innovadoras y de alta calidad en aberturas, brindando seguridad, diseño y eficiencia en cada producto.</p>
                        <ul class="feature-list mt-3">
                            <li>
                                <i class="bi bi-check-circle text-green me-2"></i>
                                Atención personalizada y asesoramiento especializado
                            </li>
                            <li>
                                <i class="bi bi-check-circle text-green me-2"></i>
                                Mejora continua de procesos con tecnologías de vanguardia
                            </li>
                            <li>
                                <i class="bi bi-check-circle text-green me-2"></i>
                                Responsabilidad y ética en cada proyecto
                            </li>
                        </ul>
                    </div>
                    
                    <div class="vision-card bg-white rounded-3 p-4 shadow-sm">
                        <h3 class="fw-bold text-green mb-3">
                            <i class="bi bi-eye-fill me-2"></i>
                            Nuestra Visión
                        </h3>
                        <p>Ser la empresa líder en soluciones de aberturas en la región, reconocida por calidad, innovación y excelencia en el servicio.</p>
                        <ul class="feature-list mt-3">
                            <li>
                                <i class="bi bi-arrow-up-right-circle text-green me-2"></i>
                                Expandir nuestra presencia con crecimiento sostenible
                            </li>
                            <li>
                                <i class="bi bi-arrow-up-right-circle text-green me-2"></i>
                                Implementar materiales de última generación
                            </li>
                            <li>
                                <i class="bi bi-arrow-up-right-circle text-green me-2"></i>
                                Fortalecer relaciones basadas en confianza y respeto
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Equipo -->
    <section id="equipo" class="section-card bg-section-soft rounded-4 p-5 mb-5" data-aos="fade-up">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="about-image-container rounded-4 overflow-hidden shadow">
                    <img src="{{ asset('Images/sampa_nosotros_4.jpg') }}" alt="Equipo Sampa" class="img-fluid w-100">
                </div>
            </div>
            <div class="col-lg-6">
                <h2 class="fw-bold text-gradient-green mb-4">Nuestro Equipo</h2>
                <p class="lead">El corazón de Sampa Aberturas</p>
                
                <div class="team-features row g-4 mt-4">
                    <div class="col-md-6">
                        <div class="team-card bg-white rounded-3 p-3 h-100 shadow-sm">
                            <i class="bi bi-people-fill fs-2 text-green mb-3"></i>
                            <h5 class="fw-bold">Profesionales Capacitados</h5>
                            <p class="text-muted">Expertos en diseño, producción y atención al cliente</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="team-card bg-white rounded-3 p-3 h-100 shadow-sm">
                            <i class="bi bi-lightbulb-fill fs-2 text-green mb-3"></i>
                            <h5 class="fw-bold">Innovación Constante</h5>
                            <p class="text-muted">Capacitación continua y adopción de nuevas tecnologías</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="team-card bg-white rounded-3 p-3 h-100 shadow-sm">
                            <i class="bi bi-heart-fill fs-2 text-green mb-3"></i>
                            <h5 class="fw-bold">Cultura de Trabajo</h5>
                            <p class="text-muted">Ambiente de confianza, respeto y mejora continua</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="team-card bg-white rounded-3 p-3 h-100 shadow-sm">
                            <i class="bi bi-shield-check fs-2 text-green mb-3"></i>
                            <h5 class="fw-bold">Compromiso</h5>
                            <p class="text-muted">Dedicación a la calidad y satisfacción del cliente</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    {{-- <div class="cta-box bg-gradient-green-light rounded-4 p-5 text-white text-center mb-5" data-aos="fade-up">
        <h2 class="fw-bold mb-3">¿Quieres ser parte de nuestra historia?</h2>
        <p class="lead mb-4">Contáctanos y descubre cómo podemos transformar tus espacios</p>
        <a href="{{ route('contacto') }}" class="btn btn-light btn-lg px-4">
            <i class="bi bi-chat-left-text me-2"></i> Contactar
        </a>
    </div> --}}
</main>
@endsection

@section('styles')
<style>
    /* Estilos específicos para Nosotros */
    .about-image-container {
        position: relative;
        overflow: hidden;
        transition: all 0.3s ease;
    }
    
    .about-image-container:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .about-image-container::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: linear-gradient(to bottom, rgba(0,0,0,0.1), rgba(0,0,0,0.3));
    }
    
    .timeline {
        position: relative;
        padding-left: 30px;
    }
    
    .timeline-item {
        position: relative;
        margin-bottom: 25px;
    }
    
    .timeline-badge {
        position: absolute;
        left: -30px;
        top: 0;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        z-index: 2;
    }
    
    .timeline-content {
        padding: 15px;
        background: white;
        border-radius: 8px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        position: relative;
    }
    
    .timeline-content::before {
        content: '';
        position: absolute;
        left: -15px;
        top: 20px;
        width: 0;
        height: 0;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        border-right: 15px solid white;
    }
    
    .mission-card, .vision-card {
        transition: all 0.3s ease;
    }
    
    .mission-card:hover, .vision-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .team-card {
        transition: all 0.3s ease;
        border: 1px solid rgba(49, 146, 85, 0.1);
    }
    
    .team-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(49, 146, 85, 0.1);
        border-color: rgba(49, 146, 85, 0.3);
    }
    
    /* Mantenemos los estilos base del layout */
    .bg-gradient-green {
        background: linear-gradient(135deg, rgba(49, 146, 85, 1) 0%, rgba(39, 126, 75, 1) 100%);
    }
    
    .bg-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;utf8,<svg width="10" height="10" xmlns="http://www.w3.org/2000/svg"><path d="M0 0 L10 10" stroke="white" stroke-width="0.5" opacity="0.3"/></svg>') repeat;
        opacity: 0.1;
    }
    
    .text-gradient-green {
        background: linear-gradient(135deg, rgba(49, 146, 85, 1) 0%, rgba(39, 126, 75, 1) 100%);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }
    
    .bg-section-soft {
        background-color: rgba(249, 249, 249, 0.7);
        border-left: 5px solid rgba(49, 146, 85, 0.3);
    }
    
    .bg-section-green-soft {
        background-color: rgba(49, 146, 85, 0.05);
        border-left: 5px solid rgba(49, 146, 85, 0.2);
    }
    
    .bg-gradient-green-light {
        background: linear-gradient(135deg, rgba(49, 146, 85, 0.8) 0%, rgba(39, 126, 75, 0.9) 100%);
    }
    
    .text-green {
        color: rgb(49, 146, 85);
    }
    
    .bg-green {
        background-color: rgb(49, 146, 85);
    }
</style>
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
        easing: 'ease-out-back'
    });
</script>
@endsection