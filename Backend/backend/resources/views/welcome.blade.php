<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sampa Aberturas - Bienvenida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
            overflow: hidden;
        }
        
        .splash-container {
            text-align: center;
            animation: fadeIn 1.5s ease-in-out;
        }
        
        .logo-splash {
            width: 200px;
            height: auto;
            margin-bottom: 2rem;
            animation: pulse 2s infinite;
        }
        
        .loading-bar {
            width: 200px;
            height: 4px;
            background-color: #e9ecef;
            border-radius: 2px;
            margin: 2rem auto;
            overflow: hidden;
        }
        
        .loading-progress {
            height: 100%;
            width: 0;
            background-color: rgb(49, 146, 85);
            animation: loading 3s forwards;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        @keyframes loading {
            0% { width: 0; }
            100% { width: 100%; }
        }
    </style>
</head>
<body>
    <div class="splash-container">
        <img src="{{ asset('Images/Sampa_Logo_Livianno.png') }}" alt="Sampa Aberturas" class="logo-splash">
        <div class="loading-bar">
            <div class="loading-progress"></div>
        </div>
    </div>

    <script>
        // Redirigir después de 3 segundos
        setTimeout(function() {
            window.location.href = "{{ route('home') }}";
        }, 3000);
    </script>
</body>
</html>