<x-layout meta-title="Inicio">
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">
        <div class="max-w-2xl text-center p-8 bg-white shadow-2xl rounded-lg">

            <div class="mb-4 flex justify-center">
                <span class="material-symbols-outlined text-blue-500 text-6xl">inventory_2</span>
            </div>

            <h1 class="text-4xl font-extrabold text-gray-800">Bienvenido a Gestion de Productos</h1>
            <p class="mt-4 text-gray-600 text-lg">
                Una proyecto de clase para la gestión de productos.
            </p>

            <div class="mt-6">
                <a href="{{ route('productos.index') }}"
                    class="inline-flex items-center px-6 py-3 bg-blue-500 text-white text-lg font-semibold rounded-lg shadow-md hover:bg-blue-600 transition">
                    <span class="material-symbols-outlined mr-2">shopping_cart</span> Explorar Productos
                </a>
            </div>
        </div>
    </div>
</x-layout>