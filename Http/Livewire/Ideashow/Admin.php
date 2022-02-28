<?php

namespace App\Http\Livewire\Ideashow;

use App\Models\Ideashow;
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
        return view('livewire.ideashow.admin', [
            'ideashows' => Ideashow::where('title', 'like', '%'.$this->search.'%')->paginate(8),
        ]);
    }

    // Reset paginator on every new search
    public function updatingSearch()
    {
        $this->resetPage();
    }

    // Set Ideashow id to get confirmation from admin
    public function setDeleteID($id)
    {
        $this->deleteID = $id;

    }

    // Delete Ideashow
    public function destroy()
    {
        if($this->deleteID && Ideashow::destroy($this->deleteID)){
            $this->deleteID = null;
        }

    }

}
