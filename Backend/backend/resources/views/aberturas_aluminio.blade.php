@extends('layouts.app')

@section('title', 'Sampa - Aluminio')

@section('content')
<main class="container mt-5">
    <div>
        <hr class="bg-success-light">
        <h1>Aberturas Aluminio | Productos</h1>
        <hr class="bg-light">
    </div>
    <!-- Sección 1: Líneas -->
    <section id="lineas" class="bg-section mt-5" data-aos="fade-up">
        <div class="container">
            <h2 class="text-center mb-4">Nuestras Líneas</h2>
            <p class="text-center lead">Descubrí nuestras líneas premium, diseñadas para elevar cada proyecto con estilo y resistencia.</p>
            <div class="row g-5"> <!-- Más espacio entre tarjetas -->
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('Images/aluar-system-06.svg') }}" class="card-img-top" alt="Modena">
                        <div class="card-body text-center">
                            <h4 class="card-title">Modena</h4>
                            <p class="card-text">Elegancia funcional para hogares y oficinas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('Images/aluar-system-01.svg') }}" class="card-img-top" alt="A30 New">
                        <div class="card-body text-center">
                            <h4 class="card-title">A30 New</h4>
                            <p class="card-text">Alta prestación para grandes aberturas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('Images/aluar-system-031.svg') }}" class="card-img-top" alt="Línea Herrero">
                        <div class="card-body text-center">
                            <h4 class="card-title">Línea Herrero</h4>
                            <p class="card-text">Economía y resistencia para obras estándar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img src="{{ asset('Images/aluar-system-02.svg') }}" class="card-img-top" alt="Monoblock">
                        <div class="card-body text-center">
                            <h4 class="card-title">Monoblock</h4>
                            <p class="card-text">Ventanas y persianas en un solo sistema.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider container"></div>

    <!-- Sección 2: ¿Por qué elegir aberturas de aluminio? -->
    <section id="por-que-aluminio" class="bg-section-alt mt-5" data-aos="fade-up" data-aos-delay="100">
        <div class="container">
            <h2 class="text-center mb-4">¿Por qué elegir aluminio?</h2>
            <p class="text-center lead">Transformá tus espacios con un material duradero y versátil.</p>
            <div class="row g-5">
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="bi bi-shield-check fs-2 text-success-dark mb-3"></i>
                        <h5>Durabilidad</h5>
                        <p>Resiste corrosión y climas extremos.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="bi bi-brush fs-2 text-success-dark mb-3"></i>
                        <h5>Diseño versátil</h5>
                        <p>Formas y cortes personalizados.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="bi bi-gear fs-2 text-success-dark mb-3"></i>
                        <h5>Mantenimiento mínimo</h5>
                        <p>Limpieza fácil, sin repintado.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section-divider container"></div>

    <!-- Sección 3: Tipologías -->
<section id="tipologias" class="aberturas-section" data-aos="fade-up" data-aos-delay="200">
    <div class="container">
        <h2 class="text-center mb-4">Tipologías de Aberturas</h2>
        <p class="text-center lead">Soluciones específicas para cada espacio de tu proyecto.</p>
        <div class="row g-5">
            <div class="col-md-4">
                <div class="aberturas-card h-100">
                    <div class="aberturas-card-body">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-window fs-2 text-success-dark me-4"></i>
                            <div>
                                <h5 class="aberturas-card-title">Ventanas Corredizas</h5>
                                <p class="aberturas-card-text">Ideales para balcones. <em>Modena, A30 New.</em></p>
                            </div>
                        </div>
                        <div class="aberturas-video-wrapper mt-auto">
                            <video src="{{ asset('Images/VID-20250403-WA0009.mp4') }}" class="aberturas-video" controls muted width="100%" height="auto">
                                Tu navegador no soporta la etiqueta de video.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="aberturas-card h-100">
                    <div class="aberturas-card-body">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-window-stack fs-2 text-success-dark me-4"></i>
                            <div>
                                <h5 class="aberturas-card-title">Ventanas Oscilobatientes</h5>
                                <p class="aberturas-card-text">Ventilación para cocinas y baños. <em>Modena, Monoblock.</em></p>
                            </div>
                        </div>
                        <div class="aberturas-video-wrapper mt-auto">
                            <video src="{{ asset('Images/VID-20250403-WA0012.mp4') }}" class="aberturas-video" controls muted width="100%" height="auto">
                                Tu navegador no soporta la etiqueta de video.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="aberturas-card h-100">
                    <div class="aberturas-card-body">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-door-open fs-2 text-success-dark me-4"></i>
                            <div>
                                <h5 class="aberturas-card-title">Ventana Desplazable</h5>
                                <p class="aberturas-card-text">Seguridad y estilo. <em>A30 New.</em></p>
                            </div>
                        </div>
                        <div class="aberturas-video-wrapper mt-auto">
                            <video src="{{ asset('Images/VID-20250403-WA0010.mp4') }}" class="aberturas-video" controls muted width="100%" height="auto">
                                Tu navegador no soporta la etiqueta de video.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="aberturas-card h-100">
                    <div class="aberturas-card-body">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-building fs-2 text-success-dark me-4"></i>
                            <div>
                                <h5 class="aberturas-card-title">Frentes Vidriados</h5>
                                <p class="aberturas-card-text">Oficinas y locales comerciales. <em>A30 New.</em></p>
                            </div>
                        </div>
                        <div class="aberturas-video-wrapper mt-auto">
                            <video src="{{ asset('Images/VID-20250403-WA0011.mp4') }}" class="aberturas-video" controls muted width="100%" height="auto">
                                Tu navegador no soporta la etiqueta de video.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="aberturas-card h-100">
                    <div class="aberturas-card-body">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-shower fs-2 text-success-dark me-4"></i>
                            <div>
                                <h5 class="aberturas-card-title">Mamparas de Baño</h5>
                                <p class="aberturas-card-text">Durabilidad en áreas húmedas. <em>Monoblock.</em></p>
                            </div>
                        </div>
                        <div class="aberturas-video-wrapper mt-auto">
                            <video src="{{ asset('Images/VID-20250403-WA0008.mp4') }}" class="aberturas-video" controls muted width="100%" height="auto">
                                Tu navegador no soporta la etiqueta de video.
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    

    <div class="section-divider container"></div>

    <!-- Sección 4: Colores -->
    <section id="colores" class="bg-section-alt mt-5" data-aos="fade-up" data-aos-delay="300">
        <div class="container">
            <h2 class="text-center mb-4">Colores y Acabados</h2>
            <p class="text-center lead">Personalizá tus aberturas con acabados únicos.</p>
            <div class="row g-5">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="color-sample bg-white border" style="background-color: #FFFFFF;"></div>
                            <h5 class="card-title">Blanco</h5>
                            <p class="card-text">Versatilidad para cualquier diseño.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="color-sample" style="background-color: #2F2F2F;"></div>
                            <h5 class="card-title">Anodizado Negro</h5>
                            <p class="card-text">Sofisticación moderna.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="color-sample" style="background-color: #A8A8A8;"></div>
                            <h5 class="card-title">Anodizado Natural</h5>
                            <p class="card-text">Brillo clásico del aluminio.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body text-center">
                            <div class="color-sample" style="background-color: #8B4513;"></div>
                            <h5 class="card-title">Imitación Madera</h5>
                            <p class="card-text">Calidez con resistencia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
        easing: 'ease-out'
    });

    // Ajustar volumen por defecto de los videos
    document.querySelectorAll('.aberturas-video').forEach(video => {
        video.volume = 0.2; // Volumen al 20%
    });
</script>
@endsection