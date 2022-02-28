<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Admin extends Component
{
    use WithPagination;

    public $search = '';
    public $deleteID;

    //Runs once, immediately after the component is instantiated, but before render() is called.
    public function mount()
    {
        // Only admin has access to this page
        if(!Auth::user()->is_admin){
            return abort(404);
        }

}
    public function render()
    {
        return view('livewire.user.admin', [
            'users' => User::where('username', 'like', '%'.$this->search.'%')->paginate(8),
        ]);
    }

    // Reset paginator on every new search
    public function updatingSearch()
    {
        $this->resetPage();
    }



        // Make Reviewer
        public function makeReviewer(User $user)
        {
            $user->is_reviewer = true;
            $user->save();

        }

        // Remove Reviewer
        public function removeReviewer(User $user)
        {
            $user->is_reviewer = false;
            $user->save();

        }
}
