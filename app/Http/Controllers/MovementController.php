<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovementRequest;
use App\Http\Requests\UpdateMovementRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\Movement;


class MovementController extends Controller
{
    
    public function index()
    {
        $movements = Movement::with(['category', 'product'])->get();

        return view('admin.movements.index', compact('movements'));
    }

   
    public function create()
    {
        

        $categories = Category::all();

        $products = Product::all();

        return view('admin.movements.create', compact('categories', 'products'));
    }


    public function store(StoreMovementRequest $request)
    {
        Movement::create($request->validated());

        return redirect()->route('admin.movements.index')->with('success', 'Movimiento creado exitosamente');
    }

    
    public function show(Movement $movement)
    {
        //
    }

  public function edit(Movement $movement)
    {
       
        $categories = Category::all();

        $products = Product::all();

        return view('admin.movements.edit', compact('category', 'products', 'movement'));
    }

  public function update(UpdateMovementRequest $request, Movement $movement)
    {
        $movement->update($request->validated());

        return redirect()->route('admin.movements.index')->with('success', 'Movimiento editado exitosamente');
    }

  public function destroy(Movement $movement)
    {
        $task->delete();

        return back();
    }
}
