@extends('layouts.app')

@section('title', 'Sampa - Contacto')

@section('content')
    <main class="container contact-section">
        <div>
            <hr class="bg-success-light">
            <h1>Contacto</h1>
            <hr class="bg-light">
        </div>
        <form action="#" method="POST" class="shadow-lg p-4 bg-white rounded formulario-contacto" autocomplete="on">
            <fieldset>
                <legend>Información de Contacto</legend>
                <div class="form-floating mb-3">
                    <input type="text" id="firstName" class="form-control" name="firstName" placeholder="Ingresa tu nombre" required>
                    <label for="firstName"><i class="bi bi-person"></i> Nombre</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" id="lastName" class="form-control" name="lastName" placeholder="Ingresa tu apellido" required>
                    <label for="lastName"><i class="bi bi-person"></i> Apellido</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" id="email" class="form-control" name="email" placeholder="Ingresa tu correo electrónico" required>
                    <label for="email"><i class="bi bi-envelope"></i> Correo Electrónico</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="text" id="subject" class="form-control" name="subject" placeholder="Ingresa el asunto" required>
                    <label for="subject"><i class="bi bi-chat-left-text"></i> Asunto</label>
                </div>
                <div class="form-floating mb-3">
                    <textarea id="message" class="form-control" name="message" rows="4" placeholder="¿Cómo te podemos ayudar?" required></textarea>
                    <label for="message"><i class="bi bi-pencil"></i> Mensaje</label>
                </div>
                <div class="mb-3">
                    <label for="fileUpload" class="form-label"><i class="bi bi-upload"></i> Cargar Planilla de Aberturas</label>
                    <input class="form-control" type="file" id="fileUpload" name="fileUpload">
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-send btn-block">Enviar</button>
                </div>
            </fieldset>
        </form>
    </main>
@endsection