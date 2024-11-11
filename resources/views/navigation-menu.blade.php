<nav x-data="{ open: false }" class="bg-gray-50 bg-opacity-90 shadow-md border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Logo -->
            <div class="flex items-center space-x-4">
                <a href="{{ route('dashboard') }}" class="shrink-0">
                    <x-application-mark class="h-10 w-auto" />
                </a>
                <!-- Primary Navigation Links -->
                <div class="hidden space-x-8 sm:flex">
                    {{-- <x-nav-link href="{{ route('grupos.index') }}" :active="request()->routeIs('grupos.index')" class="hover:underline">
                        <i class="bi bi-people me-2"></i>{{ __('Grupos') }}
                    </x-nav-link> --}}
                
                </div>
            </div>

            <!-- Settings Dropdown and Profile -->
            <div class="hidden sm:flex items-center space-x-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center space-x-2 px-4 py-2 text-sm font-medium text-gray-600 bg-gray-50 hover:bg-gray-100 rounded-md focus:outline-none focus:ring">
                            <img class="h-8 w-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            <span>{{ Auth::user()->name }}</span>
                            <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M19.5 8.25l-7.5 7.5-7.5-7.5" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link href="{{ route('profile.show') }}">
                            <i class="bi bi-person me-2"></i>{{ __('Perfil') }}
                        </x-dropdown-link>
                        <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                            <i class="bi bi-box-arrow-right me-2"></i>{{ __('Cerrar sesión') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger Menu (Responsive) -->
            <div class="flex sm:hidden">
                <button @click="open = !open" class="p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition ease-in-out duration-150">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('grupos.index') }}" :active="request()->routeIs('grupos.index')">
                {{ __('Grupos') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('materias.index') }}" :active="request()->routeIs('materias.index')">
                {{ __('Materias') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('asistencias.index') }}" :active="request()->routeIs('asistencias.index')">
                {{ __('Asistencias') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link href="{{ route('graficas.index') }}" :active="request()->routeIs('graficas.index')">
                {{ __('Gráficas') }}
            </x-responsive-nav-link>
        </div>
    </div>
</nav>
