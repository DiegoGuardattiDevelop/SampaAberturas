@extends('layouts.app')

@section('title', 'Sampa - Mamparas')

@section('content')
<main class="container mt-5">
    <!-- Hero Header -->
    <div class="hero-header bg-gradient-green rounded-4 p-2 mb-5 text-white position-relative overflow-hidden">
        <div class="bg-overlay"></div>
        <div class="position-relative z-index-1">
            <hr class="bg-white-light">
            <h1 class="display-4 fw-bold">Mamparas Alukit</h1>
            <p class="lead">Elegancia y funcionalidad para tus espacios</p>
            <hr class="bg-white-light">
        </div>
    </div>

    <!-- Sección Principal -->
    <section id="mamparas" class="section-card bg-section-soft rounded-4 p-5 mb-5" data-aos="fade-up">
        <div class="section-header mb-5">
            <h2 class="display-5 fw-bold text-gradient-green mb-4">Mamparas de Alta Gama</h2>
            <p class="lead">En <strong>Sampa Aberturas</strong>, somos representantes oficiales de <strong>Alukit</strong>, líderes en la fabricación de mamparas que combinan funcionalidad, durabilidad y elegancia.</p>
        </div>

        <div class="row g-5">
            <!-- Características Principales -->
            <div class="col-md-6">
                <div class="feature-card bg-white rounded-3 p-4 h-100 shadow-sm">
                    <h3 class="fw-bold text-green mb-4">
                        <i class="bi bi-stars me-2"></i>
                        Características Principales
                    </h3>
                    <ul class="feature-list">
                        <li>
                            <i class="bi bi-check2-circle text-green me-2"></i>
                            <strong>Diseño Moderno:</strong> Líneas limpias y acabados sofisticados
                        </li>
                        <li>
                            <i class="bi bi-check2-circle text-green me-2"></i>
                            <strong>Materiales Premium:</strong> Aluminio y vidrios templados
                        </li>
                        <li>
                            <i class="bi bi-check2-circle text-green me-2"></i>
                            <strong>Personalización:</strong> Variedad de colores y texturas
                        </li>
                        <li>
                            <i class="bi bi-check2-circle text-green me-2"></i>
                            <strong>Funcionalidad:</strong> Apertura suave y cierre hermético
                        </li>
                        <li>
                            <i class="bi bi-check2-circle text-green me-2"></i>
                            <strong>Durabilidad:</strong> Resistencia a humedad y corrosión
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Beneficios -->
            <div class="col-md-6">
                <div class="feature-card bg-white rounded-3 p-4 h-100 shadow-sm">
                    <h3 class="fw-bold text-green mb-4">
                        <i class="bi bi-award me-2"></i>
                        Beneficios Clave
                    </h3>
                    <ul class="feature-list">
                        <li>
                            <i class="bi bi-check-square text-green me-2"></i>
                            <strong>Estética Elegante:</strong> Ambientes modernos
                        </li>
                        <li>
                            <i class="bi bi-check-square text-green me-2"></i>
                            <strong>Fácil Mantenimiento:</strong> Limpieza sencilla
                        </li>
                        <li>
                            <i class="bi bi-check-square text-green me-2"></i>
                            <strong>Privacidad + Luz:</strong> Vidrios especializados
                        </li>
                        <li>
                            <i class="bi bi-check-square text-green me-2"></i>
                            <strong>Resistencia al Agua:</strong> Perfectas para duchas
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Galería de Aplicaciones -->
            <div class="col-12 mt-4">
                <div class="feature-card bg-section-green-soft rounded-3 p-4">
                    <h3 class="fw-bold text-green mb-4 text-center">
                        <i class="bi bi-collection me-2"></i>
                        Aplicaciones Destacadas
                    </h3>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="app-card bg-white rounded-3 p-3 text-center h-100">
                                <i class="bi bi-droplet fs-1 text-green mb-3"></i>
                                <h5 class="fw-bold">Baños y Duchas</h5>
                                <p class="text-muted">Separación con estilo y funcionalidad</p>
                                <div class="mt-2">
                                    <span class="badge bg-green-soft text-green">Resistente al agua</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="app-card bg-white rounded-3 p-3 text-center h-100">
                                <i class="bi bi-building fs-1 text-green mb-3"></i>
                                <h5 class="fw-bold">Oficinas</h5>
                                <p class="text-muted">Privacidad sin perder luminosidad</p>
                                <div class="mt-2">
                                    <span class="badge bg-green-soft text-green">División de espacios</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="app-card bg-white rounded-3 p-3 text-center h-100">
                                <i class="bi bi-shop fs-1 text-green mb-3"></i>
                                <h5 class="fw-bold">Proyectos Comerciales</h5>
                                <p class="text-muted">Hoteles, spas y gimnasios</p>
                                <div class="mt-2">
                                    <span class="badge bg-green-soft text-green">Alta resistencia</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tipos de Vidrio -->
            <div class="col-12 mt-4">
                <div class="feature-card bg-white rounded-3 p-4 shadow-sm">
                    <h3 class="fw-bold text-green mb-4 text-center">
                        <i class="bi bi-border-all me-2"></i>
                        Opciones de Vidrio
                    </h3>
                    <div class="row text-center g-4">
                        <div class="col-md-3">
                            <div class="glass-type rounded-3 p-3 h-100">
                                <div class="glass-sample transparent mx-auto mb-3"></div>
                                <h5 class="fw-bold">Transparente</h5>
                                <p class="text-muted">Máxima luminosidad</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="glass-type rounded-3 p-3 h-100">
                                <div class="glass-sample satinado mx-auto mb-3"></div>
                                <h5 class="fw-bold">Satinado</h5>
                                <p class="text-muted">Privacidad con luz</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="glass-type rounded-3 p-3 h-100">
                                <div class="glass-sample esmerilado mx-auto mb-3"></div>
                                <h5 class="fw-bold">Esmerilado</h5>
                                <p class="text-muted">Estilo moderno</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="glass-type rounded-3 p-3 h-100">
                                <div class="glass-sample decorativo mx-auto mb-3"></div>
                                <h5 class="fw-bold">Decorativo</h5>
                                <p class="text-muted">Diseños exclusivos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA -->
            {{-- <div class="col-12 mt-5 text-center">
                <div class="cta-box bg-gradient-green-light rounded-3 p-4 text-white">
                    <h3 class="fw-bold mb-4">¿Listo para transformar tus espacios?</h3>
                    <p class="lead mb-4">Nuestros expertos te asesorarán en la elección perfecta</p>
                    <a href="{{ route('contacto') }}" class="btn btn-light btn-lg px-4">
                        <i class="bi bi-chat-dots me-2"></i> Solicitar Asesoramiento
                    </a>
                </div>
            </div> --}}
        </div>
    </section>
