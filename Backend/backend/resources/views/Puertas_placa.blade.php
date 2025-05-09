@extends('layouts.app')

@section('title', 'Sampa - Productos')

@section('content')
<main class="container mt-5">
    <!-- Hero Header -->
    <div class="hero-header bg-gradient-green rounded-4 p-2 mb-5 text-white position-relative overflow-hidden" data-aos="fade-up" data-aos-duration="1000">
        <div class="bg-overlay"></div>
        <div class="position-relative z-index-1 text-center">
            <hr class="bg-white-light" data-aos="fade" data-aos-delay="100">
            <h1 class="display-4 fw-bold" data-aos="fade-up" data-aos-delay="200">Puertas de Interior</h1>
            <p class="lead" data-aos="fade-up" data-aos-delay="300">Elegancia y funcionalidad para tus espacios interiores</p>
            <hr class="bg-white-light" data-aos="fade" data-aos-delay="400">
        </div>
    </div>

    <!-- Sección Principal -->
    <section id="puertas-placas" class="section-card bg-section-soft rounded-4 p-5 mb-5">
        <!-- Sección 1: Puertas Interior Indoors -->
        <div class="container mt-5">
            <div class="row align-items-center mb-5">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                    <div class="section-header">
                        <h2 class="display-5 fw-bold text-gradient-green mb-4" data-aos="fade-up" data-aos-delay="200">Puertas Interior Indoors</h2>
                        <p class="lead" data-aos="fade-up" data-aos-delay="300">Las <strong>Puertas de Interior Indoors</strong> son una solución moderna y funcional para cualquier espacio. Diseñadas con materiales de alta calidad y un enfoque en la durabilidad, estas puertas combinan elegancia y resistencia, siendo ideales para hogares, oficinas y proyectos comerciales.</p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                    <div class="image-gallery">
                        <div class="gallery-card bg-white rounded-3 overflow-hidden shadow-sm">
                            <img src="{{ asset('Images/sampa_linea_aluminio.jpg') }}" alt="Línea Aluminio" class="img-fluid gallery-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección 2: Modelos Línea Aluminio -->
        <div class="container mt-5">
            <div class="row align-items-center mb-5">
                <div class="col-md-6 order-md-1 order-2" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                    <div class="image-gallery">
                        <div class="gallery-card bg-white rounded-3 overflow-hidden shadow-sm">
                            <img src="{{ asset('Images/sampa_linea_aluminio_modelos.jpg') }}" alt="Línea Aluminio Modelos" class="img-fluid gallery-img">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-md-2 order-1" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="section-header">
                        <h2 class="display-5 fw-bold text-gradient-green mb-4" data-aos="fade-up" data-aos-delay="300">Modelos Línea Aluminio</h2>
                        <p class="lead" data-aos="fade-up" data-aos-delay="400">Se destacan los delicados detalles de aluminio, los cuales realzan y modernizan todos los ambientes.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección 3: Puertas Interior Indoors (Repetida) -->
        <div class="container mt-5">
            <div class="row align-items-center mb-5">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                    <div class="section-header">
                        <h2 class="display-5 fw-bold text-gradient-green mb-4" data-aos="fade-up" data-aos-delay="200">Puertas Interior Indoors</h2>
                        <p class="lead" data-aos="fade-up" data-aos-delay="300">Las <strong>Puertas de Interior Indoors</strong> son una solución moderna y funcional para cualquier espacio. Diseñadas con materiales de alta calidad y un enfoque en la durabilidad, estas puertas combinan elegancia y resistencia, siendo ideales para hogares, oficinas y proyectos comerciales.</p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                    <div class="image-gallery">
                        <div class="gallery-card bg-white rounded-3 overflow-hidden shadow-sm">
                            <img src="{{ asset('Images/sampa_linea_vidriada.jpg') }}" alt="Línea Vidriada" class="img-fluid gallery-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección 4: Modelos Línea Vidriada -->
        <div class="container mt-5">
            <div class="row align-items-center mb-5">
                <div class="col-md-6 order-md-1 order-2" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                    <div class="image-gallery">
                        <div class="gallery-card bg-white rounded-3 overflow-hidden shadow-sm">
                            <img src="{{ asset('Images/sampa_linea_vidriada_modelos.jpg') }}" alt="Línea Vidriada Modelos" class="img-fluid gallery-img">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-md-2 order-1" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="section-header">
                        <h2 class="display-5 fw-bold text-gradient-green mb-4" data-aos="fade-up" data-aos-delay="300">Modelos Línea Vidriada</h2>
                        <p class="lead" data-aos="fade-up" data-aos-delay="400">Los vidrios traslúcidos en tus puertas permiten iluminar tus ambientes, con diseño exclusivo y sin perder privacidad.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección 5: Puertas Interior Indoors (Repetida) -->
        <div class="container mt-5">
            <div class="row align-items-center mb-5">
                <div class="col-md-6" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                    <div class="section-header">
                        <h2 class="display-5 fw-bold text-gradient-green mb-4" data-aos="fade-up" data-aos-delay="200">Puertas Interior Indoors</h2>
                        <p class="lead" data-aos="fade-up" data-aos-delay="300">Las <strong>Puertas de Interior Indoors</strong> son una solución moderna y funcional para cualquier espacio. Diseñadas con materiales de alta calidad y un enfoque en la durabilidad, estas puertas combinan elegancia y resistencia, siendo ideales para hogares, oficinas y proyectos comerciales.</p>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                    <div class="image-gallery">
                        <div class="gallery-card bg-white rounded-3 overflow-hidden shadow-sm">
                            <img src="{{ asset('Images/sampa_linea_mixta.jpg') }}" alt="Línea Mixta" class="img-fluid gallery-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sección 6: Modelos Línea Mixta -->
        <div class="container mt-5">
            <div class="row align-items-center mb-5">
                <div class="col-md-6 order-md-1 order-2" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="100">
                    <div class="image-gallery">
                        <div class="gallery-card bg-white rounded-3 overflow-hidden shadow-sm">
                            <img src="{{ asset('Images/sampa_linea_mixta_modelos.jpg') }}" alt="Línea Mixta Modelos" class="img-fluid gallery-img">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-md-2 order-1" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="section-header">
                        <h2 class="display-5 fw-bold text-gradient-green mb-4" data-aos="fade-up" data-aos-delay="300">Modelos Línea Mixta</h2>
                        <p class horizontal-align: left;="lead" data-aos="fade-up" data-aos-delay="400">La vanguardia cobra vida en tus proyectos, usá puertas con modernos diseños, detalles en vidrios y aluminios para diferenciar tu hogar.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@section('styles')
