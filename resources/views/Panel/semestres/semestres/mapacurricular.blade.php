<x-master-layout title="Mapa Curricular">
    <div class="min-h-screen py-12 px-8 background">
        <div class="container mx-auto">
            <!-- Título -->
            <div class="text-center mb-16">
                <h1 class="text-5xl font-extrabold text-[#621132] tracking-wide">Mapa Curricular</h1>
                <p class="text-lg text-gray-600 mt-4">
                    Explora el plan de estudios semestre por semestre.
                </p>
            </div>

            <!-- Semestres -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <!-- Semestre 1 -->
                <div class="shadow-lg rounded-xl overflow-hidden border border-gray-200 transition-transform transform hover:scale-105">
                    <div class="bg-[#621132] text-white p-6 flex items-center">
                        <span class="bg-white text-[#621132] w-12 h-12 flex items-center justify-center rounded-full text-2xl font-extrabold shadow-md mr-4">1</span>
                        <div>
                            <h2 class="text-2xl font-bold">Semestre 1</h2>
                            <p class="text-sm mt-2 text-gray-200">Fundamentos básicos del área.</p>
                        </div>
                    </div>
                    <ul class="p-6 space-y-4 bg-white">
                        <li class="flex items-center gap-4">
                            <span class="bg-[#621132] text-white w-8 h-8 flex items-center justify-center rounded-full text-sm font-bold shadow-lg">1</span>
                            <span class="text-gray-700 font-medium">Matemáticas I</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <span class="bg-[#621132] text-white w-8 h-8 flex items-center justify-center rounded-full text-sm font-bold shadow-lg">2</span>
                            <span class="text-gray-700 font-medium">Física I</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <span class="bg-[#621132] text-white w-8 h-8 flex items-center justify-center rounded-full text-sm font-bold shadow-lg">3</span>
                            <span class="text-gray-700 font-medium">Programación Básica</span>
                        </li>
                    </ul>
                </div>

                <!-- Semestre 2 -->
                <div class="shadow-lg rounded-xl overflow-hidden border border-gray-200 transition-transform transform hover:scale-105">
                    <div class="bg-[#4E232E] text-white p-6 flex items-center">
                        <span class="bg-white text-[#4E232E] w-12 h-12 flex items-center justify-center rounded-full text-2xl font-extrabold shadow-md mr-4">2</span>
                        <div>
                            <h2 class="text-2xl font-bold">Semestre 2</h2>
                            <p class="text-sm mt-2 text-gray-200">Consolidación de conceptos.</p>
                        </div>
                    </div>
                    <ul class="p-6 space-y-4 bg-white">
                        <li class="flex items-center gap-4">
                            <span class="bg-[#4E232E] text-white w-8 h-8 flex items-center justify-center rounded-full text-sm font-bold shadow-lg">1</span>
                            <span class="text-gray-700 font-medium">Matemáticas II</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <span class="bg-[#4E232E] text-white w-8 h-8 flex items-center justify-center rounded-full text-sm font-bold shadow-lg">2</span>
                            <span class="text-gray-700 font-medium">Física II</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <span class="bg-[#4E232E] text-white w-8 h-8 flex items-center justify-center rounded-full text-sm font-bold shadow-lg">3</span>
                            <span class="text-gray-700 font-medium">Programación Avanzada</span>
                        </li>
                    </ul>
                </div>

                <!-- Semestre 3 -->
                <div class="shadow-lg rounded-xl overflow-hidden border border-gray-200 transition-transform transform hover:scale-105">
                    <div class="bg-[#285C4D] text-white p-6 flex items-center">
                        <span class="bg-white text-[#285C4D] w-12 h-12 flex items-center justify-center rounded-full text-2xl font-extrabold shadow-md mr-4">3</span>
                        <div>
                            <h2 class="text-2xl font-bold">Semestre 3</h2>
                            <p class="text-sm mt-2 text-gray-200">Introducción a especializaciones.</p>
                        </div>
                    </div>
                    <ul class="p-6 space-y-4 bg-white">
                        <li class="flex items-center gap-4">
                            <span class="bg-[#285C4D] text-white w-8 h-8 flex items-center justify-center rounded-full text-sm font-bold shadow-lg">1</span>
                            <span class="text-gray-700 font-medium">Álgebra Lineal</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <span class="bg-[#285C4D] text-white w-8 h-8 flex items-center justify-center rounded-full text-sm font-bold shadow-lg">2</span>
                            <span class="text-gray-700 font-medium">Redes de Computadoras</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <span class="bg-[#285C4D] text-white w-8 h-8 flex items-center justify-center rounded-full text-sm font-bold shadow-lg">3</span>
                            <span class="text-gray-700 font-medium">Desarrollo Web</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-master-layout>
