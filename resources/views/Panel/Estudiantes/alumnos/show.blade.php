<x-master-layout title="Listado de Alumnos">
    <div class="min-h-screen bg-gray-100 flex items-start py-4  justify-center  background">
        <div class="max-w-6xl w-full bg-white shadow-xl rounded-lg p-10">
            <!-- Encabezado -->
            <div class="text-center mb-8">
                <h2 class="text-4xl font-extrabold text-[#621132]">
                    Alumnos del Grupo: {{ $controllerGrupo->grado }}-{{ $controllerGrupo->grupo }}
                </h2>
            </div>



            <!-- Formulario para tomar asistencia -->
            <form action="{{ route('asistencias.store') }}" method="POST">
                @csrf


                <!-- Materia y Fecha de Asistencia en una fila con Tailwind -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="materia_id" class="block text-sm font-semibold text-gray-700 mb-3">Materia:</label>
                        <select name="materia_id" id="materia_id" required
                            class="mt-1 block w-full border border-gray-300 rounded-lg shadow-sm px-4 py-2 text-gray-700 focus:ring-[#285C4D] focus:border-[#285C4D] bg-white">
                            <option value="" disabled selected>Selecciona una materia</option>
                            @foreach ($controllerMaterias as $materia)
                                <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="attendance_date" class="block text-sm font-semibold text-gray-700 mb-2">Fecha de
                            Asistencia:</label>
                        <input type="date" name="attendance_date" id="attendance_date"
                            class="mt-1 w-full border border-gray-300 rounded-lg shadow-sm px-4 py-2 text-gray-700 focus:ring-[#285C4D] focus:border-[#285C4D] bg-white">
                    </div>
                </div>
                <input type="hidden" name="grupo_id" value="{{ $controllerGrupo->id }}">

                <!-- Tabla de alumnos -->
                <div class="overflow-auto mb-8">
                    <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
                        <thead class="bg-[#4E232E]">
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-bold text-white uppercase">ID</th>
                                <th class="px-4 py-2 text-left text-xs font-bold text-white uppercase">Nombre</th>
                                <th class="px-4 py-2 text-left text-xs font-bold text-white uppercase">Apellido</th>
                                <th class="px-4 py-2 text-center text-xs font-bold text-white uppercase">Asistencia</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @forelse($controllerGrupo->alumnos as $alumno)
                                <tr class="hover:bg-gray-100 transition-colors duration-150 ease-in-out">
                                    <td class="px-4 py-3 text-sm text-gray-700">{{ $alumno->id }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-700">{{ $alumno->nombre }}</td>
                                    <td class="px-4 py-3 text-sm text-gray-700">{{ $alumno->apellido_paterno }}
                                        {{ $alumno->apellido_materno }}</td>
                                    <td class="px-4 py-3 text-center">
                                        <input type="checkbox" name="asistencia[{{ $alumno->matricula }}]"
                                            class="form-checkbox h-5 w-5 text-[#9D2449]">
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

                <!-- Botones de acción -->
                <div class="flex justify-between mt-6">
                    <a href="{{ route('grupos.index') }}"
                        class="px-5 py-2 text-sm font-medium text-white bg-[#285C4D] hover:bg-[#13322B] rounded-md shadow-md focus:ring-2 focus:ring-offset-2 focus:ring-[#13322B] transform hover:scale-105 transition ease-in-out">
                        Volver a grupos
                    </a>
                    <button type="submit"
                        class="px-5 py-2 text-sm font-medium text-white bg-[#9D2449] hover:bg-[#621132] rounded-md shadow-md focus:ring-2 focus:ring-offset-2 focus:ring-[#621132] transform hover:scale-105 transition ease-in-out">
                        Confirmar asistencia
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-master-layout>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        @if (session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: '{{ session('success') }}',
                confirmButtonColor: '#621132'
            });
        @endif

        @if (session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('error') }}',
                confirmButtonColor: '#9D2449'
            });
        @endif
    });
</script>
