{{-- vitsa alumons --}}
<x-master-layout title="Listado de Alumnos">
    <div class="min-h-screen bg-gray-100 flex items-center justify-center background">
        <div class="max-w-4xl w-full space-y-8 bg-white shadow-2xl rounded-lg p-10">
            <div>
                <h2 class="text-center text-3xl font-extrabold text-[#621132]">
                    Alumnos del Grupo: {{ $controllerGrupo->grado }}-{{ $controllerGrupo->grupo }}
                </h2>
            </div>

            <!-- Selector de fecha -->
            <div class="mt-6">
                <label for="attendance_date" class="block text-sm font-medium text-[#621132]">Fecha de Asistencia:</label>
                <input type="date" name="attendance_date" id="attendance_date" 
                       class="mt-1 block w-full border-[#9D2449] text-[#4E232E] bg-[#D4C19C] rounded-md shadow-sm focus:ring-[#285C4D] focus:border-[#285C4D]">
            </div>

            <div class="mt-6">
                <table class="min-w-full bg-white border border-gray-300 rounded-lg overflow-hidden">
                    <thead class="bg-[#4E232E]">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                ID
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Nombre
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Apellido
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Asistencia
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <!-- Iterar sobre los alumnos del grupo -->
                        @forelse($controllerGrupo->alumnos as $alumno)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $alumno->id }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $alumno->nombre }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $alumno->apellido_paterno }} {{ $alumno->apellido_materno }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <label class="inline-flex items-center">
                                        <input type="checkbox" class="form-checkbox h-5 w-5 text-[#9D2449]">
                                    </label>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="px-6 py-4 text-center text-sm text-gray-500">
                                    No hay alumnos registrados en este grupo.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Botones de navegación -->
            <div class="flex justify-between mt-4">
                <a href="{{ route('grupos.index') }}"
                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#285C4D] hover:bg-[#13322B] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#13322B] transition duration-300 ease-in-out transform hover:scale-105">
                    Volver a grupos
                </a>
                <a href=""
                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#9D2449] hover:bg-[#621132] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#621132] transition duration-300 ease-in-out transform hover:scale-105">
                    confirmar asistencia
                </a>
            </div>
        </div>
    </div>
</x-master-layout>
