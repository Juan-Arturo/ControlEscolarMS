<x-master-layout title="Materias Impartidas">
    <div class="min-h-screen background p-8">
        <div class="bg-white rounded-xl shadow-lg overflow-hidden">

            <!-- Header -->
            <div class="bg-gradient-to-r from-[#621132] to-[#9D2449] text-white py-6 px-10 text-center">
                <h1 class="text-4xl font-semibold">Materias Impartidas y Grupos</h1>
                <p class="text-lg mt-2">Gestiona las materias y grupos que impartes de manera eficiente</p>
            </div>

            <!-- Panel de Materias -->
            <div class="px-6 py-8">
                <h2 class="text-3xl font-bold text-[#621132]">Mis Materias</h2>
                <div class="mt-6 overflow-x-auto">
                    <table class="min-w-full bg-white rounded-lg shadow-md">
                        <thead class="bg-[#D4C19C] text-[#621132]">
                            <tr>
                                <th class="py-4 px-6 text-left">Materia</th>
                                <th class="py-4 px-6 text-left">Créditos</th>
                                <th class="py-4 px-6 text-left">Grupos</th>
                                <th class="py-4 px-6 text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Ejemplo de materia -->
                            <tr class="border-t border-[#D4C19C]">
                                <td class="py-4 px-6">Matemáticas Avanzadas</td>
                                <td class="py-4 px-6">4</td>
                                <td class="py-4 px-6">1A, 2B</td>
                                <td class="py-4 px-6 text-center">
                                    <button class="px-4 py-2 bg-[#621132] text-white rounded-md hover:bg-[#4E232E] transition duration-300">Ver Grupos</button>
                                    <button class="ml-2 px-4 py-2 bg-[#9D2449] text-white rounded-md hover:bg-[#621132] transition duration-300">Editar</button>
                                    <button class="ml-2 px-4 py-2 bg-[#285C4D] text-white rounded-md hover:bg-[#13322B] transition duration-300">Eliminar</button>
                                </td>
                            </tr>
                            <!-- Más materias se agregarían aquí -->
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Panel de Grupos -->
            <div class="px-6 py-8 mt-8 bg-[#F8F8F8] rounded-lg shadow-inner">
                <h2 class="text-3xl font-bold text-[#621132]">Mis Grupos</h2>
                <div class="mt-6 overflow-x-auto">
                    <table class="min-w-full bg-white rounded-lg shadow-md">
                        <thead class="bg-[#D4C19C] text-[#621132]">
                            <tr>
                                <th class="py-4 px-6 text-left">Grupo</th>
                                <th class="py-4 px-6 text-left">Materia</th>
                                <th class="py-4 px-6 text-left">Cantidad de Alumnos</th>
                                <th class="py-4 px-6 text-center">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Ejemplo de grupo -->
                            <tr class="border-t border-[#D4C19C]">
                                <td class="py-4 px-6">1A</td>
                                <td class="py-4 px-6">Matemáticas Avanzadas</td>
                                <td class="py-4 px-6">30</td>
                                <td class="py-4 px-6 text-center">
                                    <button class="px-4 py-2 bg-[#621132] text-white rounded-md hover:bg-[#4E232E] transition duration-300">Ver Alumnos</button>
                                    <button class="ml-2 px-4 py-2 bg-[#9D2449] text-white rounded-md hover:bg-[#621132] transition duration-300">Editar</button>
                                    <button class="ml-2 px-4 py-2 bg-[#285C4D] text-white rounded-md hover:bg-[#13322B] transition duration-300">Eliminar</button>
                                </td>
                            </tr>
                            <!-- Más grupos se agregarían aquí -->
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-master-layout>
