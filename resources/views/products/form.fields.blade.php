<div class="mb-3">
    <label for="name" class="form-label">Product Name</label>
    <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $product->name) }}" required>
    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" rows="5" required>{{ old('description', $product->description) }}</textarea>
    @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="number" name="price" id="price" min="1" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $product->price) }}" required>
    @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="stock" class="form-label">Stock</label>
    <input type="number" name="stock" id="stock" min="0" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock', $product->stock) }}" required>
    @error('stock') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>

<div class="mb-3">
    <label for="image_url" class="form-label">Image URL</label>
    <input type="text" name="image_url" id="image_url" class="form-control @error('image_url') is-invalid @enderror" value="{{ old('image_url', $product->image_url) }}" required>
    @error('image_url') <div class="invalid-feedback">{{ $message }}</div> @enderror
</div>