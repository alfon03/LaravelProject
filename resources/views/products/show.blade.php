<x-layout meta-title="Detalles del Producto">
    <div class="max-w-2xl mx-auto mt-10 p-8 bg-white shadow-lg rounded-lg border border-gray-200">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-900" role="heading" aria-level="1">
            {{ $product->name }}
        </h1>

        <div class="mb-6 flex justify-center" role="img" aria-labelledby="product-image">
            <img src="{{ $product->image_url }}" alt="Imagen de {{ $product->name }}" class="w-[500px] h-[350px] object-cover rounded-lg shadow-md" id="product-image" title="Imagen del producto">
        </div>

        <div class="text-gray-800 text-lg leading-relaxed" aria-labelledby="product-description">
            <p><strong class="font-semibold">Descripción:</strong> {{ $product->description }}</p>
            <p><strong class="font-semibold">Precio:</strong> <span class="text-green-600 font-bold">${{ number_format($product->price, 2) }}</span></p>
            <p><strong class="font-semibold">Stock:</strong> <span class="text-blue-600 font-bold">{{ $product->stock }}</span></p>
        </div>

        <div class="text-center mt-6">
            <a href="{{ route('productos.index') }}" class="inline-flex items-center px-6 py-3 bg-blue-500 text-white text-lg font-semibold rounded-lg shadow-md hover:bg-blue-600 transition" aria-label="Volver a la lista de productos" data-tooltip="Volver a la lista de productos">
                <span class="material-symbols-outlined mr-2 text-lg" aria-hidden="true">arrow_back</span>
                Volver
            </a>

        </div>
    </div>
</x-layout>