<x-master-layout title="Asistencia Alumno">
    <div class="min-h-screen px-4 lg:px-8 py-6 background"> <!-- Mantener la clase de fondo -->
        <div class="bg-white rounded-lg shadow-lg p-8 w-full">
            <!-- Encabezado -->
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Consulta de Asistencia</h2>

            <!-- Sección de filtros -->
            <div class="flex items-center gap-6 mb-8">
                <!-- Campo de selección de fecha -->
                <div class="w-1/2">
                    <label for="attendance-date" class="block text-sm font-semibold text-gray-700 mb-1">Selecciona la fecha</label>
                    <input type="date" id="attendance-date" name="attendance-date"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-gray-700 sm:text-sm">
                </div>

                <!-- Campo de selección de grupo -->
                <div class="w-1/2">
                    <label for="group-select" class="block text-sm font-semibold text-gray-700 mb-1">Selecciona el grupo</label>
                    <select id="group-select" name="group-select"
                        class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-gray-700 sm:text-sm">
                        <option value="">Selecciona un grupo</option>
                        @foreach ($grupos as $grupo)
                            <option value="{{ $grupo->id }}">{{ $grupo->grado }}°{{ $grupo->grupo }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <!-- Lista de estudiantes -->
            <div class="bg-gray-50 rounded-lg p-6">
                <h3 class="text-lg font-medium text-gray-800 mb-4">Lista de Estudiantes</h3>
                <ul class="space-y-4">
                    <li class="flex items-center justify-between p-4 bg-white rounded-lg shadow-sm border border-gray-200">
                        <div class="flex items-center">
                            <img class="h-12 w-12 rounded-full object-cover" src="https://via.placeholder.com/100" alt="Estudiante">
                            <div class="ml-4">
                                <p class="text-md font-semibold text-gray-900">Nombre del Estudiante</p>
                                <p class="text-sm text-gray-500">Asistió / Faltó</p>
                            </div>
                        </div>
                        <button class="text-gray-400 hover:text-gray-600 focus:outline-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zm6 0a2 2 0 11-4 0 2 2 0z" />
                            </svg>
                        </button>
                    </li>
                </ul>
            </div>

            <!-- Botón de acción -->
            <div class="mt-8 flex justify-end">
                <button class="px-6 py-3 bg-[#902449] text-white font-semibold rounded-lg shadow-md hover:bg-[#621132] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Consultar Asistencia
                </button>
            </div>
        </div>
    </div>
</x-master-layout>621132
