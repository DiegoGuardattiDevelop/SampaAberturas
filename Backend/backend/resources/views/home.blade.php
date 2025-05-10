
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
                                <h1>Brindamos soluciones <br> integrales a tu hogar</h1>
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
                                <h1>Le damos valor <br> a tus ambientes</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container_presenta">
                        <div class="presenta_info">
                            <div class="presenta_text">
                                <h1>La experiencia es <br> nuestro mejor producto</h1>
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

    <section id="servicios" class="servicios">
        <div class="imagen_fondo">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 servicio">
                        <i class="bi bi-gear"></i> <h3>Asesoramiento Personalizado</h3>
                        <p>Te ayudamos a elegir las mejores <br>soluciones para tus espacios.</p>
                    </div>
                    <div class="col-md-4 servicio">
                        <i class="bi bi-tools"></i> <h3>Servicio Postventa</h3>
                        <p>Garantizamos tu satisfacción <br>con un excelente servicio postventa.</p>
                    </div>
                    <div class="col-md-4 servicio">
                        <i class="bi bi-house-door"></i> <h3>Fabricamos e Instalamos a Medida</h3>
                        <p>Creamos aberturas personalizadas<br> para tus necesidades.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- <section id="productos" class="seccion">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="producto-item" onclick="window.location='{{ url('/aberturas-aluminio') }}';">
                        <img src="{{ asset('Images/sampa_aluminio.jpeg') }}" alt="Aberturas de Aluminio" class="img-fluid rounded">
                        <div class="overlay">
                            <p>ABERTURAS<br>DE ALUMINIO</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="producto-item" onclick="window.location='{{ url('/puertas-placa') }}';">
                        <img src="{{ asset('Images/sampa_placa.jpg') }}" alt="Puertas Placas" class="img-fluid rounded">
                        <div class="overlay">
                            <p>PUERTAS<br>PLACAS</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="producto-item" onclick="window.location='{{ url('/mamparas') }}';">
                        <img src="{{ asset('Images/sampa_mampara.jpg') }}" alt="Mamparas" class="img-fluid rounded">
                        <div class="overlay">
                            <p>MAMPARAS<br>PARA BAÑO</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="producto-item" onclick="window.location='{{ url('/mosquiteros') }}';">
                        <img src="{{ asset('Images/sampa_mosquitero.jpeg') }}" alt="Mosquiteros" class="img-fluid rounded">
                        <div class="overlay">
                            <p>MOSQUITEROS</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="producto-item" onclick="window.location='{{ url('/herrajes') }}';">
                        <img src="{{ asset('Images/sampa_herrajes.jpeg') }}" alt="Herrajes" class="img-fluid rounded">
                        <div class="overlay">
                            <p>HERRAJES</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="producto-item" onclick="window.location='{{ url('/perfileria') }}';">
                        <img src="{{ asset('Images/sampa_perfileria.jpg') }}" alt="Perfilería" class="img-fluid rounded">
                        <div class="overlay">
                            <p>PERFILERÍA</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
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