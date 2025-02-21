<x-layout meta-title="Listado de Productos">
    <div class="max-w-full mx-auto mt-10 p-6">
        <h1 class="text-center text-3xl font-bold mb-6">Listado de Productos</h1>

        {{-- Boton para crear nuevo producto --}}
        <div class="mb-4 text-end">
            <a class="inline-flex items-center px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition"
                href="{{ route('productos.create') }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Crear nuevo producto">
                <span class="material-symbols-outlined mr-2">add</span> Crear nuevo producto
            </a>
        </div>

        {{-- Verificar si hay productos --}}
        @if ($products->isEmpty())
        <p class="text-center text-gray-600">No hay productos disponibles.</p>
        @else
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6">
            @foreach ($products as $product)
            <div class="bg-white shadow-md rounded-lg p-4 mb-4">

                @if ($product->image_url)
                <div class="mb-4">
                    <img src="{{ $product->image_url }}" alt="{{ $product->name }}" class="w-full h-auto rounded-md">
                </div>
                @endif

                <h4 class="text-xl font-semibold mb-2">
                    <a href="{{ route('productos.show', $product) }}" class="text-blue-500 hover:text-blue-600"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Ver detalles del producto">
                        {{ $product->name }}
                    </a>
                </h4>
                <p class="text-gray-600 mb-2">{{ $product->description }}</p>
                <p class="text-gray-800 font-bold">Precio: ${{ number_format($product->price, 2) }}</p>
                <p class="text-gray-800 mb-4">Stock: {{ $product->stock }}</p>

                <div class="flex justify-end space-x-2">
                    {{-- Boton de Editar --}}
                    <a href="{{ route('productos.edit', $product) }}" class="inline-flex items-center px-3 py-2 bg-yellow-500 text-white rounded-md hover:bg-yellow-600 transition"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Editar producto">
                        <span class="material-symbols-outlined mr-1">edit</span> Editar
                    </a>

                    {{-- Botón de eliminar  --}}
                    <button type="button" class="inline-flex items-center px-3 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition eliminar-producto"
                        data-url="{{ route('productos.destroy', $product) }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar producto">
                        <span class="material-symbols-outlined mr-1">delete</span> Eliminar
                    </button>

                    <form action="{{ route('productos.destroy', $product) }}" method="POST" class="form-eliminar" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </div>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</x-layout>