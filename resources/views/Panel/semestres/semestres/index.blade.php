<x-master-layout title="Gestión de Semestres">
    <div class="min-h-screen background flex flex-col items-center py-10 px-4">
        <!-- Contenedor principal -->
        <div class="max-w-5xl w-full bg-white shadow-2xl rounded-2xl p-8 relative">
            <!-- Encabezado -->
            <div class="flex justify-between items-center border-b border-[#D4C19C] pb-4 mb-6">
                <h1 class="text-4xl font-extrabold text-[#621132] tracking-wide">Gestión de Semestres</h1>
                <button id="add-semester-btn" 
                    class="bg-gradient-to-r from-[#285C4D] to-[#13322B] text-white px-6 py-3 rounded-full shadow-md hover:scale-105 transition-transform">
                    + Agregar Semestre
                </button>
            </div>

            <!-- Tabla de Semestres -->
            <div class="overflow-hidden rounded-lg shadow-lg">
                <table class="min-w-full bg-gradient-to-tl from-[#F5F5F5] to-[#D4C19C]">
                    <thead class="bg-gradient-to-br from-[#621132] to-[#4E232E] text-white">
                        <tr>
                            <th class="px-6 py-4 text-left text-sm font-bold uppercase">#</th>
                            <th class="px-6 py-4 text-left text-sm font-bold uppercase">Nombre</th>
                            <th class="px-6 py-4 text-left text-sm font-bold uppercase">Fecha Inicio</th>
                            <th class="px-6 py-4 text-left text-sm font-bold uppercase">Fecha Fin</th>
                            <th class="px-6 py-4 text-center text-sm font-bold uppercase">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-[#9D2449]">
                        @foreach ($Semestres as $Semestre)
                            <tr class="hover:bg-[#D4C19C]/70 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ $Semestre->nombre }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ \Carbon\Carbon::parse($Semestre->fecha_inicio)->format('d/m/Y') }}</td>
                                <td class="px-6 py-4 text-sm text-gray-800 font-medium">{{ \Carbon\Carbon::parse($Semestre->fecha_fin)->format('d/m/Y') }}</td>
                                <td class="px-6 py-4 text-center">
                                    <button class="bg-[#285C4D] text-white px-3 py-1 rounded-full text-sm font-semibold hover:bg-[#13322B] transition-colors mx-1">Editar</button>
                                    <form action="{{ route('semestres.destroy', $Semestre->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-[#9D2449] text-white px-3 py-1 rounded-full text-sm font-semibold hover:bg-red-700 transition-colors mx-1">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Modal para agregar/editar semestres -->
        <div id="semester-modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden z-10">
            <div class="bg-white rounded-xl shadow-2xl w-[90%] max-w-lg p-8 relative">
                <button id="close-modal" class="absolute top-4 right-4 text-[#621132] text-lg font-bold hover:text-red-700">×</button>
                <h2 id="modal-title" class="text-3xl font-bold text-[#621132] mb-6">Agregar Semestre</h2>
                <form id="semester-form" method="POST" action="{{ route('semestres.store') }}">
                    @csrf  <!-- Protege contra ataques CSRF -->
                    <!-- Nombre -->
                    <div class="mb-6">
                        <label for="semester-name" class="block text-lg font-semibold text-[#13322B] mb-2">Nombre</label>
                        <input type="text" id="semester-name" name="nombre" class="w-full px-4 py-3 border border-[#285C4D] rounded-md focus:ring-2 focus:ring-[#285C4D] focus:outline-none" placeholder="Ej. Semestre 2024-A" required>
                    </div>

                    <!-- Fechas -->
                    <div class="grid grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="start-date" class="block text-lg font-semibold text-[#13322B] mb-2">Inicio</label>
                            <input type="date" id="start-date" name="fecha_inicio" class="w-full px-4 py-3 border border-[#285C4D] rounded-md focus:ring-2 focus:ring-[#285C4D] focus:outline-none" required>
                        </div>
                        <div>
                            <label for="end-date" class="block text-lg font-semibold text-[#13322B] mb-2">Fin</label>
                            <input type="date" id="end-date" name="fecha_fin" class="w-full px-4 py-3 border border-[#285C4D] rounded-md focus:ring-2 focus:ring-[#285C4D] focus:outline-none" required>
                        </div>
                    </div>

                    <!-- Botones -->
                    <div class="flex justify-end space-x-4">
                        <button type="button" class="text-gray-600 hover:text-gray-800" id="cancel-modal">Cancelar</button>
                        <button type="submit" class="bg-[#621132] text-white px-6 py-2 rounded-full hover:bg-[#4E232E] transition-all">
                            Guardar
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- Script para manejar el modal -->
    <script>
        const modal = document.getElementById('semester-modal');
        const addSemesterBtn = document.getElementById('add-semester-btn');
        const cancelModalBtn = document.getElementById('cancel-modal');
        const closeModal = document.getElementById('close-modal');

        addSemesterBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });

        [cancelModalBtn, closeModal].forEach(btn => 
            btn.addEventListener('click', () => {
                modal.classList.add('hidden');
            })
        );
    </script>
</x-master-layout>
