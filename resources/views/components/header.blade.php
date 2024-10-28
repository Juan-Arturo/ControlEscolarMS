<!-- resources/views/components/header.blade.php -->
<header class="bg-gray-800 text-white">
  <div class="container mx-auto flex justify-between items-center py-4 px-6">
      <a href="/" class="text-2xl font-bold">Mi App</a>
      <nav class="space-x-4">
          <a href="/home" class="hover:text-gray-400">Inicio</a>
          <a href="/about" class="hover:text-gray-400">Acerca de</a>
          <a href="/contact" class="hover:text-gray-400">Contacto</a>
      </nav>
      <div>
          <a href="/profile" class="text-gray-300 hover:text-white">
              <i class="bi bi-person-circle text-xl"></i>
          </a>
      </div>
  </div>
</header>
