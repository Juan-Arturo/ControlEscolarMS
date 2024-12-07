<x-master-layout title="Editar Materia">
    <div class="min-h-screen bg-gray-100 flex flex-col justify-start items-center background">
        <div class="container mx-auto py-10 ">
            <h1 class="text-3xl font-bold text-[#4E232E] mb-6 text-center">Editar Materia</h1>

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
                <form action="{{ route('materias.update', $materia->id) }}" method="POST">
                    @csrf
                    @method('PUT') <!-- Método PUT para actualizar la materia -->

                    <!-- Nombre de la Materia -->
                    <div class="mb-4">
                        <label for="nombre" class="block text-[#621132] font-semibold mb-2">Nombre de la Materia</label>
                        <input type="text" id="nombre" name="nombre"
                            value="{{ old('nombre', $materia->nombre) }}"
                            class="w-full px-4 py-2 border border-[#902449] rounded-lg focus:outline-none focus:ring-2 focus:ring-[#285C4D]"
                            placeholder="Ingrese el nombre de la materia" required>
                    </div>

                    <!-- Botón de Guardar Cambios -->
                    <div class="flex justify-center">
                        <button type="submit"
                            class="bg-[#902449] text-white px-8 py-3 rounded-lg hover:bg-[#621132] focus:outline-none focus:ring-2 focus:ring-[#13322B]">
                            Guardar Cambios
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-master-layout>
