<?php

namespace App\Http\Controllers;

use App\Models\Entrega;
use App\Models\Materiale;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
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
    public function mostrar(User $user)
    {

        $usuario = User::find($user);
        $entregas = DB::select('SELECT * FROM entregas');
        return $entregas;
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
        $entrega = new Entrega();
        $entrega->user_id = $request->user_id;
        $entrega->materiale_id = $request->materiale_id;
        $entrega->cantidad = $request->cantidad;
        $entrega->fecha = $request->fecha;
        $entrega->save();

        $entregas = Entrega::paginate('10');
        return view('entregas.show', compact('entregas'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Entrega $entrega)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Entrega $entrega)
    {
        //
    }

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
