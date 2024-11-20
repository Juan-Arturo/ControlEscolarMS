<x-master-layout title="Registrar Alumno">
    <div class="min-h-screen bg-gray-100 flex items-center justify-center background">
        <div class="max-w-4xl w-full space-y-8 bg-white shadow-2xl rounded-lg p-10">
            <div>
                <h2 class="text-center text-3xl font-extrabold text-[#621132]">Registrar Alumno</h2>
                <p class="mt-2 text-center text-sm text-gray-600">
                    Complete el siguiente formulario para registrar un nuevo alumno
                </p>
            </div>

            <form action="{{ route('alumnos.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Nombre -->
                    <div class="mt-6">
                        <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Ingresa el nombre del alumno">
                    </div>

                    <!-- Apellido Paterno -->
                    <div class="mt-6">
                        <label for="apellido_paterno" class="block text-sm font-medium text-gray-700">Apellido Paterno:</label>
                        <input type="text" name="apellido_paterno" id="apellido_paterno" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Ingresa el apellido paterno del alumno">
                    </div>

                    <!-- Apellido Materno -->
                    <div class="mt-6">
                        <label for="apellido_materno" class="block text-sm font-medium text-gray-700">Apellido Materno:</label>
                        <input type="text" name="apellido_materno" id="apellido_materno" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Ingresa el apellido materno del alumno">
                    </div>

                    <!-- CURP -->
                    <div class="mt-6">
                        <label for="curp" class="block text-sm font-medium text-gray-700">CURP:</label>
                        <input type="text" name="curp" id="curp" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Ingresa la CURP del alumno" maxlength="18">
                    </div>

                    <!-- Grupo -->
                    <div class="mt-6">
                        <label for="grupo_id" class="block text-sm font-medium text-gray-700">Grupo:</label>
                        <input type="text" id="grupo_id" value="{{ $grupoId ? $grupos->find($grupoId)->grado . '°' . $grupos->find($grupoId)->grupo : '' }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" readonly>
                        <input type="hidden" name="grupo_id" value="{{ $grupoId }}">
                    </div>

                    <!-- Fecha de Nacimiento -->
                    <div class="mt-6">
                        <label for="fecha_nacimiento" class="block text-sm font-medium text-gray-700">Fecha de Nacimiento:</label>
                        <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>

                    <!-- Especialidad -->
                    <div class="mt-6">
                        <label for="especialidad" class="block text-sm font-medium text-gray-700">Especialidad:</label>
                        <select name="especialidad" id="especialidad" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                            <option value="">Selecciona una especialidad</option>
                            <option value="Informática">Informática</option>
                            <option value="Contabilidad">Contabilidad</option>
                            <option value="Electrónica">Electrónica</option>
                            <option value="Quimica">Quimica</option>
                           
                        </select>
                    </div>

                    <!-- Seguro Médico -->
                    <div class="mt-6">
                        <label for="seguro_medico" class="block text-sm font-medium text-gray-700">Seguro Médico:</label>
                        <input type="text" name="seguro_medico" id="seguro_medico" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" placeholder="Ingresa el número de seguro médico">
                    </div>

                    <!-- Botón -->
                    <div class="mt-8 md:col-span-2">
                        <button type="submit" class="w-full inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#9D2449] hover:bg-[#621132] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#621132] transition duration-300 ease-in-out transform hover:scale-105">
                            Registrar Alumno
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</x-master-layout>

