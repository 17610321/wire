<?php

namespace App\Http\Controllers;

use App\Models\Materiale;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Attributes\Validate;

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
        $request->validate(
            [
                'sku' => ['required', 'integer', 'max:10'],
                'name' => ['required', 'string', 'max:50'],
                'descripcion' => ['required', 'string', 'max:255'],
                'user_id' => ['required', 'integer'],
                'stock' => ['required', 'integer'],


            ]
        );


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
        $request->validate(
            [
                'sku' => ['required', 'integer', 'max:10'],
                'name' => ['required', 'string', 'max:50'],
                'descripcion' => ['required', 'string', 'max:255'],
                'stock' => ['required', 'integer', 'max:100000'],


            ]
        );
        $materiale->sku = $request->sku;
        $materiale->name = $request->name;
        $materiale->descripcion = $request->descripcion;
        $materiale->stock = $request->stock;
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
