<?php

namespace App\Http\Livewire\Landing;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public $username, $name, $email, $password;

    //Runs once, immediately after the component is instantiated, but before render() is called.
    public function mount()
    {
        // Only Authenticated has access to this page
        if(Auth::check()){
            return redirect(route('main'));
        }

    }

    public function render()
    {
        return view('livewire.landing.register')->layout('livewire.landing.layout.main');
    }

    public function submit()
    {
        // Check if username and password are not empty
        $fields = $this->validate([
            'username' => 'required|min:4|max:40|unique:users,username|string',
            'email' => 'required|email|unique:users,username',
            'name' => 'required|min:5|max:40',
            'password' => 'required|min:6',

        ]);
        // Execution doesn't reach here if validation fails.

        // “Hashing” passwords is the common approach to storing passwords securely
        $fields['password'] = Hash::make($fields['password']);

        // Create new user
        $user = User::create($fields);
        // logging user
        auth()->login($user);
        return redirect('main');

    }
}
