<?php

namespace App\Http\Controllers;

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
        $material = Materiale::all();
        return view('ordenes.index', compact('material'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ordene $ordene)
    {
        //
    }

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
        //
    }
}
