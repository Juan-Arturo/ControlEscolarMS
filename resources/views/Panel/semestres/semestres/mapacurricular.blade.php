<x-master-layout title="Mapa Curricular">
    <div class="min-h-screen py-2 px-6 bg-gradient-to-b from-gray-100 via-white to-gray-200">
        <div class="container mx-auto">
            <!-- Título principal -->
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold text-[#621132] tracking-wide">Mapa Curricular</h1>
                <p class="text-base text-gray-600 mt-2">
                    Explora los semestres y materias de forma interactiva.
                </p>
            </div>

            <!-- Línea del tiempo -->
            <div class="relative border-l-4 border-[#621132] pl-6">
                @foreach($semestres as $semestre)
                    <div class="mb-8 group">
                        <!-- Punto en la línea -->
                        <div class="absolute w-5 h-5 bg-[#621132] rounded-full -left-2 border-4 border-gray-50"></div>

                        <!-- Botón del semestre -->
                        <button 
                            onclick="toggleAccordion({{ $loop->iteration }})"
                            class="flex items-center justify-between w-full bg-white px-6 py-4 rounded-lg shadow-md hover:shadow-lg transition-all duration-300 border-l-4 border-transparent hover:border-[#621132]">
                            <!-- Título y subtítulo -->
                            <div class="flex-grow text-left">
                                <h2 class="text-lg font-semibold text-[#621132] group-hover:text-[#9D2449] transition-colors duration-300">
                                    {{ $semestre->semestre }}
                                </h2>
                                <p class="text-sm text-gray-500">{{ $semestre->nombre }}</p>
                            </div>
                            <!-- Ícono de expansión -->
                            <span id="icon-{{ $loop->iteration }}" class="text-xl text-gray-500 group-hover:text-[#621132] transform transition-transform duration-300">
                                &#9656;
                            </span>
                        </button>

                        <!-- Contenido desplegable -->
                        <div id="accordion-{{ $loop->iteration }}" class="hidden overflow-hidden transition-all duration-500 ease-in-out">
                            <div class="bg-gradient-to-r from-[#f8f4f9] to-gray-100 p-5 rounded-lg shadow-inner mt-2">
                                <p class="text-gray-700 mb-4 text-sm">{{ $semestre->descripcion }}</p>
                                <h3 class="text-base font-bold text-[#621132] mb-3">Materias:</h3>
                                <ul class="space-y-2">
                                    @foreach($semestre->materias as $materia)
                                        <li class="flex items-center bg-white shadow-sm p-3 rounded-lg transition hover:shadow-md hover:bg-gray-50">
                                            <span class="w-8 h-8 bg-[#621132] text-white rounded-full flex items-center justify-center text-xs font-semibold mr-3">
                                                {{ $loop->iteration }}
                                            </span>
                                            <span class="text-gray-800 text-sm">{{ $materia->nombre }}</span>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Script para acordeón -->
    <script>
        function toggleAccordion(id) {
            const accordion = document.getElementById(`accordion-${id}`);
            const icon = document.getElementById(`icon-${id}`);
            if (accordion.classList.contains('hidden')) {
                accordion.classList.remove('hidden');
                icon.style.transform = 'rotate(90deg)';
            } else {
                accordion.classList.add('hidden');
                icon.style.transform = 'rotate(0deg)';
            }
        }
    </script>
</x-master-layout>