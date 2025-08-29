<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Menu Digital') }}</title>
    <style>[x-cloak]{ display:none !important; }</style>
    <link rel="stylesheet" href="{{ asset('css/adminapp.css') }}" />
    
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body>

    <!-- Header -->
    <header>
        <div class="container mx-auto flex justify-between items-center">
            <div class="logo-container">
                <img src="{{ asset('img/logo.png') }}" alt="Logo Estación Sushi">
                <h1>Estación Sushi</h1>
            </div>
        </div>
    </header>

    <!-- Contenido dinámico -->
    <main class="container mx-auto p-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} Estación Sushi - Todos los derechos reservados.</p>
        <p>Hecho con ❤️ en Tepic</p>
    </footer>

</body>
</html>
