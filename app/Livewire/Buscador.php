<?php

namespace App\Livewire;

use App\Models\Materiale;
use Livewire\Component;
use Illuminate\Support\Facades\DB;



class Buscador extends Component


{

    public $buscar;


    public function render()
    {

        $material = Materiale::where('name', 'like', '%' . $this->buscar . '%')->get();
        return view('livewire.buscador', ['material' => $material]);
    }
}
