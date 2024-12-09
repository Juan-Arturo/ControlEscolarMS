<x-master-layout title="Mapa Curricular">
    <div class="min-h-screen py-2 px-6 bg-gradient-to-b from-gray-100 to-white">
        <div class="container mx-auto">
            <!-- Título principal -->
            <div class="text-center mb-5">
                <h1 class="text-6xl font-bold text-[#621132] tracking-wide">Mapa Curricular</h1>
                <p class="text-lg text-gray-600 mt-4">
                    Explora el recorrido académico semestre por semestre con todos los detalles.
                </p>
            </div>

            <!-- Contenedor de semestres -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                @foreach($semestres as $semestre)
                    <!-- Card de semestre -->
                    <div class="bg-white shadow-xl rounded-xl overflow-hidden transform transition hover:scale-105 hover:shadow-2xl">
                        <!-- Encabezado -->
                        <div class="bg-[#621132] text-white px-8 py-6">
                            <h2 class="text-3xl font-bold">{{ $semestre->semestre }}</h2>
                            <p class="text-lg text-gray-300">{{ $semestre->nombre }}</p>
                        </div>

                        <!-- Contenido -->
                        <div class="p-8 space-y-6">
                            <!-- Descripción -->
                            <p class="text-gray-700 text-base leading-relaxed">
                                {{ $semestre->descripcion }}
                            </p>

                            <!-- Lista de materias -->
                            <div>
                                <h3 class="text-[#621132] text-2xl font-semibold mb-4">Materias:</h3>
                                <ul class="space-y-3">
                                    @foreach($semestre->materias as $materia)
                                        <li class="flex items-center bg-gray-100 rounded-lg shadow-sm p-3 transition hover:bg-gray-200">
                                            <span class="w-10 h-10 bg-[#621132] text-white flex items-center justify-center rounded-full font-semibold mr-4">
                                                {{ $loop->iteration }}
                                            </span>
                                            <span class="text-gray-800 font-medium">{{ $materia->nombre }}</span>
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
</x-master-layout>
