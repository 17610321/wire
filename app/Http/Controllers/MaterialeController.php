<?php

namespace App\Http\Controllers;

use App\Models\Materiale;
use App\Models\User;
use Illuminate\Http\Request;

class MaterialeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()

    {

        return view('materiales.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $materiale = new Materiale();
        $materiale->sku = $request->sku;
        $materiale->name = $request->name;
        $materiale->descripcion = $request->descripcion;
        $materiale->user_id = $request->user_id;
        $materiale->stock = $request->stock;
        $materiale->save();

        $material = Materiale::all();
        return view('materiales.show', compact('material'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Materiale $materiale)
    {
        $material = Materiale::all();
        return view('materiales.show', compact('material'));

        /**agregar db con join para hacer búsquedas con la paginacion */
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Materiale $materiale)
    {

        return view('materiales.editar', compact('materiale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Materiale $materiale)
    {
        $materiale->sku = $request->sku;
        $materiale->name = $request->name;
        $materiale->descripcion = $request->descripcion;
        $materiale->save();

        $material = Materiale::all();
        return view('materiales.show', compact('material'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Materiale $materiale)
    {

        $materiale->delete();
        $material = Materiale::all();
        return view('materiales.show', compact('material'));
    }
}
