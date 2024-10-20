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


        $material = DB::table('materiales')->where('descripcion', 'like', '%' . $this->buscar . '%');

        return view('livewire.buscador', ['material' => $material]);
    }
}
