<?php

namespace App\Livewire\Projets;

use Livewire\Component;
use App\Models\Agribusiness;

class SelectMultipleCoopComponent extends Component
{
    public function render()
    {
        $agribusinesses = Agribusiness::all();

        return view('livewire.projets.select-multiple-coop-component',[
            'agribusinesses'=>$agribusinesses
        ] );
    }
}
