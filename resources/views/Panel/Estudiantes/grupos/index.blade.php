<x-master-layout title="Listado de Grupos">
    <div class="min-h-screen bg-gray-100 flex items-start py-2 justify-center background">
        <div class="max-w-5xl w-full space-y-10 bg-white shadow-2xl rounded-lg p-10">
            <!-- Título del Listado -->
            <div>
                <h2 class="text-center text-4xl font-extrabold text-[#621132]">Listado de Grupos</h2>
                <p class="mt-3 text-center text-md text-gray-600">
                    Consulta y administra los grupos disponibles
                </p>
            </div>

            <!-- Tabla de Grupos -->
            <div class="overflow-x-auto">
                <table class="min-w-full bg-gradient-to-b from-[#D4C19C] to-[#B38E5D] rounded-lg shadow-lg">
                    <thead>
                        <tr class="bg-[#4E232E] text-white text-left text-sm uppercase tracking-wide font-semibold">
                            <th class="px-6 py-4">ID</th>
                            <th class="px-6 py-4">Grado</th>
                            <th class="px-6 py-4">Grupo</th>
                            <th class="px-6 py-4">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-[#B38E5D]">
                        @foreach($grupos as $grupo)
                            <tr class="hover:bg-[#F1ECE1] transition-colors duration-300">
                                <td class="px-6 py-4 text-gray-800 font-medium">{{ $grupo->id }}</td>
                                <td class="px-6 py-4 text-gray-800 font-medium">{{ $grupo->grado }}</td>
                                <td class="px-6 py-4 text-gray-800 font-medium">{{ $grupo->grupo }}</td>
                                <td class="px-6 py-4 flex items-center space-x-4 text-[#9D2449]">

                                    <!-- Icono para ver alumnos -->
                                    <a href="{{ route('grupos.show', $grupo->id) }}" class="hover:text-[#621132]" title="Ver Alumnos">
                                        <i class="bi bi-eye"></i>
                                    </a>
                                    <!-- Icono para ver alumnos  asistencia-->
                                    <a href="{{ route('alumnos.show', $grupo->id) }}" class="hover:text-[#621132]" title="Tomar Asistencia">
                                        <i class="bi bi-people"></i>
                                    </a>
                                    <!-- Icono para editar -->
                                    <a href="{{ route('grupos.edit', $grupo->id) }}" class="hover:text-[#621132]" title="Editar Grupo">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <!-- Formulario de eliminar -->
                                    <form action="{{ route('grupos.destroy', $grupo->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este grupo?');" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800" title="Eliminar Grupo">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Botón para agregar nuevo grupo -->
            <div class="text-right">
                <a href="{{ route('grupos.create') }}"
                    class="inline-flex items-center px-6 py-3 border border-transparent rounded-full shadow-md text-md font-medium text-white bg-[#9D2449] hover:bg-[#621132] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#621132] transition duration-300 transform hover:scale-105">
                    + Agregar Nuevo Grupo
                </a>
            </div>
        </div>
    </div>
</x-master-layout>
