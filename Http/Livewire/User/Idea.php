<?php

namespace App\Http\Livewire\User;

use App\Models\Idea as ModelsIdea;
use Livewire\Component;

class Idea extends Component
{
    public $idea;
    public function render()
    {
        return view('livewire.user.idea');
    }
}
