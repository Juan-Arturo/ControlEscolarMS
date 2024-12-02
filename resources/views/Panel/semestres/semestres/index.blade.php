<x-master-layout title="Gestión de Semestres">
    <div class="min-h-screen background flex flex-col items-center py-10 px-4">
        <!-- Contenedor principal -->
        <div class="max-w-5xl w-full bg-white shadow-2xl rounded-2xl p-8 relative">
            <!-- Encabezado -->
            <div class="flex justify-between items-center border-b border-[#D4C19C] pb-4 mb-6">
                <h1 class="text-4xl font-extrabold text-[#621132] tracking-wide">Gestión de Semestres</h1>
                <!-- En tu archivo Blade -->
                <button id="add-semester-btn" data-action="{{ route('semestres.store') }}"
                    class="bg-gradient-to-r from-[#285C4D] to-[#13322B] text-white px-6 py-3 rounded-full shadow-md hover:scale-105 transition-transform">
                    + Agregar Semestre
                </button>


            </div>

            <!-- Tabla de Semestres -->
            <div class="overflow-x-auto rounded-lg shadow-lg">
                <table class="min-w-full bg-white rounded-lg shadow-lg">
                    <thead class="bg-[#4E232E] text-white">
                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-bold uppercase">Nombre</th>
                            <th class="px-6 py-4 text-left text-sm font-bold uppercase">Descripcion</th>
                            <th class="px-6 py-4 text-left text-sm font-bold uppercase">Fecha Inicio</th>
                            <th class="px-6 py-4 text-left text-sm font-bold uppercase">Fecha Fin</th>
                            <th class="px-6 py-4 text-center text-sm font-bold uppercase">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-[#B38E5D]">
                        @foreach ($Semestres as $Semestre)
                            <tr class="hover:bg-[#F1ECE1] transition-colors duration-300">
                                <td class="px-6 py-2 text-sm text-gray-800 font-medium">{{ $Semestre->nombre }}</td>
                                <td class="px-6 py-2 text-sm text-gray-800 font-medium break-words max-w-xs md:max-w-md lg:max-w-lg">
                                    {{ $Semestre->descripcion }}
                                </td>
                                <td class="px-6 py-2 text-sm text-gray-800 font-medium">
                                    {{ \Carbon\Carbon::parse($Semestre->fecha_inicio)->format('d/m/Y') }}
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-800 font-medium">
                                    {{ \Carbon\Carbon::parse($Semestre->fecha_fin)->format('d/m/Y') }}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <button class="bg-[#285C4D] text-white px-3 py-1 m-1 rounded-full text-sm font-semibold hover:bg-[#13322B] transition-colors mx-1"
                                        onclick="openEditModal({{ $Semestre->id }}, '{{ $Semestre->nombre }}','{{ $Semestre->descripcion }}', '{{ $Semestre->fecha_inicio }}', '{{ $Semestre->fecha_fin }}')">
                                        Editar
                                    </button>
            
                                    <button class="bg-[#9D2449] text-white px-3 py-1 m-1 rounded-full text-sm font-semibold hover:bg-red-700 transition-colors mx-1"
                                        onclick="openDeleteModal({{ $Semestre->id }})">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
        </div>


        <!-- Modal para agregar/editar semestres -->
        <div id="semester-modal"
            class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-10">
            <div class="bg-white rounded-xl shadow-2xl w-[90%] max-w-lg p-8 relative">
                <button id="close-modal"
                    class="absolute top-4 right-4 text-[#621132] text-lg font-bold hover:text-red-700">×</button>
                <h2 id="modal-title" class="text-3xl font-bold text-[#621132] mb-6">Agregar Semestre</h2>
                <form id="semester-form" method="POST" action="{{ route('semestres.store') }}">
                    @csrf <!-- Protege contra ataques CSRF -->

                    <!-- Nombre -->
                    <div class="mb-6">
                        <label for="semester-name"
                            class="block text-lg font-semibold text-[#13322B] mb-2">Nombre</label>
                        <input type="text" id="semester-name" name="nombre"
                            class="w-full px-4 py-3 border border-[#285C4D] rounded-md focus:ring-2 focus:ring-[#285C4D] focus:outline-none"
                            placeholder="Ej. Semestre 2024-A" required>
                    </div>

                    <!-- Descripción -->
                    <div class="mb-6">
                        <label for="semester-description"
                            class="block text-lg font-semibold text-[#13322B] mb-2">Descripción</label>
                        <textarea id="semester-description" name="descripcion"
                            class="w-full px-4 py-3 border border-[#285C4D] rounded-md focus:ring-2 focus:ring-[#285C4D] focus:outline-none"
                            placeholder="Ej. Descripción breve del semestre" rows="4" required></textarea>
                    </div>

                    <!-- Fechas -->
                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="start-date"
                                class="block text-lg font-semibold text-[#13322B] mb-2">Inicio</label>
                            <input type="date" id="start-date" name="fecha_inicio"
                                class="w-full px-4 py-3 border border-[#285C4D] rounded-md focus:ring-2 focus:ring-[#285C4D] focus:outline-none"
                                required>
                        </div>
                        <div>
                            <label for="end-date" class="block text-lg font-semibold text-[#13322B] mb-2">Fin</label>
                            <input type="date" id="end-date" name="fecha_fin"
                                class="w-full px-4 py-3 border border-[#285C4D] rounded-md focus:ring-2 focus:ring-[#285C4D] focus:outline-none"
                                required>
                        </div>
                    </div>

                    <!-- Botones -->
                    <div class="flex justify-end space-x-4">
                        <button type="button" class="text-gray-600 hover:text-gray-800"
                            id="cancel-modal">Cancelar</button>
                        <button type="submit"
                            class="bg-[#621132] text-white px-6 py-2 rounded-full hover:bg-[#4E232E] transition-all">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal de Confirmación de eliminacion -->
        <div id="delete-modal"
            class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-10">
            <div class="bg-white rounded-xl shadow-2xl w-[90%] max-w-md p-6 relative">
                <!-- Botón de cerrar -->
                <button onclick="closeDeleteModal()"
                    class="absolute top-4 right-4 text-[#621132] text-lg font-bold hover:text-red-700">
                    ×
                </button>

                <!-- Título del Modal -->
                <h2 class="text-2xl font-bold text-[#621132] mb-6 text-center">
                    ¿Eliminar Semestre?
                </h2>

                <!-- Contenido -->
                <p class="text-[#13322B] text-center text-lg mb-8">
                    Esta acción no se puede deshacer. ¿Estás seguro de eliminar este semestre?
                </p>

                <!-- Formulario de confirmación -->
                <form id="delete-form" method="POST" class="flex justify-center space-x-4">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="bg-[#621132] text-white px-6 py-2 rounded-full hover:bg-[#4E232E] transition-all">
                        Confirmar
                    </button>
                    <button type="button" onclick="closeDeleteModal()"
                        class="text-gray-600 hover:text-gray-800 px-6 py-2 rounded-full border border-gray-300">
                        Cancelar
                    </button>
                </form>
            </div>
        </div>

    </div>

    <!-- Script para manejar el modal -->
    <script src="{{ asset('js/semestres/gestionSemestres.js') }}"></script>


</x-master-layout>
