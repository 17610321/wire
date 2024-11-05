<?php

namespace App\Http\Controllers;

use App\Models\Materiale;
use Illuminate\Http\Request;

class BuscadorController extends Controller
{



    public function buscar(Request $request)
    {

        $material = Materiale::where('descripcion', 'LIKE', '%' . $request->buscar . '%')->orWhere('name', 'LIKE', '%' . $request->buscar . '%')->paginate('10');

        return view('materiales.show', ['material' => $material]);
    }
}
