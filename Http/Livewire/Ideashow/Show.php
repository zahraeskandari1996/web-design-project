<?php

namespace App\Http\Livewire\Ideashow;

use App\Models\Ideashow;
use Livewire\Component;

class Show extends Component
{
    public $ideashow;
    public function mount(Ideashow $ideashow)
    {
        $this->ideashow = $ideashow;
    }

    public function render()
    {
        return view('livewire.ideashow.show');
    }
}
