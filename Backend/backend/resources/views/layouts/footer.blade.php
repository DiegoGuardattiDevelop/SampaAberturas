<footer class="footer footer-custom text-light py-4 py-lg-5">
    <div class="container">
        <div class="row text-center text-md-start align-items-start">
            <!-- Logo - Versión optimizada -->
            <div class="col-12 col-md-3 mb-4 mb-md-0 footer-logo-container-custom">
                <img src="{{ asset('Images/Sampa_Logo.jpg') }}" 
                    alt="Logo Sampa Aberturas" 
                    class="img-fluid footer-logo-custom"
                    loading="lazy">
            </div>

            <!-- Navegación -->
            <div class="col-12 col-md-2 mb-3 mb-md-0">
                <h5 class="mb-2 fw-bold text-uppercase text-green-custom">Navegación</h5>
                <ul class="list-unstyled d-flex flex-column" style="gap: 3px;"> {{-- Aquí el cambio --}}
                    <li class="nav-item"><a class="nav-link d-inline-block" href="{{ url('/home') }}">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link d-inline-block" href="{{ url('/obras') }}">Obras</a></li>
                    <li class="nav-item"><a class="nav-link d-inline-block" href="{{ url('/outlet') }}">Tienda</a></li>
                    <li class="nav-item"><a class="nav-link d-inline-block" href="{{ url('/nosotros') }}">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link d-inline-block" href="{{ url('/contacto') }}">Contacto</a></li>
                </ul>
            </div>

            <!-- Contacto -->
            <div class="col-12 col-md-3 mb-4 mb-md-0">
                <h5 class="mb-2 fw-bold text-uppercase text-green-custom">Contacto</h5>
                <address class="mb-0">
                    <p class="mb-2"><i class="bi bi-geo-alt-fill text-green-custom me-2"></i>San Lucas 235, Córdoba</p>
                    <p class="mb-2"><i class="bi bi-telephone-fill text-green-custom me-2"></i>+54 351 123 4567</p>
                    <p class="mb-0"><i class="bi bi-envelope-fill text-green-custom me-2"></i>info@sampaaberturas.com</p>
                </address>
            </div>

            <!-- Redes Sociales -->
            <div class="col-12 col-md-3 mb-4 mb-md-0">
                <h5 class="mb-2 fw-bold text-uppercase text-green-custom">Síguenos</h5>
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
                <span class="d-block d-md-inline mt-1 mt-md-0">Desarrollado por <a href="#" class="text-green-custom text-decoration-none">TuAgencia</a></span>
            </p>
        </div>
    </div>
</footer>
