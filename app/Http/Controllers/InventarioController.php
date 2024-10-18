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
}
