<x-master-layout title="Panel de Administración de Materias">
    <div class="min-h-screen background flex flex-col items-center py-10 px-4">
        <!-- Contenedor principal -->
        <div class="max-w-5xl w-full bg-white shadow-2xl rounded-2xl p-8 relative">
            <!-- Encabezado -->
            <div class="flex justify-between items-center border-b border-[#D4C19C] pb-4 mb-6">
                <h1 class="text-4xl font-extrabold text-[#621132] tracking-wide">Administración de Materias</h1>
                <!-- Botón para agregar nueva materia -->
                <a href="{{ route('materias.create') }}"
                    class="bg-gradient-to-r from-[#285C4D] to-[#13322B] text-white px-6 py-3 rounded-full shadow-md hover:scale-105 transition-transform">
                    + Agregar Materia
                </a>
            </div>

            <!-- Tabla de Materias -->
            <div class="overflow-x-auto rounded-lg shadow-lg">
                <table class="min-w-full bg-white rounded-lg shadow-lg">
                    <thead class="bg-[#4E232E] text-white">
                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-bold uppercase">ID</th>
                            <th class="px-6 py-4 text-left text-sm font-bold uppercase">Nombre de la Materia</th>
                            <th class="px-6 py-4 text-left text-sm font-bold uppercase">Semestre</th>
                            <th class="px-6 py-4 text-center text-sm font-bold uppercase">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-[#B38E5D]">
                        @foreach ($materias as $materia)
                            <tr class="hover:bg-[#F1ECE1] transition-colors duration-300">
                                <td class="px-6 py-2 text-sm text-gray-800 font-medium">{{ $materia->id }}</td>
                                <td class="px-6 py-2 text-sm text-gray-800 font-medium">{{ $materia->nombre }}</td>
                                <td class="px-6 py-2 text-sm text-gray-800 font-medium">
                                    {{ $materia->semestre ? $materia->semestre->semestre : 'Sin asignar' }}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <!-- Botón de Editar -->
                                    <a href="{{ route('materias.edit', $materia->id) }}"
                                        class="bg-[#285C4D] text-white px-3 py-1 m-1 rounded-full text-sm font-semibold hover:bg-[#13322B] transition-colors mx-1">
                                        Editar
                                    </a>
                                    <!-- Botón de Eliminar -->
                                    <form action="{{ route('materias.destroy', $materia->id) }}" method="POST"
                                        onsubmit="return confirm('¿Estás seguro de que quieres eliminar esta materia?');"
                                        class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="bg-[#9D2449] text-white px-3 py-1 m-1 rounded-full text-sm font-semibold hover:bg-red-700 transition-colors mx-1">
                                            Eliminar
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-master-layout>
