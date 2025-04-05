{{-- <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obras | Sampa Aberturas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('style.css')}}">
</head>
<body>
    <div class="page-container">
        <header class="hero">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid navbar-container">
                    <a href="#" class="logo">
                        <img src="asset/Sampa_Logo_Livianno.png" alt="Tu Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- Menú offcanvas -->
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item"><a class="nav-link fw-bold fs-6" href="index.html">Inicio</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link fw-bold fs-6 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Productos
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="aberturas_aluminio.html">Aberturas de aluminio</a></li>
                                    <li><a class="dropdown-item" href="Puertas_placa.html">Puertas placas</a></li>
                                    <li><a class="dropdown-item" href="mamparas.html">Mamparas</a></li>
                                    <li><a class="dropdown-item" href="mosquiteros.html">Mosquiteros</a></li>
                                    <li><a class="dropdown-item" href="herrajes.html">Herrajes</a></li>
                                    <li><a class="dropdown-item" href="perfileria.html">Perfileria</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link fw-bold fs-6 active" href="#">Obras</a></li>
                            <li class="nav-item"><a class="nav-link fw-bold fs-6" href="outlet.html">Outlet</a></li>
                            <li class="nav-item"><a class="nav-link fw-bold fs-6" href="nosotros.html">Nosotros</a></li>
                            <li class="nav-item"><a class="nav-link fw-bold fs-6" href="contacto.html">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header> --}}
        @include('header_views')
        <main class="content obras-gallery">
            <section class="gallery">
                <div>
                    <hr class="bg-sucess-light">
                    <h1>Nuestros trabajos</h1>
                    <hr class="bg-light">
                </div>
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
                            <div class="card">
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
                            <div class="card">
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
                            <div class="card">
                                <div class="card-body">
                                    <div class="obra-images">
                                        <img src="{{ asset('Images/sampa_obra_4.jpg') }}" alt="Obra 1-1" class="obra-image active">
                                        <img src="{{ asset('Images/sampa_obra_4a.jpg') }}"  class="obra-image">
                                        <img src="{{ asset('Images/sampa_obra_4b.jpg') }}"  class="obra-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 obra-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="obra-images">
                                        <img src="{{ asset('Images/sampa_obra_5.jpg') }}"  alt="Obra 1-1" class="obra-image active">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 obra-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="obra-images">
                                        <img src="{{ asset('Images/sampa_obra_6.jpg') }}" alt="Obra 1-1" class="obra-image active">
                                        <img src="{{ asset('Images/sampa_obra_6a.jpg') }}"  alt="Obra 1-2" class="obra-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        @include('footer')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Función para cambiar el color del navbar al hacer scroll
        document.addEventListener('DOMContentLoaded', function() {
            window.addEventListener('scroll', function() {
                var navbar = document.querySelector('.navbar');
                
                // Agregar clase al hacer scroll (puedes ajustar el valor 50 según prefieras)
                if (window.scrollY > 50) {
                    navbar.classList.add('navbar-scrolled');
                } else {
                    navbar.classList.remove('navbar-scrolled');
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const obraCards = document.querySelectorAll('.obra-card');
    
            obraCards.forEach(card => {
                let images = card.querySelectorAll('.obra-image');
                let currentIndex = 0;
                let interval;
    
                // Función para mostrar la imagen actual con transición suave
                function showImage(index) {
                    images.forEach((img, i) => {
                        img.classList.remove('active');
                        if (i === index) {
                            img.classList.add('active');
                        }
                    });
                }
    
                // Función para iniciar el pase de imágenes
                function startSlideshow() {
                    if (images.length > 1) {
                        interval = setInterval(() => {
                            currentIndex = (currentIndex + 1) % images.length;
                            showImage(currentIndex);
                        }, 2000); // Cambia cada 2 segundos
                    }
                }
    
                // Función para detener el pase de imágenes
                function stopSlideshow() {
                    clearInterval(interval);
                }
    
                // Eventos para iniciar y detener el pase de imágenes
                card.addEventListener('mouseenter', startSlideshow);
                card.addEventListener('mouseleave', stopSlideshow);
    
                // Inicia mostrando la primera imagen
                showImage(currentIndex);
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const obraCards = document.querySelectorAll('.obra-card');
            
            // Elementos del modal (fuera del loop para mejor rendimiento)
            const modalTitle = document.getElementById('obraModalLabel');
            const modalLocation = document.getElementById('obraModalLocation');
            const modalType = document.getElementById('obraModalType');
            const modalColor = document.getElementById('obraModalColor');
            const modalStudio = document.getElementById('obraModalStudio');
            const modalDate = document.getElementById('obraModalDate');
            const modalAdditional = document.getElementById('obraModalAdditional');
            const obraModalImages = document.getElementById('obraModalImages');
            const carouselIndicators = document.getElementById('carouselIndicators');
            
            // Función para manejar el carrusel en las tarjetas
            obraCards.forEach(card => {
                // Implementación del slideshow en las tarjetas
                let images = card.querySelectorAll('.obra-image');
                let currentIndex = 0;
                let interval;
        
                function showImage(index) {
                    images.forEach((img, i) => {
                        img.classList.remove('active');
                        if (i === index) {
                            img.classList.add('active');
                        }
                    });
                }
        
                function startSlideshow() {
                    if (images.length > 1) {
                        interval = setInterval(() => {
                            currentIndex = (currentIndex + 1) % images.length;
                            showImage(currentIndex);
                        }, 2000);
                    }
                }
        
                function stopSlideshow() {
                    clearInterval(interval);
                }
        
                card.addEventListener('mouseenter', startSlideshow);
                card.addEventListener('mouseleave', stopSlideshow);
                showImage(currentIndex);
                
                // Configurar el evento de clic para abrir el modal
                const cardElement = card.querySelector('.card');
                if (cardElement) {
                    cardElement.addEventListener('click', function() {
                        // Comprobar si la tarjeta tiene datos JSON
                        const obraDataAttr = card.getAttribute('data-obra');
                        let obraData;
                        
                        if (obraDataAttr) {
                            try {
                                obraData = JSON.parse(obraDataAttr);
                            } catch (error) {
                                console.error('Error al parsear datos JSON:', error);
                                return;
                            }
                            
                            // Actualizar el contenido del modal con los datos de la obra
                            modalTitle.innerText = obraData.titulo || 'Título no disponible';
                            modalLocation.innerHTML = `<strong>Lugar:</strong> ${obraData.lugar || 'No especificado'}`;
                            modalType.innerHTML = `<strong>Tipología:</strong> ${obraData.tipologia || 'No especificada'}`;
                            modalColor.innerHTML = `<strong>Color/Tratamiento:</strong> ${obraData.color || 'No especificado'}`;
                            modalStudio.innerHTML = `<strong>Estudio:</strong> ${obraData.estudio || 'No especificado'}`;
                            modalDate.innerHTML = `<strong>Fecha:</strong> ${obraData.fecha || 'No especificada'}`;
                            modalAdditional.innerHTML = `<strong>Detalles:</strong> ${obraData.detalles || 'No hay detalles disponibles'}`;
                            
                        } else {
                            // Si no hay datos JSON, usar información básica
                            const mainImage = card.querySelector('.obra-image.active');
                            const imgAlt = mainImage ? mainImage.getAttribute('alt') : 'Obra';
                            
                            modalTitle.innerText = imgAlt || 'Obra';
                            modalLocation.innerHTML = '<strong>Lugar:</strong> No especificado';
                            modalType.innerHTML = '<strong>Tipología:</strong> No especificada';
                            modalColor.innerHTML = '<strong>Color/Tratamiento:</strong> No especificado';
                            modalStudio.innerHTML = '<strong>Estudio:</strong> No especificado';
                            modalDate.innerHTML = '<strong>Fecha:</strong> No especificada';
                            modalAdditional.innerHTML = '<strong>Detalles:</strong> No hay detalles disponibles';
                        }
                        
                        // Limpiar las imágenes del carrusel antes de agregar nuevas
                        obraModalImages.innerHTML = '';
                        carouselIndicators.innerHTML = '';
                        
                        // Obtener todas las imágenes de la tarjeta para el carrusel
                        const cardImages = card.querySelectorAll('.obra-image');
                        
                        if (cardImages && cardImages.length > 0) {
                            cardImages.forEach((img, index) => {
                                const imgSrc = img.getAttribute('src');
                                const isActive = index === 0 ? 'active' : '';
                                
                                // Crear el item del carrusel
                                const carouselItem = document.createElement('div');
                                carouselItem.classList.add('carousel-item');
                                if (index === 0) carouselItem.classList.add('active');
                                
                                // Crear la etiqueta <img>
                                const imgElement = document.createElement('img');
                                imgElement.classList.add('d-block', 'w-100');
                                imgElement.src = imgSrc;
                                imgElement.alt = `Imagen ${index + 1}`;
                                
                                // Agregar la imagen al item del carrusel
                                carouselItem.appendChild(imgElement);
                                obraModalImages.appendChild(carouselItem);
                                
                                // Crear indicador
                                const indicator = document.createElement('button');
                                indicator.type = 'button';
                                indicator.dataset.bsTarget = '#obraModalCarousel';
                                indicator.dataset.bsSlideTo = index.toString();
                                if (index === 0) indicator.classList.add('active');
                                indicator.setAttribute('aria-label', `Diapositiva ${index + 1}`);
                                
                                carouselIndicators.appendChild(indicator);
                            });
                            
                            // Crear un nuevo carrusel de Bootstrap después de añadir las imágenes
                            // Esto asegura que los controles funcionen correctamente
                            const myCarousel = document.getElementById('obraModalCarousel');
                            const carousel = new bootstrap.Carousel(myCarousel, {
                                interval: 5000,
                                wrap: true
                            });
                        }
                        
                        // Abrir el modal
                        const obraModal = new bootstrap.Modal(document.getElementById('obraModal'));
                        obraModal.show();
                    });
                }
            });
        });
        </script>
    
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
    
                    <!-- Indicadores del carrusel (puntos de navegación) -->
                    <div class="carousel-indicators position-relative mt-2" id="carouselIndicators">
                        <!-- Se generarán dinámicamente -->
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




</body>
</html>