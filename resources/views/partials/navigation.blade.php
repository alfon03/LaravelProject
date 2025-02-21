<nav class="bg-gray-900 text-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <a href="{{ route('home') }}" class="text-2xl font-bold flex items-center hover:text-gray-400" title="Inicio">
            <span class="material-symbols-outlined mr-2">storefront</span>
            Gestión de Productos
        </a>

        <div class="lg:hidden">
            <button class="text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                title="Abrir menú">
                <span class="material-symbols-outlined">menu</span>
            </button>
        </div>

        <div class="hidden lg:flex space-x-8">
            <ul class="flex items-center space-x-6">
                <li>
                    <a href="{{ route('home') }}" class="text-lg font-semibold flex items-center hover:text-gray-400 {{ request()->routeIs('home') ? 'text-gray-300' : '' }}"
                        title="Página principal">
                        <span class="material-symbols-outlined mr-2">home</span>
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('productos.index') }}" class="text-lg font-semibold flex items-center hover:text-gray-400 {{ request()->routeIs('productos.index') ? 'text-gray-300' : '' }}"
                        title="Ver productos">
                        <span class="material-symbols-outlined mr-2">shopping_cart</span>
                        Productos
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}" class="text-lg font-semibold flex items-center hover:text-gray-400 {{ request()->routeIs('about') ? 'text-gray-300' : '' }}"
                        title="Acerca de nosotros">
                        <span class="material-symbols-outlined mr-2">info</span>
                        About Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>