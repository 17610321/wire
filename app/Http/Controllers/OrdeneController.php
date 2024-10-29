<?php

namespace App\Http\Controllers;

use App\Models\Entrega;
use App\Models\Materiale;
use App\Models\Ordene;
use Illuminate\Http\Request;

class OrdeneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $ordenes = Ordene::paginate('10');
        return view('ordenes.show', compact('ordenes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $entrega = Entrega::all();
        return view('ordenes.index', compact('entrega'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $orden = new Ordene();
        $orden->cliente = $request->cliente;
        $orden->entrega_id = $request->entrega_id;

        $orden->cantidad = $request->cantidad;
        $orden->fecha = $request->fecha;


        if ($orden->save()) {
            $entrega = Entrega::find($request->entrega_id);
            $entrega->cantidad = $entrega->cantidad - $request->cantidad;
            $entrega->save();
        }

        $ordenes = Ordene::paginate('10');
        return view('ordenes.show', compact('ordenes'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Ordene $ordene) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ordene $ordene)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ordene $ordene)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ordene $ordene)
    {
        if ($ordene->delete()) {
            $entrega = Entrega::find($ordene->entrega_id);
            $entrega->cantidad = $entrega->cantidad + $ordene->cantidad;
            $entrega->save();
        }
        $entregas = Entrega::paginate('10');
        return view('entregas.individual', compact('entregas'));
    }
}
