<?php

namespace App\Http\Controllers;

use App\Models\Materiale;
use App\Models\Stock;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Date;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $stock = Stock::paginate('10');
        return view('stock.show', compact('stock'));
    }

    public function index2(Materiale $materiale)
    {
        $date = Date::now();

        return view('stock.index', ['mat' => $materiale, 'date' => $date]);
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
        $stock = new Stock();
        $stock->materiale_id = $request->materiale_id;
        $stock->cantidad = $request->cantidad;
        $stock->fecha = $request->fecha;




        if ($stock->save()) {
            $material = Materiale::find($request->materiale_id);
            $material->stock = $material->stock + $request->cantidad;
            $material->save();
        }

        $material = Materiale::all();
        return view('stock.store', compact('material'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Stock $stock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stock $stock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stock $stock)
    {

        if ($stock->delete()) {
            $material = Materiale::find($stock->materiale_id);
            $material->stock = $material->stock - $stock->cantidad;
            $material->save();
        }
        $material = Materiale::all();
        return view('stock.store', compact('material'));
    }
}
