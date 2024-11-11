
    
        <!-- Sidebar -->
        <aside class="w-72 bg-gradient-to-b from-[#621132] to-[#9D2449] text-white flex-shrink-0 shadow-2xl">
            <div class="p-6">
                <h2 class="text-3xl font-extrabold mb-8">Panel Principal</h2>
                
                <!-- Menú de navegación -->
                <nav class="space-y-6">
                    <!-- Sección Estudiantes -->
                    <div>
                        <button class="w-full text-left font-semibold py-3 px-4 flex items-center bg-[#4E232E] rounded-lg focus:outline-none hover:bg-[#621132] transition duration-300 transform hover:scale-105 shadow-md">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0v6m-5-5.236l5-2.764 5 2.764M5 18h14"></path>
                            </svg>
                            Estudiantes
                        </button>
                        <div class="pl-8 mt-3 space-y-2">
                            <a href="{{ route('grupos.index') }}" class="block text-gray-200 hover:text-white transition duration-300">Grupos</a>
                            <a href="{{ route('materias.index') }}" class="block text-gray-200 hover:text-white transition duration-300">Materias</a>
                            <a href="{{ route('asistencias.index') }}" class="block text-gray-200 hover:text-white transition duration-300">Asistencias</a>
                            <a href="{{ route('graficas.index') }}" class="block text-gray-200 hover:text-white transition duration-300">Gráficas</a>
                        </div>
                    </div>

                    <!-- Sección Semestres -->
                    <div>
                        <button class="w-full text-left font-semibold py-3 px-4 flex items-center bg-[#4E232E] rounded-lg focus:outline-none hover:bg-[#621132] transition duration-300 transform hover:scale-105 shadow-md">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12v8m0-8V5h2m2 0h2m2 0h2m2 0h2m2 0h2v7"></path>
                            </svg>
                            Semestres
                        </button>
                        <div class="pl-8 mt-3 space-y-2">
                            <a href="#" class="block text-gray-200 hover:text-white transition duration-300">Administración de Semestres</a>
                            <a href="#" class="block text-gray-200 hover:text-white transition duration-300">Materias Impartidas</a>
                        </div>
                    </div>

                    <!-- Sección Profesores -->
                    <div>
                        <button class="w-full text-left font-semibold py-3 px-4 flex items-center bg-[#4E232E] rounded-lg focus:outline-none hover:bg-[#621132] transition duration-300 transform hover:scale-105 shadow-md">
                            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m7-7l-7 7 7 7"></path>
                            </svg>
                            Profesores
                        </button>
                        <div class="pl-8 mt-3 space-y-2">
                            <a href="#" class="block text-gray-200 hover:text-white transition duration-300">Información Personal</a>
                            <a href="#" class="block text-gray-200 hover:text-white transition duration-300">Materias Impartidas</a>
                        </div>
                    </div>
                </nav>
            </div>
        </aside>

