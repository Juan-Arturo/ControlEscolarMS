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

    <!-- Incluir el header de Jetstream -->
    @livewire('navigation-menu')
    {{-- @include('components.header') --}}

    <!-- Contenedor principal -->
    <div class="flex min-h-screen bg-gray-100">

        {{-- Sidebar --}}
        @include('components.sidebar')



        <main class="flex-grow ">
            {{ $slot }}

            <footer>
                @include('components.footer')
            </footer>
        </main>

        
    </div>
   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



</body>

</html>
