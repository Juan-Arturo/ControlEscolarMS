<x-master-layout title="Crear Materia">
    <div class="min-h-screen bg-gray-100 flex flex-col justify-start items-center background">
        <div class="container mx-auto py-10">
            <h1 class="text-3xl font-bold text-[#4E232E] mb-6 text-center">Crear Materias</h1>

            <!-- Notificación de éxito usando SweetAlert2 -->
            @if (session('success'))
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            title: '¡Éxito!',
                            text: "{{ session('success') }}",
                            icon: 'success',
                            confirmButtonText: 'Aceptar',
                            confirmButtonColor: '#621132'
                        });
                    });
                </script>
            @endif

            <!-- Notificación de error usando SweetAlert2 -->
            @if (session('error'))
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        Swal.fire({
                            title: 'Error',
                            text: "{{ session('error') }}",
                            icon: 'error',
                            confirmButtonText: 'Aceptar',
                            confirmButtonColor: '#621132'
                        });
                    });
                </script>
            @endif

            <div class="max-w-2xl mx-auto shadow-lg bg-white rounded-lg p-8">
                <form action="{{ route('materias.store') }}" method="POST">
                    @csrf

                    <!-- Nombre de la Materia -->
                    <div class="mb-4">
                        <label for="nombre" class="block text-[#621132] font-semibold mb-2">Nombre de la Materia</label>
                        <input type="text" id="nombre" name="nombre"
                            class="w-full px-4 py-2 border border-[#902449] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#285C4D]"
                            placeholder="Ingrese el nombre de la materia" required>
                    </div>

                    <!-- Semestre -->
                    <div class="mb-4">
                        <label for="semestre_id" class="block text-[#621132] font-semibold mb-2">Semestre</label>
                        <select id="semestre_id" name="semestre_id"
                            class="w-full px-4 py-2 border border-[#902449] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#285C4D]"
                            required>
                            <option value="" disabled selected>Seleccione el semestre</option>
                            @foreach ($semestres as $semestre)
                                <option value="{{ $semestre->id }}">{{ $semestre->semestre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Botones -->
                    <div class="flex justify-between">
                        <!-- Botón de Redirigir -->
                        <a href="{{ route('materias.index') }}"
                            class="bg-[#285C4D] text-white px-8 py-3 rounded-lg hover:bg-[#13322B] focus:outline-none focus:ring-2 focus:ring-[#13322B]">
                            Ver Materias
                        </a>

                        <!-- Botón de Guardar -->
                        <button type="submit"
                            class="bg-[#902449] text-white px-8 py-3 rounded-lg hover:bg-[#621132] focus:outline-none focus:ring-2 focus:ring-[#13322B]">
                            Guardar Materia
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master-layout>
