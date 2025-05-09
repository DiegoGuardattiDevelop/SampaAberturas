
@extends('layouts.app')

@section('title', 'Sampa - Perfileria')

@section('content') 
    <main class="container mt-5"">
        <div class="hero-header bg-gradient-green rounded-4 p-2 mb-5 text-white position-relative overflow-hidden">
            <div class="bg-overlay"></div>
            <div class="position-relative z-index-1 text-center">
                <hr class="bg-white-light">
                <h1 class="display-4 fw-bold">Obras</h1>
                <p class="lead">Lo que hacemos habla por nosotros</p>
                <hr class="bg-white-light">
            </div>
        </div>
        <section class="gallery">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 obra-card" data-obra='{
                        "titulo": "Obra 1",
                        "lugar": "Buenos Aires, Argentina",
                        "tipologia": "Residencial",
                        "color": "Blanco y madera",
                        "estudio": "Estudio XYZ",
                        "fecha": "2021-05",
                        "detalles": "Proyecto de remodelación completa con detalles modernos en el interior y exteriores.",
                        "imagen": "{{ asset('Images/sampa_obra_1.jpg') }}"
                    }'>
                        <div class="card" data-bs-toggle="modal" data-bs-target="#obraModal">
                            <div class="card-body">
                                <div class="obra-images">
                                    <img src="{{ asset('Images/sampa_obra_1.jpg') }}" alt="Obra 1" class="obra-image active">
                                    <img src="{{ asset('Images/sampa_obra_1a.jpg') }}" alt="Obra 1" class="obra-image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 obra-card">
                        <div class="card" data-bs-toggle="modal" data-bs-target="#obraModal">
                            <div class="card-body">
                                <div class="obra-images">
                                    <img src="{{ asset('Images/sampa_obra_2.jpg') }}" class="obra-image active">
                                    <img src="{{ asset('Images/sampa_obra_2a.jpg') }}" class="obra-image">
                                    <img src="{{ asset('Images/sampa_obra_2b.jpg') }}" class="obra-image">
                                    <img src="{{ asset('Images/sampa_obra_2c.jpg') }}" class="obra-image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 obra-card">
                        <div class="card" data-bs-toggle="modal" data-bs-target="#obraModal">
                            <div class="card-body">
                                <div class="obra-images">
                                    <img src="{{ asset('Images/sampa_obra_3.jpg') }}" class="obra-image active">
                                    <img src="{{ asset('Images/sampa_obra_3a.jpg') }}" class="obra-image">
                                    <img src="{{ asset('Images/sampa_obra_3b.jpg') }}" class="obra-image">
                                    <img src="{{ asset('Images/sampa_obra_3c.jpg') }}" class="obra-image">
                                    <img src="{{ asset('Images/sampa_obra_3d.jpg') }}" class="obra-image">
                                    <img src="{{ asset('Images/sampa_obra_3e.jpg') }}" class="obra-image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 obra-card">
                        <div class="card" data-bs-toggle="modal" data-bs-target="#obraModal">
                            <div class="card-body">
                                <div class="obra-images">
                                    <img src="{{ asset('Images/sampa_obra_4.jpg') }}" alt="Obra 4" class="obra-image active">
                                    <img src="{{ asset('Images/sampa_obra_4a.jpg') }}" class="obra-image">
                                    <img src="{{ asset('Images/sampa_obra_4b.jpg') }}" class="obra-image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 obra-card">
                        <div class="card" data-bs-toggle="modal" data-bs-target="#obraModal">
                            <div class="card-body">
                                <div class="obra-images">
                                    <img src="{{ asset('Images/sampa_obra_5.jpg') }}" alt="Obra 5" class="obra-image active">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 obra-card">
                        <div class="card" data-bs-toggle="modal" data-bs-target="#obraModal">
                            <div class="card-body">
                                <div class="obra-images">
                                    <img src="{{ asset('Images/sampa_obra_6.jpg') }}" alt="Obra 6" class="obra-image active">
                                    <img src="{{ asset('Images/sampa_obra_6a.jpg') }}" alt="Obra 6" class="obra-image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- Modal para mostrar detalles de la obra -->
    <div class="modal fade" id="obraModal" tabindex="-1" aria-labelledby="obraModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="obraModalLabel">Título de la obra</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Carrusel de imágenes -->
                    <div id="obraModalCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators" id="carouselIndicators">
                            <!-- Se generarán dinámicamente -->
                        </div>
                        <div class="carousel-inner" id="obraModalImages">
                            <!-- Las imágenes se cargarán dinámicamente aquí -->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#obraModalCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Anterior</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#obraModalCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Siguiente</span>
                        </button>
                    </div>

                    <!-- Información adicional de la obra -->
                    <div class="obra-info mt-4">
                        <p id="obraModalLocation"><strong>Lugar:</strong> Ciudad, País</p>
                        <p id="obraModalType"><strong>Tipología:</strong> Tipología de la obra</p>
                        <p id="obraModalColor"><strong>Color o Tratamiento:</strong> Detalles sobre el color y tratamiento usado</p>
                        <p id="obraModalStudio"><strong>Estudio de Arquitectura:</strong> Nombre del estudio</p>
                        <p id="obraModalDate"><strong>Fecha de Ejecución:</strong> Año-Mes</p>
                        <p id="obraModalAdditional"><strong>Detalles adicionales:</strong> Información complementaria</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Referencias a elementos DOM
        const obraCards = document.querySelectorAll('.obra-card');
        const modalEl = document.getElementById('obraModal');
        const modal = new bootstrap.Modal(modalEl);
        
        // Elementos del modal
        const modalTitle = document.getElementById('obraModalLabel');
        const modalLocation = document.getElementById('obraModalLocation');
        const modalType = document.getElementById('obraModalType');
        const modalColor = document.getElementById('obraModalColor');
        const modalStudio = document.getElementById('obraModalStudio');
        const modalDate = document.getElementById('obraModalDate');
        const modalAdditional = document.getElementById('obraModalAdditional');
        const obraModalImages = document.getElementById('obraModalImages');
        const carouselIndicators = document.getElementById('carouselIndicators');
        const closeButton = modalEl.querySelector('.btn-close');
        
        // Slideshow en tarjetas
        obraCards.forEach(card => {
            const images = card.querySelectorAll('.obra-image');
            if (images.length <= 1) return;
            
            // Mostrar la primera imagen
            images[0].classList.add('active');
            
            // Configurar hover para slideshow
            let slideInterval;
            let currentIndex = 0;
            
            function nextSlide() {
                images[currentIndex].classList.remove('active');
                currentIndex = (currentIndex + 1) % images.length;
                images[currentIndex].classList.add('active');
            }
            
            card.addEventListener('mouseenter', function() {
                slideInterval = setInterval(nextSlide, 2000);
            });
            
            card.addEventListener('mouseleave', function() {
                clearInterval(slideInterval);
            });
            
            // Evento click para abrir modal
            const cardDiv = card.querySelector('.card');
            if (cardDiv) {
                cardDiv.addEventListener('click', function() {
                    updateModal(card);
                    modal.show();
                });
            }
        });
        
        // Mejorar manejo del cierre del modal
        if (closeButton) {
            closeButton.addEventListener('click', function(e) {
                e.preventDefault();
                // Quitar el foco del botón antes de cerrar
                closeButton.blur();
                modal.hide();
            });
        }
        
        // Configurar evento modal
        if (modalEl) {
            modalEl.addEventListener('hidden.bs.modal', function() {
                // Limpiar carrusel al cerrar
                if (obraModalImages) obraModalImages.innerHTML = '';
                if (carouselIndicators) carouselIndicators.innerHTML = '';
                
                // Asegurarse de que todos los elementos pierdan el foco
                document.activeElement.blur();
            });
        }
        
        // Función para actualizar el modal
        function updateModal(card) {
            // Obtener datos de obra
            let obraData = {};
            try {
                const dataAttr = card.getAttribute('data-obra');
                if (dataAttr) {
                    obraData = JSON.parse(dataAttr);
                }
            } catch (e) {
                console.error('Error parsing JSON:', e);
            }
            
            // Actualizar contenido
            modalTitle.textContent = obraData.titulo || 'Obra';
            modalLocation.innerHTML = `<strong>Lugar:</strong> ${obraData.lugar || 'No especificado'}`;
            modalType.innerHTML = `<strong>Tipología:</strong> ${obraData.tipologia || 'No especificada'}`;
            modalColor.innerHTML = `<strong>Color/Tratamiento:</strong> ${obraData.color || 'No especificado'}`;
            modalStudio.innerHTML = `<strong>Estudio:</strong> ${obraData.estudio || 'No especificado'}`;
            modalDate.innerHTML = `<strong>Fecha:</strong> ${obraData.fecha || 'No especificada'}`;
            modalAdditional.innerHTML = `<strong>Detalles:</strong> ${obraData.detalles || 'No hay detalles disponibles'}`;
            
            // Limpiar carrusel
            obraModalImages.innerHTML = '';
            carouselIndicators.innerHTML = '';
            
            // Crear carrusel
            const images = card.querySelectorAll('.obra-image');
            images.forEach((img, index) => {
                // Crear indicador
                const button = document.createElement('button');
                button.type = 'button';
                button.dataset.bsTarget = '#obraModalCarousel';
                button.dataset.bsSlideTo = String(index);
                if (index === 0) button.classList.add('active');
                button.setAttribute('aria-label', `Slide ${index + 1}`);
                carouselIndicators.appendChild(button);
                
                // Crear slide
                const slide = document.createElement('div');
                slide.classList.add('carousel-item');
                if (index === 0) slide.classList.add('active');
                
                const imgElement = document.createElement('img');
                imgElement.classList.add('d-block', 'w-100');
                imgElement.src = img.src;
                imgElement.alt = img.alt || `Imagen ${index + 1}`;
                
                slide.appendChild(imgElement);
                obraModalImages.appendChild(slide);
            });
        }
    });
    </script>
@endpush

