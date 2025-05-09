@extends('layouts.app')

@section('title', 'Sampa - Contacto')

@section('content')
    <main class="container contact-section">
        <!-- Hero Header -->
    <div class="hero-header bg-gradient-green rounded-4 p-2 mb-5 text-white position-relative overflow-hidden">
        <div class="bg-overlay"></div>
        <div class="position-relative z-index-1 text-center">
            <hr class="bg-white-light">
            <h1 class="display-4 fw-bold">Contacto</h1>
            <p class="lead">Estamos aquí para ayudarte con tu proyecto</p>
            <hr class="bg-white-light">
        </div>
    </div>
    
    <!-- Formulario de Contacto -->
    <section class="section-card bg-section-soft rounded-4 p-5 mb-5" data-aos="fade-up">
        <div class="section-header mb-4 text-center">
            <h2 class="fw-bold text-gradient-green">¿En qué podemos ayudarte?</h2>
            <p class="text-muted">Completa el formulario y nos pondremos en contacto contigo</p>
        </div>
        <form action="#" method="POST" class="needs-validation" novalidate enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <!-- Nombre -->
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Nombre" required>
                        <label for="firstName"><i class="bi bi-person me-2 text-green"></i> Nombre</label>
                        <div class="invalid-feedback">
                            Por favor ingresa tu nombre
                        </div>
                    </div>
                </div>
                
                <!-- Apellido -->
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Apellido" required>
                        <label for="lastName"><i class="bi bi-person me-2 text-green"></i> Apellido</label>
                        <div class="invalid-feedback">
                            Por favor ingresa tu apellido
                        </div>
                    </div>
                </div>
                
                <!-- Email -->
                <div class="col-12">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico" required>
                        <label for="email"><i class="bi bi-envelope me-2 text-green"></i> Correo Electrónico</label>
                        <div class="invalid-feedback">
                            Por favor ingresa un email válido
                        </div>
                    </div>
                </div>
                
                <!-- Asunto -->
                <div class="col-12">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Asunto" required>
                        <label for="subject"><i class="bi bi-chat-left-text me-2 text-green"></i> Asunto</label>
                        <div class="invalid-feedback">
                            Por favor ingresa el asunto
                        </div>
                    </div>
                </div>
                
                <!-- Mensaje -->
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" id="message" name="message" placeholder="Mensaje" style="height: 150px" required></textarea>
                        <label for="message"><i class="bi bi-pencil me-2 text-green"></i> Mensaje</label>
                        <div class="invalid-feedback">
                            Por favor ingresa tu mensaje
                        </div>
                    </div>
                </div>
                
                <!-- Archivo -->
                <div class="col-12">
                    <div class="file-upload-container">
                        <label for="fileUpload" class="form-label">
                            <i class="bi bi-paperclip me-2 text-green"></i> Adjuntar planilla de aberturas (opcional)
                        </label>
                        <input class="form-control" type="file" id="fileUpload" name="fileUpload">
                        <small class="text-muted">Formatos aceptados: PDF, JPG, PNG (Max. 5MB)</small>
                    </div>
                </div>
                
                <!-- Botón de envío -->
                <div class="col-12 text-center mt-4">
                    <button class="btn btn-send btn-lg px-5" type="submit">
                        <i class="bi bi-send-fill me-2"></i> Enviar Mensaje
                    </button>
                </div>
            </div>
        </form>
    </section>
</main>
@endsection

@section('styles')
<style>
    /* Estilos específicos para contacto */
    .contact-card {
        border-top: 5px solid rgb(49, 146, 85);
        transition: all 0.3s ease;
    }
    
    .contact-card:hover {
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        transform: translateY(-5px);
    }
    
    .file-upload-container {
        border: 2px dashed rgba(49, 146, 85, 0.3);
        border-radius: 8px;
        padding: 20px;
        text-align: center;
        transition: all 0.3s ease;
    }
    
    .file-upload-container:hover {
        border-color: rgba(49, 146, 85, 0.6);
        background-color: rgba(49, 146, 85, 0.05);
    }
    
    .info-card {
        transition: all 0.3s ease;
    }
    
    .info-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }
    
    .icon-container {
        width: 60px;
        height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .bg-green-soft {
        background-color: rgba(49, 146, 85, 0.1);
    }
    
    /* Validación de formulario */
    .was-validated .form-control:invalid,
    .form-control.is-invalid {
        border-color: #dc3545;
        padding-right: calc(1.5em + 0.75rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right calc(0.375em + 0.1875rem) center;
        background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }
    
    .was-validated .form-control:valid,
    .form-control.is-valid {
        border-color: #198754;
        padding-right: calc(1.5em + 0.75rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right calc(0.375em + 0.1875rem) center;
        background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
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
</style>
@endsection

@section('scripts')
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // Inicializar animaciones
    AOS.init({
        duration: 800,
        once: true,
        easing: 'ease-out-back'
    });
    
    // Validación de formulario
    (function() {
        'use strict'
        
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')
        
        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }
                    
                    form.classList.add('was-validated')
                }, false)
            })
    })()
</script>
@endsection