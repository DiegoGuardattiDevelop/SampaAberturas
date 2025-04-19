@extends('layouts.app')

@section('title', 'Sampa - Perfileria')

@section('content')
<main class="container mt-5">
    <!-- Hero Header -->
    <div class="hero-header bg-gradient-green rounded-4 p-5 mb-5 text-white position-relative overflow-hidden">
        <div class="bg-overlay"></div>
        <div class="position-relative z-index-1">
            <hr class="bg-white-light">
            <h1 class="display-4 fw-bold">Perfilería de Aluminio</h1>
            <p class="lead">Calidad y precisión para tus proyectos de aberturas</p>
            <hr class="bg-white-light">
        </div>
    </div>

    <!-- Sección Principal -->
    <section id="perfileria" class="section-card bg-section-soft rounded-4 p-5 mb-5" data-aos="fade-up">
        <div class="section-header mb-5">
            <h2 class="display-5 fw-bold text-gradient-green mb-4">Perfilería Profesional</h2>
            <p class="lead">La <strong>perfilería</strong> es fundamental para la fabricación y montaje de aberturas de calidad. Ofrecemos una amplia variedad de perfiles de aluminio, ideales para proyectos residenciales, comerciales e industriales.</p>
        </div>

        <div class="row g-5">
            <!-- Características Principales -->
            <div class="col-md-6">
                <div class="feature-card bg-white rounded-3 p-4 h-100 shadow-sm">
                    <h3 class="fw-bold text-green mb-4">
                        <i class="bi bi-gear-fill me-2"></i>
                        Características Principales
                    </h3>
                    <ul class="feature-list">
                        <li>
                            <i class="bi bi-check-circle text-green me-2"></i>
                            <strong>Materiales de Alta Calidad:</strong> Perfiles de aluminio resistentes
                        </li>
                        <li>
                            <i class="bi bi-check-circle text-green me-2"></i>
                            <strong>Diseño Versátil:</strong> Compatible con múltiples sistemas
                        </li>
                        <li>
                            <i class="bi bi-check-circle text-green me-2"></i>
                            <strong>Personalización:</strong> Variedad de colores y acabados
                        </li>
                        <li>
                            <i class="bi bi-check-circle text-green me-2"></i>
                            <strong>Eficiencia Energética:</strong> Rotura de puente térmico
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Beneficios -->
            <div class="col-md-6">
                <div class="feature-card bg-white rounded-3 p-4 h-100 shadow-sm">
                    <h3 class="fw-bold text-green mb-4">
                        <i class="bi bi-star-fill me-2"></i>
                        Beneficios Clave
                    </h3>
                    <ul class="feature-list">
                        <li>
                            <i class="bi bi-shield-check text-green me-2"></i>
                            <strong>Resistencia:</strong> Para climas extremos
                        </li>
                        <li>
                            <i class="bi bi-brush text-green me-2"></i>
                            <strong>Estética:</strong> Acabados modernos
                        </li>
                        <li>
                            <i class="bi bi-tools text-green me-2"></i>
                            <strong>Funcionalidad:</strong> Fácil instalación
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Tipos de Perfiles -->
            <div class="col-12 mt-4">
                <div class="feature-card bg-section-green-soft rounded-3 p-4">
                    <h3 class="fw-bold text-green mb-4 text-center">
                        <i class="bi bi-grid-3x3-gap-fill me-2"></i>
                        Tipos de Perfiles Disponibles
                    </h3>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="profile-type-card bg-white rounded-3 p-3 text-center h-100">
                                <i class="bi bi-border-width fs-1 text-green mb-3"></i>
                                <h5 class="fw-bold">Lineal Básico</h5>
                                <p class="text-muted">Para estructuras estándar</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="profile-type-card bg-white rounded-3 p-3 text-center h-100">
                                <i class="bi bi-border-style fs-1 text-green mb-3"></i>
                                <h5 class="fw-bold">Reforzado</h5>
                                <p class="text-muted">Mayor resistencia estructural</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="profile-type-card bg-white rounded-3 p-3 text-center h-100">
                                <i class="bi bi-thermometer-snow fs-1 text-green mb-3"></i>
                                <h5 class="fw-bold">Térmico</h5>
                                <p class="text-muted">Aislamiento energético</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="profile-type-card bg-white rounded-3 p-3 text-center h-100">
                                <i class="bi bi-palette fs-1 text-green mb-3"></i>
                                <h5 class="fw-bold">Decorativo</h5>
                                <p class="text-muted">Acabados especiales</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Aplicaciones -->
            <div class="col-12 mt-4">
                <div class="feature-card bg-white rounded-3 p-4 shadow-sm">
                    <h3 class="fw-bold text-green mb-4 text-center">
                        <i class="bi bi-building me-2"></i>
                        Aplicaciones Comunes
                    </h3>
                    <div class="row text-center">
                        <div class="col-md-4">
                            <div class="app-icon-container mx-auto mb-3">
                                <i class="bi bi-house-door fs-1 text-green"></i>
                            </div>
                            <h5 class="fw-bold">Residencial</h5>
                            <p class="text-muted">Viviendas y departamentos</p>
                        </div>
                        <div class="col-md-4">
                            <div class="app-icon-container mx-auto mb-3">
                                <i class="bi bi-briefcase fs-1 text-green"></i>
                            </div>
                            <h5 class="fw-bold">Comercial</h5>
                            <p class="text-muted">Oficinas y locales</p>
                        </div>
                        <div class="col-md-4">
                            <div class="app-icon-container mx-auto mb-3">
                                <i class="bi bi-building fs-1 text-green"></i>
                            </div>
                            <h5 class="fw-bold">Industrial</h5>
                            <p class="text-muted">Naves y fábricas</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            {{-- <div class="col-12 mt-5 text-center">
                <div class="cta-box bg-gradient-green-light rounded-3 p-4 text-white">
                    <h3 class="fw-bold mb-4">¿Necesitas asesoramiento técnico?</h3>
                    <p class="lead mb-4">Nuestros expertos te ayudarán a seleccionar la perfilería adecuada</p>
                    <a href="{{ route('contacto') }}" class="btn btn-light btn-lg px-4">
                        <i class="bi bi-chat-square-text me-2"></i> Consultar
                    </a>
                </div>
            </div> --}}
        </div>
    </section>
</main>
@endsection

@section('styles')
<style>
    /* Estilos específicos para perfilería */
    .profile-type-card {
        transition: all 0.3s ease;
        border: 1px solid rgba(49, 146, 85, 0.1);
    }
    
    .profile-type-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(49, 146, 85, 0.1);
        border-color: rgba(49, 146, 85, 0.3);
    }
    
    .app-icon-container {
        width: 70px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: rgba(49, 146, 85, 0.1);
        border-radius: 50%;
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
        background: url('{{ asset("Images/pattern.png") }}') center/cover;
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
    
    .feature-card {
        transition: all 0.3s ease;
    }
    
    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }
    
    .feature-list {
        list-style: none;
        padding-left: 0;
    }
    
    .feature-list li {
        padding: 8px 0;
        border-bottom: 1px solid rgba(0,0,0,0.05);
    }
    
    .bg-gradient-green-light {
        background: linear-gradient(135deg, rgba(49, 146, 85, 0.8) 0%, rgba(39, 126, 75, 0.9) 100%);
    }
    
    .text-green {
        color: rgb(49, 146, 85);
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