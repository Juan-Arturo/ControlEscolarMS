<x-master-layout title="Home">
    <div class="container mx-auto mt-10">
        <!-- Encabezado -->
        <header class="text-center mb-12">
            <h1 class="text-6xl font-extrabold text-gray-900">Bienvenido al Control Escolar</h1>
            <p class="text-xl text-gray-700 mt-3">Gestiona la información de alumnos y grupos con facilidad</p>
            <div class="mt-4">
                <a href="#" class="bg-gradient-to-r from-blue-500 to-purple-600 text-white font-semibold py-3 px-8 rounded-lg shadow-lg hover:shadow-xl transition duration-300 transform hover:scale-105">
                    Comenzar
                </a>
            </div>
        </header>

        <!-- Sección de Estadísticas -->
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-10">
            <div class="bg-white shadow-lg rounded-lg p-6 text-center transition-transform transform hover:scale-105">
                <h2 class="text-2xl font-semibold text-gray-800">Total de Alumnos</h2>
                <p class="text-4xl font-bold text-blue-600">150</p>
                <div class="mt-3">
                    <img src="https://img.icons8.com/ios/100/000000/student-male.png" alt="Estudiantes" class="mx-auto" />
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 text-center transition-transform transform hover:scale-105">
                <h2 class="text-2xl font-semibold text-gray-800">Total de Grupos</h2>
                <p class="text-4xl font-bold text-blue-600">10</p>
                <div class="mt-3">
                    <img src="https://img.icons8.com/ios/100/000000/classroom.png" alt="Grupos" class="mx-auto" />
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg p-6 text-center transition-transform transform hover:scale-105">
                <h2 class="text-2xl font-semibold text-gray-800">Asistencia del Día</h2>
                <p class="text-4xl font-bold text-blue-600">85%</p>
                <div class="mt-3">
                    <img src="https://img.icons8.com/ios/100/000000/checkmark.png" alt="Asistencia" class="mx-auto" />
                </div>
            </div>
        </section>

        <!-- Sección de Acciones Rápidas -->
        <section>
            <h2 class="text-4xl font-bold mb-6 text-gray-800">Acciones Rápidas</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <a href="" class="bg-gradient-to-r from-green-400 to-green-600 text-white font-bold py-4 px-6 rounded-lg shadow-lg text-center transition-transform transform hover:scale-105 hover:shadow-xl">
                    Gestionar Alumnos
                </a>
                <a href="" class="bg-gradient-to-r from-blue-400 to-blue-600 text-white font-bold py-4 px-6 rounded-lg shadow-lg text-center transition-transform transform hover:scale-105 hover:shadow-xl">
                    Gestionar Grupos
                </a>
                <a href="" class="bg-gradient-to-r from-yellow-400 to-yellow-600 text-white font-bold py-4 px-6 rounded-lg shadow-lg text-center transition-transform transform hover:scale-105 hover:shadow-xl">
                    Tomar Asistencia
                </a>
            </div>
        </section>

        <!-- Pie de página opcional -->
        <footer class="mt-10 text-center text-gray-600">
            <p>&copy; 2024 Control Escolar. Todos los derechos reservados.</p>
        </footer>
    </div>
</x-master-layout>
