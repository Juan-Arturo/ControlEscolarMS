<x-master-layout title="Listado de Alumnos">
    <div class="min-h-screen bg-gray-100 flex items-center justify-center background">
        <!-- Fondo blanco más amplio y sombreado -->
        <div class="max-w-7xl w-full space-y-8 bg-white shadow-2xl rounded-lg p-8">
            <!-- Título -->
            <div>
                <h2 class="text-center text-4xl font-bold text-[#621132] mb-4">
                    Alumnos del Grupo: 
                    {{ $controllerGrupo ? $controllerGrupo->grado . '-' . $controllerGrupo->grupo : 'Grupo no encontrado' }}
                </h2>
            </div>

            <!-- Tabla de alumnos -->
            <div class="mt-6 overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300 rounded-lg overflow-hidden">
                    <thead class="bg-[#4E232E]">
                        <tr>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-white uppercase tracking-wide">Matrícula</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-white uppercase tracking-wide">Nombre</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-white uppercase tracking-wide">Apellido Paterno</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-white uppercase tracking-wide">Apellido Materno</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-white uppercase tracking-wide">Especialidad</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-white uppercase tracking-wide">Seguro Médico</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-white uppercase tracking-wide">CURP</th>
                            <th class="px-4 py-3 text-left text-sm font-semibold text-white uppercase tracking-wide">Fecha de Nacimiento</th>
                            <th class="px-4 py-3 text-center text-sm font-semibold text-white uppercase tracking-wide">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($controllerGrupo->alumnos as $alumno)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-4 py-4 text-sm text-gray-900">{{ $alumno->matricula }}</td>
                                <td class="px-4 py-4 text-sm text-gray-900">{{ $alumno->nombre }}</td>
                                <td class="px-4 py-4 text-sm text-gray-900">{{ $alumno->apellido_paterno }}</td>
                                <td class="px-4 py-4 text-sm text-gray-900">{{ $alumno->apellido_materno }}</td>
                                <td class="px-4 py-4 text-sm text-gray-900">{{ $alumno->especialidad }}</td>
                                <td class="px-4 py-4 text-sm text-gray-900">{{ $alumno->seguro_medico }}</td>
                                <td class="px-4 py-4 text-sm text-gray-900">{{ $alumno->curp }}</td>
                                <td class="px-4 py-4 text-sm text-gray-900">{{ $alumno->fecha_nacimiento }}</td>
                                <td class="px-4 py-4 text-sm font-medium flex space-x-4 justify-center">
                                    <!-- Enlace para editar alumno -->
                                    <a href="{{ route('alumnos.edit', $alumno->matricula) }}" class="text-[#9D2449] hover:text-[#621132]">Editar</a>
                                    
                                    <!-- Formulario para eliminar alumno -->
                                    <form action="{{ route('alumnos.destroy', $alumno->matricula) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Botones de navegación -->
            <div class="flex justify-between mt-6">
                <a href="{{ route('grupos.index') }}"
                    class="inline-flex items-center px-6 py-3 border border-transparent rounded-md shadow-lg text-sm font-medium text-white bg-[#285C4D] hover:bg-[#13322B] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#13322B] transition duration-300 transform hover:scale-105">
                    Volver a Grupos
                </a>
                <a href="{{ route('alumnos.create', ['grupo_id' => $controllerGrupo->id]) }}"
                    class="inline-flex items-center px-6 py-3 border border-transparent rounded-md shadow-lg text-sm font-medium text-white bg-[#9D2449] hover:bg-[#621132] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#621132] transition duration-300 transform hover:scale-105">
                    Agregar Nuevo Alumno
                </a>
            </div>
        </div>
    </div>
</x-master-layout>