</main>
@endsection

@section('styles')
<style>
    /* Estilos específicos para mamparas */
    .glass-sample {
        width: 100px;
        height: 100px;
        border-radius: 8px;
        border: 1px solid #dee2e6;
        position: relative;
        overflow: hidden;
    }
    
    .glass-sample.transparent {
        background: linear-gradient(135deg, rgba(200, 230, 255, 0.8), rgba(255, 255, 255, 0.9));
    }
    
    .glass-sample.satinado {
        background: linear-gradient(135deg, rgba(255,255,255,0.7), rgba(255,255,255,0.9));
        background-image: url("data:image/svg+xml,%3Csvg width='20' height='20' viewBox='0 0 20 20' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M0 0h20L0 20z' fill='%23dee2e6' fill-opacity='0.4' fill-rule='evenodd'/%3E%3C/svg%3E");
    }
    
    .glass-sample.esmerilado {
        background: #f8f9fa;
        background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='%239C92AC' fill-opacity='0.2' fill-rule='evenodd'%3E%3Cpath d='M25 10h5v5h-5zM30 15h5v5h-5zM25 20h5v5h-5zM30 25h5v5h-5zM25 30h5v5h-5zM30 35h5v5h-5zM25 40h5v5h-5zM30 45h5v5h-5zM25 50h5v5h-5zM30 55h5v5h-5z'/%3E%3C/g%3E%3C/svg%3E");
    }
    
    .glass-sample.decorativo {
        background: #f8f9fa;
        background-image: url("data:image/svg+xml,%3Csvg width='52' height='26' viewBox='0 0 52 26' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%2341946a' fill-opacity='0.3'%3E%3Cpath d='M10 10c0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6h2c0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4 3.314 0 6 2.686 6 6 0 2.21 1.79 4 4 4v2c-3.314 0-6-2.686-6-6 0-2.21-1.79-4-4-4-3.314 0-6-2.686-6-6zm25.464-1.95l8.486 8.486-1.414 1.414-8.486-8.486 1.414-1.414z' /%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
    }
    
    .glass-type {
        transition: all 0.3s ease;
    }
    
    .glass-type:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .badge.bg-green-soft {
        background-color: rgba(49, 146, 85, 0.1);
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