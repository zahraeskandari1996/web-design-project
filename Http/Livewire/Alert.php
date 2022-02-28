<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Mockery\Undefined;

class Alert extends Component
{
    protected $listeners = ['success' => 'success'];

    public function render()
    {
        return view('livewire.alert');
    }

    public function success($message, $redirect = null)
    {
        redirect($redirect)->with('success', $message);
    }
}
