@extends('layouts.app')

@section('title', 'Sampa - Aluminio')

@section('content')
<main class="container mt-5">
    <!-- Hero Header -->
    <div class="hero-header bg-gradient-green rounded-4 p-2 mb-5 text-white position-relative overflow-hidden">
        <div class="bg-overlay"></div>
        <div class="position-relative z-index-1 text-center">
            <hr class="bg-white-light">
            <h1 class="display-4 fw-bold">Aberturas de Aluminio</h1>
            <p class="lead">Calidad, diseño y durabilidad para tus proyectos</p>
            <hr class="bg-white-light">
        </div>
    </div>
    <!-- Sección 1: Líneas -->
    <section id="lineas" class="section-card bg-section-green-soft rounded-4 p-5 mb-5" data-aos="fade-up">
        {{-- <div class="container"> --}}
            <div class="section-header mb-5 text-center">
                <h2 class="display-5 fw-bold text-gradient-primary">Nuestras Líneas</h2>
                <p class="lead text-muted">Sistemas premium diseñados para elevar cada proyecto con estilo y resistencia</p>
            </div>
            <div class="row g-4"> 
                <div class="col-md-3">
                    <div class="card product-card h-100 border-0 shadow-hover">
                        <div class="card-img-top-container p-4 bg-light">
                            <img src="{{ asset('Images/aluar-system-06.svg') }}" class="card-img-top" alt="Modena">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title fw-bold text-primary">Modena</h4>
                            <p class="card-text text-muted">Elegancia funcional para hogares y oficinas.</p>
                            {{-- <a href="#" class="btn btn-outline-success mt-3">Ver detalles</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card h-100 border-0 shadow-hover">
                        <div class="card-img-top-container p-4 bg-light">
                            <img src="{{ asset('Images/aluar-system-01.svg') }}" class="card-img-top" alt="A30 New">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title">A30 New</h4>
                            <p class="card-text">Alta prestación para grandes aberturas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card h-100 border-0 shadow-hover">
                        <div class="card-img-top-container p-4 bg-light">
                            <img src="{{ asset('Images/aluar-system-031.svg') }}" class="card-img-top" alt="Línea Herrero">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title">Línea Herrero</h4>
                            <p class="card-text">Economía y resistencia para obras estándar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card product-card h-100 border-0 shadow-hover">
                        <div class="card-img-top-container p-4 bg-light">
                            <img src="{{ asset('Images/aluar-system-02.svg') }}" class="card-img-top" alt="Monoblock">
                        </div>
                        <div class="card-body text-center">
                            <h4 class="card-title">Monoblock</h4>
                            <p class="card-text">Ventanas y persianas en un solo sistema.</p>
                        </div>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
    </section>

    <div class="section-divider container"></div>

    <!-- Sección 2: ¿Por qué elegir aberturas de aluminio? -->
    <section id="por-que-aluminio" class="section-card bg-section-soft rounded-4 p-5 mb-5" data-aos="fade-up">
        {{-- <div class="container"> --}}
            <div class="section-header mb-5 text-center text-white">
                <h2 class="display-5 fw-bold text-gradient-primary">¿Por qué elegir aluminio?</h2>
                <p class="lead">Transformá tus espacios con un material duradero y versátil</p>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card bg-white rounded-3 p-4 text-center h-100 shadow-sm">
                        <div class="icon-container bg-primary-light rounded-circle mx-auto mb-4">
                            <i class="bi bi-shield-check fs-2 text-primary"></i>
                        </div>
                        <h4 class="fw-bold">Durabilidad</h4>
                        <p class="text-muted">Resiste corrosión y climas extremos sin deteriorarse.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card bg-white rounded-3 p-4 text-center h-100 shadow-sm">
                        <div class="icon-container bg-primary-light rounded-circle mx-auto mb-4">
                            <i class="bi bi-brush fs-2 text-primary"></i>
                        </div>
                        <h4 class="fw-bold">Diseño versátil</h4>
                        <p class="text-muted">Formas y cortes personalizados.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card bg-white rounded-3 p-4 text-center h-100 shadow-sm">
                        <div class="icon-container bg-primary-light rounded-circle mx-auto mb-4">
                            <i class="bi bi-gear fs-2 fs-2 text-primary"></i>
                        </div>
                        <h4 class="fw-bold">Mantenimiento mínimo</h4>
                        <p class="text-muted">Limpieza fácil, sin repintado.</p>
                    </div>
                </div>
            </div>
        {{-- </div> --}}
    </section>

    <div class="section-divider container"></div>

    <!-- Sección 3: Tipologías -->
    <section id="tipologias" class="section-card bg-section-green-soft rounded-4 p-5 mb-5" data-aos="fade-up">
    {{-- <div class="container"> --}}
        <div class="section-header mb-5 text-center">
            <h2 class="display-5 fw-bold text-gradient-primary">Tipologías de Aberturas</h2>
            <p class="lead text-muted">Soluciones específicas para cada espacio de tu proyecto</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-hover overflow-hidden">
                    <div class="video-container position-relative">
                        <video class="w-100" autoplay loop muted>
                            <source src="{{ asset('Images/VID-20250403-WA0009.mp4') }}" type="video/mp4">
                        </video>
                        <div class="video-overlay"></div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-start mb-3">
                            <div>
                                <h4 class="fw-bold">Ventanas Corredizas</h4>
                                <p class="text-muted">Ideales para balcones. <span class="text-primary">Modena, A30 New.</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-hover overflow-hidden">
                    <div class="video-container position-relative">
                        <video class="w-100" autoplay loop muted>
                            <source src="{{ asset('Images/VID-20250403-WA0012.mp4') }}" type="video/mp4">
                        </video>
                        <div class="video-overlay"></div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-start mb-3">
                            <div>
                                <h4 class="fw-bold">Ventanas Oscilobatientes</h4>
                                <p class="text-muted">Ventilación para cocinas y baños. <span class="text-primary">Modena, A30 New.</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-hover overflow-hidden">
                    <div class="video-container position-relative">
                        <video class="w-100" autoplay loop muted>
                            <source src="{{ asset('Images/VID-20250403-WA0010.mp4') }}" type="video/mp4">
                        </video>
                        <div class="video-overlay"></div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-start mb-3">
                            <div>
                                <h4 class="fw-bold">Ventana Desplazable</h4>
                                <p class="text-muted">Seguridad y estilo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-hover overflow-hidden">
                    <div class="video-container position-relative">
                        <video class="w-100" autoplay loop muted>
                            <source src="{{ asset('Images/VID-20250403-WA0008.mp4') }}" type="video/mp4">
                        </video>
                        <div class="video-overlay"></div>
                    </div>
                    <div class="card-body">
                        <div class="d-flex align-items-start mb-3">
                            <div>
                                <h4 class="fw-bold">Ventanas Rajas</h4>
                                <p class="text-muted">Ventilación para cocinas y baños. <span class="text-primary">Modena, A30 New.</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="section-divider container"></div>

    <!-- Sección 4: Colores -->
    <section id="colores" class="section-card bg-section-soft rounded-4 p-5 mb-5" data-aos="fade-up">
        <div class="section-header mb-5 text-center">
            <h2 class="display-5 fw-bold text-gradient-primary">Colores y Acabados</h2>
            <p class="lead text-muted">Personalizá tus aberturas con acabados únicos</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-3">
                <div class="color-card bg-white rounded-3 p-4 text-center h-100 shadow-sm">
                    <div class="color-sample mx-auto mb-4 rounded-3 shadow-sm" style="background-color: #FFFFFF; height: 100px;"></div>
                    <h4 class="fw-bold">Blanco</h4>
                    <p class="text-muted">Versatilidad para cualquier diseño arquitectónico.</p>
                </div>
            </div>
            <!-- Repetir para los otros colores -->
        </div>
    </section>
</main>
@endsection

{{-- <style>
    /* Alternativa con bordes decorativos */
    .bg-section-soft {
        background-color: #f8f9fa;
        position: relative;
        overflow: hidden;
    }
    
    .bg-section-soft::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 3px;
        height: 100%;
        background: linear-gradient(to bottom, rgba(49, 146, 85, 0.3), rgba(49, 146, 85, 0.1));
    }
    
    .bg-section-green-soft {
        background-color: rgba(49, 146, 85, 0.03);
        position: relative;
    }
    
    .bg-section-green-soft::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 1px;
        background: linear-gradient(to right, transparent, rgba(49, 146, 85, 0.2), transparent);
    }
</style> --}}

@section('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true,
        easing: 'ease-out-back'
    });
    
    // Autoplay videos al hacer hover
    document.querySelectorAll('video').forEach(video => {
        video.addEventListener('mouseover', () => video.play());
        video.addEventListener('mouseout', () => video.pause());
        video.volume = 0;
    });
</script>
@endsection