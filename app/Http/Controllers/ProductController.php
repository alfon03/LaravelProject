<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', ['products' => $products]);
    }

    public function create()
    {
        return view('products.form', ['product' => new Product()]);
    }

    public function store(SaveProductRequest $request)
    {
        $validated = $request->validated();

        $product = Product::create($validated);

        return redirect()->route('productos.index')->with('status', 'Producto creado exitosamente.');
    }

    public function show(Product $product)
    {
        return view('products.show', ['product' => $product]);
    }

    public function edit(Product $product)
    {
        return view('products.form', ['product' => $product]);
    }

    public function update(SaveProductRequest $request, Product $product)
    {
        $validated = $request->validated();

        $product->update($validated);

        return redirect()->route('productos.index')->with('status', 'Producto actualizado exitosamente.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('productos.index')->with('status', 'Producto eliminado!');
    }
}
