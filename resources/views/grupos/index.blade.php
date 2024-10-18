<x-master-layout title="Listado de Grupos">
    <div class="min-h-screen bg-gray-100 flex items-center justify-center background ">
        <div class="max-w-4xl w-full space-y-8 bg-white shadow-2xl rounded-lg p-10">
            <div>
                <h2 class="text-center text-3xl font-extrabold text-[#621132]">Grupos</h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Listado de grupos dados de alta actualmente
                </p>
            </div>

            <div class="mt-6">
                <table class="min-w-full bg-white border border-gray-300 rounded-lg overflow-hidden">
                    <thead class="bg-[#4E232E]">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                ID
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Grado
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Grupo
                            </th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-white uppercase tracking-wider">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach($grupos as $grupo)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $grupo->id }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $grupo->grado }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">{{ $grupo->grupo }}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="{{ route('grupos.show', $grupo->id) }}" class="text-[#9D2449] hover:text-[#621132] me-2">
                                        <i class="bi bi-pencil"></i>
                                    </a>
                                    <a href="{{ route('alumnos.show', $grupo->id) }}" class="text-[#9D2449] hover:text-[#621132]">
                                        <i class="bi bi-clipboard2-check"></i>
                                    </a>
                                    
                                    <a href="{{ route('grupos.edit', $grupo->id) }}" class="text-[#9D2449] hover:text-[#621132] ml-4">Editar</a>
                                    <form action="{{ route('grupos.destroy', $grupo->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Eliminar</button>
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
                    class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#9D2449] hover:bg-[#621132] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#621132] transition duration-300 ease-in-out transform hover:scale-105">
                    Agregar Nuevo Grupo
                </a>
            </div>
        </div>
    </div>
</x-master-layout>
