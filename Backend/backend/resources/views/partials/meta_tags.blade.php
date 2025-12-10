@php
// Valores por defecto para meta tags
$title = $title ?? 'Sampa Aberturas - Fabricación de aberturas de aluminio';
$description = $description ?? 'Sampa Aberturas - Fabricación e instalación profesional de aberturas de aluminio, puertas placas, mamparas y mosquiteros. Más de 15 años de experiencia con garantía extendida.';
$image = $image ?? asset('Images/Sampa_Logo.jpg');
$url = $url ?? url()->current();
$type = $type ?? 'website';
@endphp

<!-- Meta tags básicos -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="{{ $description }}">
<meta name="keywords" content="aberturas de aluminio, puertas placas, mamparas, mosquiteros, fabricación de aberturas, instalación de aberturas, aluminio, herrajes, perfilería">
<meta name="author" content="Sampa Aberturas">
<meta name="robots" content="index, follow">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="{{ $type }}">
<meta property="og:url" content="{{ $url }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:image" content="{{ $image }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:site_name" content="Sampa Aberturas">
<meta property="og:locale" content="es_AR">

<!-- Twitter Card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $image }}">
<meta name="twitter:site" content="@SampaAberturas">
<meta name="twitter:creator" content="@SampaAberturas">

<!-- Canonical URL -->
<link rel="canonical" href="{{ $url }}">

<!-- Favicon -->
<link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
<link rel="apple-touch-icon" href="{{ asset('Images/Sampa_Logo.jpg') }}">