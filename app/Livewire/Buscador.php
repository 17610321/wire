<?php

namespace App\Livewire;

use App\Models\Materiale;
use Livewire\Component;



class Buscador extends Component


{

    public $search;

    public function render()
    {
        $material = Materiale::all();
        return view('livewire.buscador', compact('material'));
    }
}
