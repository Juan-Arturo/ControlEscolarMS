<x-master-layout title="Perfil del Docente">
    <div class="min-h-screen bg-gradient-to-br from-[#621132] to-[#4E232E]">
        <div class="max-w-6xl mx-auto bg-white shadow-2xl overflow-hidden">
            <!-- Header -->
            <div class="bg-gradient-to-r from-[#902449] to-[#621132] text-white py-8 px-10 flex items-center gap-6">
                <img class="w-32 h-32 rounded-full border-4 border-white shadow-md" src="{{ asset('img/avatar/B.jpeg') }}" >
                <div>
                    <h1 class="text-3xl font-extrabold">Juan José Gómez Robledo</h1>
                    <p class="text-lg font-medium">Docente de Matemáticas</p>
                </div>
            </div>

            <!-- Información principal -->
            <div class="px-10 py-8">
                <h2 class="text-2xl font-bold text-[#621132] border-b-2 border-[#902449] pb-2">Información Personal</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
                    <div class="flex items-center gap-4">
                        <div class="text-[#621132]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v16h16V4H4z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-[#4E232E]">CURP</p>
                            <p class="text-lg font-semibold text-[#13322B]">GOGRJU81H10GRMSI</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="text-[#621132]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h11M9 21V3M17 16h3M17 8h3" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-[#4E232E]">Teléfono</p>
                            <p class="text-lg font-semibold text-[#13322B]">123-456-7890</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="text-[#621132]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 2v6M8 2v6M3 10h18M12 14v8m-4-4h8" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-[#4E232E]">Correo Electrónico</p>
                            <p class="text-lg font-semibold text-[#13322B]">correo@ejemplo.com</p>
                        </div>
                    </div>

                    <div class="flex items-center gap-4">
                        <div class="text-[#621132]">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5V4H2v16h5m10 0V10" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-sm font-medium text-[#4E232E]">Especialidad</p>
                            <p class="text-lg font-semibold text-[#13322B]">Matemáticas Avanzadas</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Información adicional -->
            <div class=" px-10 py-8">
                <h2 class="text-2xl font-bold text-[#621132] border-b-2 border-[#902449] pb-2">Información Adicional</h2>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-6">
                    <div>
                        <p class="text-sm font-medium text-[#4E232E]">Fecha de Nacimiento</p>
                        <p class="text-lg font-semibold text-[#13322B]">7 de noviembre de 1985</p>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-[#4E232E]">Dirección</p>
                        <p class="text-lg font-semibold text-[#13322B]">Calle Siempre Viva #123, Colonia Centro</p>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-[#4E232E]">Último Grado de Estudios</p>
                        <p class="text-lg font-semibold text-[#13322B]">Maestría en Educación</p>
                    </div>
                    <div>
                        <p class="text-sm font-medium text-[#4E232E]">Años de Experiencia</p>
                        <p class="text-lg font-semibold text-[#13322B]">5 años</p>
                    </div>
                </div>
            </div>

            <!-- Botón de acción -->
            <div class=" px-10 py-4 flex justify-end">
                <button class="px-6 py-3 bg-[#902449] text-white rounded-lg shadow-lg hover:bg-[#621132] transition-transform transform hover:scale-105">Editar Información</button>
            </div>
        </div>
    </div>
</x-master-layout>
