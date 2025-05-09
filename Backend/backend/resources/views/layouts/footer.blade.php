<footer class="footer text-light py-4 py-lg-5">
    <div class="container">
        <div class="row text-center text-md-start align-items-start">
            <!-- Logo - Versión optimizada -->
            <div class="col-12 col-md-3 mb-4 mb-md-0 footer-logo-container">
                <img src="{{ asset('Images/Sampa_Logo.jpg') }}" 
                    alt="Logo Sampa Aberturas" 
                    class="img-fluid footer-logo"
                    loading="lazy">
            </div>

            <!-- Navegación -->
            <div class="col-12 col-md-3 mb-4 mb-md-0">
                <h5 class="mb-2 fw-bold text-uppercase text-green">Navegación</h5>
                <ul class="list-unstyled">
                    <li class="nav-item mb-2"><a class="nav-link d-inline-block" href="{{ url('/home') }}">Inicio</a></li>
                    <li class="nav-item mb-2"><a class="nav-link d-inline-block" href="{{ url('/obras') }}">Obras</a></li>
                    <li class="nav-item mb-2"><a class="nav-link d-inline-block" href="{{ url('/outlet') }}">Tienda</a></li>
                    <li class="nav-item mb-2"><a class="nav-link d-inline-block" href="{{ url('/nosotros') }}">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link d-inline-block" href="{{ url('/contacto') }}">Contacto</a></li>
                </ul>
            </div>

            <!-- Contacto -->
            <div class="col-12 col-md-3 mb-4 mb-md-0">
                <h5 class="mb-2 fw-bold text-uppercase text-green">Contacto</h5>
                <address class="mb-0">
                    <p class="mb-2"><i class="bi bi-geo-alt-fill text-green me-2"></i>San Lucas 235, Córdoba</p>
                    <p class="mb-2"><i class="bi bi-telephone-fill text-green me-2"></i>+54 351 123 4567</p>
                    <p class="mb-0"><i class="bi bi-envelope-fill text-green me-2"></i>info@sampaaberturas.com</p>
                </address>
            </div>

            <!-- Redes Sociales -->
            <div class="col-12 col-md-3 mb-4 mb-md-0">
                <h5 class="mb-2 fw-bold text-uppercase text-green">Síguenos</h5>
                <div class="d-flex justify-content-center justify-content-md-start gap-3 social-icons">
                    <a href="https://www.facebook.com/profile.php?id=100063444205455" target="_blank" class="text-light" aria-label="Facebook">
                        <i class="bi bi-facebook fs-4"></i>
                    </a>
                    <a href="https://www.instagram.com/sampaaberturas/" target="_blank" class="text-light" aria-label="Instagram">
                        <i class="bi bi-instagram fs-4"></i>
                    </a>
                    <a href="https://wa.me/5493572666666" target="_blank" class="text-light" aria-label="WhatsApp">
                        <i class="bi bi-whatsapp fs-4"></i>
                    </a>
                    <a href="https://maps.app.goo.gl/rQCjw4VXtCsv2WxG9" target="_blank" class="text-light" aria-label="Ubicación" title="Nuestra ubicación">
                        <i class="bi bi-geo-alt fs-4"></i>
                    </a>
                </div>
                
                <!-- Horario de atención -->
                <div class="mt-4 pt-2">
                    <h6 class="fw-bold mb-2">Horario</h6>
                    <p class="small mb-0">Lunes a Viernes: 8:30 - 13:00 / 15:00 - 19:00</p>
                    <p class="small">Sábados: 9:00 - 13:00</p>
                </div>
            </div>
        </div>

        <hr class="my-4 bg-light opacity-25">

        <!-- Copyright -->
        <div class="text-center mt-3 pt-2">
            <p class="mb-0 small">
                © {{ date('Y') }} Sampa Aberturas S.R.L. - Todos los derechos reservados.
                <span class="d-block d-md-inline mt-1 mt-md-0">Desarrollado por <a href="#" class="text-green text-decoration-none">TuAgencia</a></span>
            </p>
        </div>
    </div>
</footer>

