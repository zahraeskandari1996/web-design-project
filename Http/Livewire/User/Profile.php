<?php

namespace App\Http\Livewire\User;
use Livewire\WithFileUploads;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Profile extends Component
{


    // Triggered before render, set profile details to edit-inputs
    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->username = $user->username;
        $this->email = $user->email;
        $this->degree = $user->degree;
        $this->field = $user->field;
    }

    public function render()
    {
        return view('livewire.user.profile');
    }




}
