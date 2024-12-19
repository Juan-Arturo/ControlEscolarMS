<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

    <!-- Incluir el navigation-menu de Jetstream -->
    @livewire('navigation-menu')
   
    <!-- Contenedor principal -->
    <div class="flex min-h-screen bg-gray-100">

        <!-- Sidebar: Ocultar en móviles y tabletas -->
        <aside class="w-72 bg-gradient-to-b from-[#621132] to-[#9D2449] text-white flex-shrink-0 shadow-2xl hidden md:block">
            @include('components.sidebar')
        </aside>

        <!-- Botón de hamburguesa para móviles -->
        <button id="menu-toggle" class="md:hidden p-4 bg-[#621132] text-white">
            <i class="bi bi-list"></i> <!-- Icono de hamburguesa -->
        </button>

        <!-- Contenido principal -->
        <main class="flex-grow overflow-auto ">
            {{ $slot }}
        </main>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <!-- Script para abrir/cerrar el sidebar en móviles -->
    <script>
        document.getElementById('menu-toggle').addEventListener('click', function() {
            var sidebar = document.querySelector('aside');
            sidebar.classList.toggle('hidden'); // Muestra u oculta el sidebar
        });
    </script>
</body>

</html>