@section('styles')
<style>
/* ===== ESTILOS GENERALES DEL FOOTER ===== */
.footer {
    background-color: rgb(49, 146, 85);
    color: #2a2a2a;
    position: relative;
    font-size: 0.95rem;
}

.footer a {
    text-decoration: none;
    transition: all 0.3s ease;
}

/* ===== CONTENEDOR DEL LOGO ===== */
.footer-logo-container {
    display: flex;
    align-items: flex-start; /* Alinear el logo con los títulos */
    justify-content: center;
    padding: 0.5rem 0;
}

/* ===== ESTILOS DEL LOGO ===== */
.footer-logo {
    max-width: 180px;
    max-height: 80px;
    width: auto;
    height: auto;
    object-fit: contain;
    transition: all 0.3s ease;
    filter: brightness(0) invert(1); /* Convierte el logo a blanco */
}

/* ===== TÍTULOS ===== */
.footer h5 {
    font-size: 1.1rem;
    line-height: 1.4;
    margin-top: 0.5rem; /* Ajuste fino para alineación */
}

/* ===== ENLACES DE NAVEGACIÓN ===== */
.footer .nav-link {
    color: rgba(255, 255, 255, 0.7);
    padding: 0.3rem 0;
    position: relative;
    display: inline-block;
    font-size: 0.9rem;
}

.footer .nav-link::before {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 0;
    height: 1px;
    background-color: rgb(49, 146, 85);
    transition: width 0.3s ease;
}

.footer .nav-link:hover {
    color: white;
}

.footer .nav-link:hover::before {
    width: 100%;
}

/* ===== ICONOS DE CONTACTO ===== */
.footer .bi {
    margin-right: 0.75rem;
}

.footer .text-green {
    color: rgb(49, 146, 85);
}

/* ===== REDES SOCIALES ===== */
.footer .social-icons a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.1);
    transition: all 0.3s ease;
}

.footer .social-icons a:hover {
    background-color: rgb(49, 146, 85);
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* ===== COPYRIGHT ===== */
.footer .small {
    font-size: 0.85rem;
    color: rgba(255, 255, 255, 0.6);
}

/* ===== MEDIA QUERIES ===== */

/* Tablet en vertical y móviles grandes */
@media (max-width: 991.98px) {
    .footer {
        text-align: center;
    }
    
    .footer-logo-container {
        justify-content: center;
        margin-bottom: 1.5rem;
    }
    
    .footer-logo {
        max-width: 140px;
        max-height: 60px;
    }
    
    .footer .row > div {
        margin-bottom: 2rem;
    }
    
    .footer .row > div:last-child {
        margin-bottom: 0;
    }
    
    .footer .social-icons {
        justify-content: center !important;
    }
    
    .footer .text-md-start {
        text-align: center !important;
    }
    
    .footer h5 {
        margin-top: 0;
    }
}

/* Móviles pequeños */
@media (max-width: 575.98px) {
    .footer-logo {
        max-width: 120px;
        max-height: 50px;
    }
    
    .footer .social-icons a {
        width: 32px;
        height: 32px;
        font-size: 1rem;
    }
    
    .footer h5 {
        font-size: 1rem;
    }
}

/* Desktop */
@media (min-width: 992px) {
    .footer-logo {
        max-width: 180px;
        max-height: 80px;
    }
    
    .footer-logo-container {
        justify-content: flex-start;
        padding-left: 0;
    }
}

/* Efectos hover solo en dispositivos con capacidad hover */
@media (hover: hover) {
    .footer-logo:hover {
        transform: scale(1.05);
        filter: none;
    }
}

/* Pantallas retina */
@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) { 
    .footer-logo {
        background-image: url('{{ asset('Images/Sampa_Logo@2x.jpg') }}');
        background-size: contain;
        background-repeat: no-repeat;
    }
}
</style>
@endsection

@section('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Efecto de aparición gradual del footer
    const footer = document.querySelector('.footer');
    footer.style.opacity = '0';
    footer.style.transition = 'opacity 0.6s ease';
    
    setTimeout(() => {
        footer.style.opacity = '1';
    }, 300);
});
</script>
@endsection
