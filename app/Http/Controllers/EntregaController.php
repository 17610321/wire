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
        $entregas = DB::table('entregas')
            ->join('users', 'users.id', '=', 'entregas.user_id')
            ->join('materiales', 'materiales.id', '=', 'entregas.materiale_id')
            ->select('entregas.*', 'users.empleado', 'materiales.name', 'materiales.descripcion')
            ->where('entregas.user_id', $id)->paginate();

        return view('entregas.individual', ['entregas' => $entregas]);
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
        $request->validate(
            [

                'cantidad' => ['required', 'integer', 'max:100000'],


            ]
        );
        $entrega = new Entrega();
        $entrega->user_id = $request->user_id;
        $entrega->materiale_id = $request->materiale_id;
        $entrega->cantidad = $request->cantidad;
        $entrega->fecha = $request->fecha;
        $entrega->save();

        if ($entrega->save()) {
            $material = Materiale::find($request->materiale_id);
            $material->stock = $material->stock - $request->cantidad;
            $material->save();
        }


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
    public function edit(Entrega $entrega)
    {

        $date = Date::now();
        return view('stock.edit', compact('entrega', 'date'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Entrega $entrega)
    {
        $request->validate(
            ['cantidad' => ['required', 'integer', 'max:100000']]
        );
        $entrega->materiale_id = $request->materiale_id;
        $entrega->cantidad = $request->cantidad;

        if ($entrega->save()) {
            $material = Materiale::find($request->materiale_id);
            $material->stock = $material->stock - $request->cantidad;
            $material->save();
        }
        $entregas = Entrega::paginate('10');
        return view('entregas.total', compact('entregas'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Entrega $entrega)
    {
        if ($entrega->delete()) {
            $material = Materiale::find($entrega->materiale_id);
            $material->stock = $material->stock + $entrega->cantidad;
            $material->save();
        }
        $entregas = Entrega::paginate('10');
        return view('entregas.total', compact('entregas'));
    }
}
