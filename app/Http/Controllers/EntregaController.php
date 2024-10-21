<?php

namespace App\Http\Controllers;

use App\Models\Entrega;
use App\Models\Materiale;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Foundation\Console\ViewMakeCommand;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class EntregaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $date = Date::now();
        $user = DB::select('SELECT * FROM users ');
        $material = Materiale::all();
        return view('entregas.index', compact('user', 'material', 'date'));
    }

    public function mostrar()
    {
        $id = Auth::user()->id;
        $entregas = Entrega::select()
            ->where('user_id', '=', $id)
            ->get();
        $entregas = Entrega::paginate('10');

        return view('entregas.show', compact('entregas'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Entrega $entrega)
    {
        $date = Date::now();

        $entregas = Entrega::find($entrega);
        return view('entregas.actualizar', compact('entregas', 'date'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $entrega = new Entrega();
        $entrega->user_id = $request->user_id;
        $entrega->materiale_id = $request->materiale_id;
        $entrega->cantidad = $request->cantidad;
        $entrega->fecha = $request->fecha;
        $entrega->save();




        $entregas = Entrega::paginate('10');
        return view('entregas.total', compact('entregas'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Entrega $entrega) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entrega $entrega) {}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entrega $entrega)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entrega $entrega)
    {
        //
    }
}
