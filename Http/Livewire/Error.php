<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Error extends Component
{

    public $for;

    public function render()
    {
        return view('livewire.error');
    }
}
