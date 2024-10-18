<?php

namespace App\Http\Controllers;

use App\Models\Entrega;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventarioController extends Controller
{

    public function total()
    {
        $entregas = Entrega::all();
        return view('entregas.total', compact('entregas'));
    }


    public function mostrar()
    {
        $id = Auth::user()->id;
        $entregas = Entrega::select()
            ->where('user_id', '=', $id)
            ->get();

        return view('entregas.show', compact('entregas'));
    }
}
