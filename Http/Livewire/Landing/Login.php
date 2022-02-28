<?php

namespace App\Http\Livewire\Landing;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Login extends Component
{

    public $username;
    public $password;

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
        return view('livewire.landing.login')->layout('livewire.landing.layout.main');
    }

    public function submit()
    {
        // Check if username and password are not empty
        $credentials = $this->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        // Check if The provided credentials do match our records or not.
        $user = User::where('username', $credentials['username'])->first();
            if ($user &&
                Hash::check($credentials['password'], $user->password)) {
                auth()->login($user);
                return redirect('main');
            }


        //The provided credentials are invalid.
        return back()->withError('نام کاربری یا کلمه عبور اشتباه است.');

    }
}
