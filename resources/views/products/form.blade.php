<x-layout meta-title="{{ isset($product->id) ? 'Editar Producto' : 'Crear Producto' }}">

    <div class="max-w-2xl mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
        <h1 class="text-center text-2xl font-bold mb-6">
            <span class="material-symbols-outlined">edit</span>
            {{ isset($product->id) ? 'Editar Producto' : 'Crear Producto' }}
        </h1>

        {{-- Mostrar mensaje de exito --}}
        @if (session('status'))
        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded flex items-center">
            <span class="material-symbols-outlined mr-2">check_circle</span>
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" action="{{ isset($product->id) ? route('productos.update', $product) : route('productos.store') }}" class="space-y-4">
            @csrf
            @isset($product->id)
            @method('PATCH')
            @endisset

            {{-- Nombre --}}
            <div>
                <label for="name" class="block font-medium text-gray-700 flex items-center">
                    <span class="material-symbols-outlined mr-2">badge</span> Nombre
                </label>
                <input type="text" name="name" id="name" class="w-full p-2 border rounded @error('name') border-red-500 @enderror" value="{{ old('name', $product->name) }}" required>
                @error('name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            {{-- Descripcion --}}
            <div>
                <label for="description" class="block font-medium text-gray-700 flex items-center">
                    <span class="material-symbols-outlined mr-2">description</span> Descripción
                </label>
                <textarea name="description" id="description" rows="4" class="w-full p-2 border rounded @error('description') border-red-500 @enderror" required>{{ old('description', $product->description) }}</textarea>
                @error('description') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            {{-- Precio --}}
            <div>
                <label for="price" class="block font-medium text-gray-700 flex items-center">
                    <span class="material-symbols-outlined mr-2">attach_money</span> Precio
                </label>
                <input type="number" name="price" id="price" min="1" class="w-full p-2 border rounded @error('price') border-red-500 @enderror" value="{{ old('price', $product->price) }}" required>
                @error('price') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            {{-- Stock --}}
            <div>
                <label for="stock" class="block font-medium text-gray-700 flex items-center">
                    <span class="material-symbols-outlined mr-2">inventory</span> Stock
                </label>
                <input type="number" name="stock" min="0" id="stock" class="w-full p-2 border rounded @error('stock') border-red-500 @enderror" value="{{ old('stock', $product->stock) }}" required>
                @error('stock') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            {{-- Imagen --}}
            <div>
                <label for="image_url" class="block font-medium text-gray-700 flex items-center">
                    <span class="material-symbols-outlined mr-2">image</span> URL de la Imagen
                </label>
                <input type="text" name="image_url" id="image_url" class="w-full p-2 border rounded @error('image_url') border-red-500 @enderror" value="{{ old('image_url', $product->image_url) }}" required>
                @error('image_url') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            {{-- Boton de enviar --}}
            <div class="text-center">
                <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded shadow hover:bg-blue-600 transition flex items-center justify-center mx-auto">
                    <span class="material-symbols-outlined mr-2">save</span>
                    {{ isset($product->id) ? 'Actualizar' : 'Guardar' }}
                </button>
            </div>
        </form>
    </div>
</x-layout>