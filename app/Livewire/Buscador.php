<?php

namespace App\Livewire;

use App\Models\Materiale;
use DragonCode\Contracts\Http\Builder;
use Livewire\Component;
use Illuminate\Support\Facades\DB;



class Buscador extends Component


{

    public $buscar;


    public function render()
    {


        $material = Materiale::where('descripcion', 'LIKE', '%' . $this->buscar . '%')->orWhere('name', 'LIKE', '%' . $this->buscar . '%')->paginate('10');

        return view('livewire.buscador', ['material' => $material]);
    }
}
