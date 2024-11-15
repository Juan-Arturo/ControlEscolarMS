<x-master-layout title="Asistencia Alumno">
    <div class="min-h-screen px-4 lg:px-8 py-6 background">
        <div class="bg-white rounded-lg shadow-lg p-8 w-full">
            <h2 class="text-2xl font-semibold text-gray-800 mb-6">Consulta de Asistencia</h2>

            <!-- Formulario para seleccionar fecha y grupo -->
            <form action="{{ route('asistencia.consultar') }}" method="GET">
                <div class="flex items-center gap-6 mb-8">
                    <div class="w-1/2">
                        <label for="attendance-date" class="block text-sm font-semibold text-gray-700 mb-1">Selecciona la
                            fecha</label>
                        <input type="date" id="attendance-date" name="attendance_date" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-gray-700 sm:text-sm">
                    </div>

                    <div class="w-1/2">
                        <label for="group-select" class="block text-sm font-semibold text-gray-700 mb-1">Selecciona el
                            grupo</label>
                        <select id="group-select" name="grupo_id" required
                            class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500 text-gray-700 sm:text-sm">
                            <option value="">Selecciona un grupo</option>
                            @foreach ($grupos as $grupo)
                                <option value="{{ $grupo->id }}">{{ $grupo->grado }}°{{ $grupo->grupo }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mt-8 flex justify-end">
                    <button type="submit"
                        class="px-6 py-3 bg-[#902449] text-white font-semibold rounded-lg shadow-md hover:bg-[#621132] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Consultar Asistencia
                    </button>
                </div>
            </form>

            <!-- Lista de estudiantes -->
           @if (isset($alumnosDelGrupo) && count($alumnosDelGrupo) > 0)
    <div class="bg-gray-50 rounded-lg p-6 mt-6">
        <h3 class="text-lg font-medium text-gray-800 mb-4">Lista de Estudiantes</h3>
        <ul class="space-y-4">
            @foreach ($alumnosDelGrupo as $alumno)
                <li class="flex items-center justify-between p-4 bg-white rounded-lg shadow-sm border border-gray-200">
                    <div class="flex items-center">
                        <img class="h-12 w-12 rounded-full object-cover" src="/img/alumno.jpg" alt="Estudiante">
                        <div class="ml-4">
                            <p class="text-md font-semibold text-gray-900">{{ $alumno->nombre }} {{ $alumno->apellido_paterno }} {{ $alumno->apellido_materno }}</p>
                            <p class="text-sm font-semibold
                                {{ isset($asistenciaPorAlumno[$alumno->matricula]) ? ($asistenciaPorAlumno[$alumno->matricula] ? 'text-green-500' : 'text-red-500') : 'text-gray-500' }}">
                                @if (isset($asistenciaPorAlumno[$alumno->matricula]))
                                    {{ $asistenciaPorAlumno[$alumno->matricula] ? 'Asistió' : 'Faltó' }}
                                @else
                                    No hay asistencia registrada para esta fecha.
                                @endif
                            </p>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@else
    <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative mt-6" role="alert">
        <strong class="font-bold">Selecciona la fecha y grupo.</strong>
        <span class="block sm:inline">Para consultar la asistencia.</span>
    </div>
@endif


        </div>
    </div>
</x-master-layout>
