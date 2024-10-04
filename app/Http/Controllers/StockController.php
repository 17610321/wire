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
        $date = Date::now();

        $mat = Materiale::get();

        return view('stock.index', ['material' => $mat, 'date' => $date]);
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
        $stock->cantidad = $request->cantidad;
        $stock->fecha = $request->fecha;
        $stock->materiale_id = $request->materiale_id;
        $stock->user_id = $request->user_id;
        $stock->save();

        $stocks = Stock::all();
        return $stocks;
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
        //
    }
}
