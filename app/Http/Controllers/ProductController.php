<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('admin.products.index', compact('products'));
    }

    
    public function create()
    {
        return view('admin.products.create');
    }

    
    public function store(StoreProductRequest $request)
    {
        Product::create($request->validated());

        return redirect()->route('admin.products.index')->with('success', 'Producto creada exitosamente');
    }

    
    public function show(Product $product)
    {
        //
    }

    
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->validated());

        return redirect()->route('admin.products.index')->with('success', 'Producto editado exitosamente');
    }

    
    public function destroy(Product $product)
    {
        $product->delete();

        return back();
    }
}
