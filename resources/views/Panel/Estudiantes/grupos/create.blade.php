<x-master-layout title="Grupos">
  <div class="min-h-screen bg-gray-100 flex items-start py-6 justify-center background">
      <div class="max-w-md w-full space-y-8 bg-white shadow-2xl rounded-lg p-10">
          <div>
              <h2 class="text-center text-3xl font-extrabold text-[#621132]">Registrar Grado y Grupo</h2>
              <p class="mt-2 text-center text-sm text-gray-600">
                  Completa los datos del grado y grupo de los alumnos
              </p>
          </div>

          <form action="{{ route('grupos.store') }}" method="POST" class="mt-8 space-y-6" novalidate>
              @csrf
              <!-- Grado -->
              <div>
                  <label for="grado" class="block text-[#621132] font-semibold mb-2">Grado</label>

                  <select id="grado" name="grado" 
                      class="block w-full bg-gray-100 border border-gray-300 rounded-lg py-3 px-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#9D2449] focus:border-transparent transition duration-300 ease-in-out">
                      <option value="">Selecciona el grado</option>
                      <option value="1">1°</option>
                      <option value="2">2°</option>
                      <option value="3">3°</option>
                      <option value="4">4°</option>
                      <option value="5">5°</option>
                      <option value="6">6°</option>
                  </select>
                  <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                      <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                          </path>
                      </svg>
                  </div>
              </div>

              <!-- Grupo -->
              <div>
                  <label for="grupo" class="block text-[#621132] font-semibold mb-2">Grupo</label>
                  <input type="text" id="grupo" name="grupo" placeholder="Ej: A, B, C"
                      class="block w-full bg-gray-100 border border-gray-300 rounded-lg py-3 px-4 text-gray-700 focus:outline-none focus:ring-2 focus:ring-[#9D2449] focus:border-transparent transition duration-300 ease-in-out" />
              </div>

              <!-- Botón para registrar -->
              <div>
                  <button type="submit"
                      class="w-full flex justify-center py-3 px-4 border border-transparent text-lg font-medium rounded-lg text-white bg-[#9D2449] hover:bg-[#621132] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#621132] transition duration-300 ease-in-out transform hover:scale-105">
                      Registrar
                  </button>
              </div>
          </form>
      </div>
  </div>
</x-master-layout>
