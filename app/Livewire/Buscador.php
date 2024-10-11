<?php

namespace App\Livewire;

use App\Models\Materiale;
use Livewire\Component;



class Buscador extends Component


{

    public $buscar;

    public function render()
    {
        $material = Materiale::where('name', 'like', '%' . $this->$buscar . '%');
        return view('livewire.buscador', compact('material'));
    }
}
