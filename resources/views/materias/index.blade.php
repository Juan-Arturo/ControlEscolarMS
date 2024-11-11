<x-master-layout title="Panel de Administración de Materias">
    <div class="container mx-auto py-10 px-6">
        <!-- Título del Panel -->
        <h1 class="text-5xl font-extrabold text-[#4E232E] mb-10 text-center border-b-4 border-[#621132] pb-4 tracking-wide shadow-md">
            Panel de Administración de Materias
        </h1>


        <!-- Tabla de Materias -->
        <div class="overflow-x-auto shadow-2xl rounded-lg bg-white">
            <table class="min-w-full bg-[#D4C19C] rounded-lg">
                <thead>
                    <tr class="bg-[#4E232E] text-left text-white text-base uppercase tracking-wide font-semibold">
                        <th class="px-6 py-4">ID</th>
                        <th class="px-6 py-4">Nombre de la Materia</th>
                        <th class="px-6 py-4">Acciones</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-[#B38E5D]">
                    @foreach ($materias as $materia)
                        <tr class="hover:bg-[#F1ECE1] transition-colors duration-300">
                            <td class="px-6 py-4 text-gray-800 font-medium">{{ $materia->id }}</td>
                            <td class="px-6 py-4 text-gray-800 font-medium">{{ $materia->nombre }}</td>
                            <td class="px-6 py-4 flex space-x-3">
                                <!-- Botón de Editar -->
                                <a href="{{ route('materias.edit', $materia->id) }}" class="bg-[#285C4D] text-white px-4 py-2 rounded-lg shadow-md hover:bg-[#13322B] transition duration-300 focus:outline-none focus:ring-2 focus:ring-[#285C4D]">
                                    Editar
                                </a>
                                <!-- Botón de Eliminar -->
                                <form action="{{ route('materias.destroy', $materia->id) }}" method="POST" onsubmit="return confirm('¿Estás seguro de que quieres eliminar esta materia?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-[#621132] text-white px-4 py-2 rounded-lg shadow-md hover:bg-[#902449] transition duration-300 focus:outline-none focus:ring-2 focus:ring-[#285C4D]">
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        
        <!-- Botón para agregar nueva materia -->
        <div class="flex justify-end mt-4">
            <a href="{{ route('materias.create') }}" class="bg-[#621132] text-white px-8 py-3 rounded-lg shadow-md hover:bg-[#902449] transition duration-300 focus:outline-none focus:ring-2 focus:ring-[#285C4D]">
                + Agregar Nueva Materia
            </a>
        </div>
    </div>
</x-master-layout>
