<x-master-layout title="Bienvenido al Control Escolar Media Superior">
    
    <div class="bg-gray-100 min-h-screen flex flex-col justify-start py-8 items-center text-gray-800 background">
        <!-- Cabecera -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900">Bienvenido al Control Escolar</h1>
            <p class="mt-4 text-lg text-gray-600">Sistema de Gestión para la Educación Media Superior</p>
        </div>

        <!-- Mensaje de bienvenida -->
        <div class="bg-white rounded-lg shadow-lg p-8 max-w-2xl w-full">
            <h2 class="text-2xl font-semibold mb-4 text-center text-gray-800">Bienvenido, {{ Auth::user()->name }}</h2>
            <p class="text-center mb-8 text-gray-600">
                Este es el portal de gestión escolar, donde podrás acceder y administrar toda la información académica, de grupos y asistencia de los estudiantes.
            </p>
        </div>
    </div>
</x-master-layout>