<style>
    /* Colores principales */
    :root {
        --green-primary: rgb(49, 146, 85);
        --green-light: rgba(49, 146, 85, 0.1);
        --green-dark: rgb(39, 126, 75);
    }

    .bg-gradient-green {
        background: linear-gradient(135deg, var(--green-primary) 0%, var(--green-dark) 100%);
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
        background: linear-gradient(135deg, var(--green-primary) 0%, var(--green-dark) 100%);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .bg-section-soft {
        background-color: rgba(249, 249, 249, 0.7);
        border-left: 5px solid rgba(49, 146, 85, 0.3);
    }

    .feature-card {
        transition: all 0.3s ease;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .text-green {
        color: var(--green-primary);
    }

    .shadow-hover {
        transition: all 0.3s ease;
    }

    .shadow-hover:hover {
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    /* Estilos para la galería */
    .gallery-card {
        transition: all 0.3s ease;
    }

    .gallery-card:hover {
        transform: scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

    .gallery-img {
        width: 100%;
        height: 300px; /* Ajustado para mejor visualización */
        object-fit: cover; /* Asegura que las imágenes se ajusten sin distorsionarse */
        border-radius: 3px;
    }

    /* Ajustes para responsividad */
    @media (max-width: 768px) {
        .gallery-img {
            height: 200px; /* Menor altura en móviles */
        }
    }
</style>
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800, // Duración de la animación en milisegundos
        offset: 100, // Distancia desde el borde inferior de la ventana para iniciar la animación
        easing: 'ease-out-back', // Suavidad de la animación
        once: true, // Animar solo una vez
        anchorPlacement: 'top-bottom' // Punto de anclaje para disparar la animación
    });
</script>
@endsection