<x-master-layout title="Listado de Alumnos">
    <div class="min-h-screen bg-gray-100 flex items-center justify-center background">
        <!-- Fondo blanco más ancho -->
        <div class="max-w-7xl w-full space-y-8 bg-white shadow-2xl rounded-lg p-10">
            <div>
                <h2 class="text-center text-3xl font-extrabold text-[#621132]">
                    Alumnos del Grupo: 
                    {{ $controllerGrupo ? $controllerGrupo->grado . '-' . $controllerGrupo->grupo : 'Grupo no encontrado' }}
                </h2>
            </div>

            <!-- Tabla de alumnos -->
            <div class="mt-6 overflow-x-auto">
                <!-- Tabla más ancha con w-full -->
                <table class="min-w-full w-full bg-white border border-gray-300 rounded-lg overflow-hidden">
                    <thead class="bg-[#4E232E]">
                        <tr>
                            <th class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Matricula
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Nombre
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Apellido paterno
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Apellido materno
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Especialidad
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Seguro Médico
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                CURP
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Fecha de nacimiento
                            </th>
                            <th class="px-4 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($controllerGrupo->alumnos as $alumno)
                        <tr>
                            <td class="px-4 py-4 text-sm text-gray-900">{{ $alumno->matricula }}</td>
                            <td class="px-4 py-4 text-sm text-gray-900">{{ $alumno->nombre }}</td>
                            <td class="px-4 py-4 text-sm text-gray-900">{{ $alumno->apellido_paterno }}</td>
                            <td class="px-4 py-4 text-sm text-gray-900">{{ $alumno->apellido_materno }}</td>
                            <td class="px-4 py-4 text-sm text-gray-900">{{ $alumno->especialidad }}</td>
                            <td class="px-4 py-4 text-sm text-gray-900">{{ $alumno->seguro_medico }}</td>
                            <td class="px-4 py-4 text-sm text-gray-900">{{ $alumno->curp }}</td>
                            <td class="px-4 py-4 text-sm text-gray-900">{{ $alumno->fecha_nacimiento }}</td>
                            <td class="px-4 py-4 text-sm font-medium flex space-x-2">
                                <!-- Enlace para editar alumno -->
                                <a href="" class="text-[#9D2449] hover:text-[#621132]">Editar</a>
                                
                                <!-- Formulario para eliminar alumno -->
                                <form action="" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Botones de navegación -->
            <div class="flex justify-between mt-4">
                <a href="{{ route('grupos.index') }}"
                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#285C4D] hover:bg-[#13322B] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#13322B] transition duration-300 ease-in-out transform hover:scale-105">
                    Volver a grupos
                </a>
                <a href="{{ route('alumnos.create', ['grupo_id' => $controllerGrupo->id]) }}"
                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#9D2449] hover:bg-[#621132] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#621132] transition duration-300 ease-in-out transform hover:scale-105">
                    Agregar Nuevo Alumno
                </a>
            </div>
        </div>
    </div>
</x-master-layout>
