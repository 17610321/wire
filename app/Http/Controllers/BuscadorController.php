<?php

namespace App\Http\Controllers;

use App\Models\Materiale;
use Illuminate\Http\Request;

class BuscadorController extends Controller
{

    public $buscar;

    public function buscar()
    {
        $material = Materiale::Where('descripcion', 'LIKE', '%' . $this->buscar . '%')->orWhere('name', 'LIKE', '%' . $this->buscar . '%')->paginate('10');

        return view('materiales.show', ['material' => $material]);
    }
}
