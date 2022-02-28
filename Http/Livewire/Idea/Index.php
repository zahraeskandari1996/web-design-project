<?php

namespace App\Http\Livewire\Idea;

use App\Models\Idea;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
class Index extends Component
{
    use WithPagination;

    public $search;

    //Runs once, immediately after the component is instantiated, but before render() is called.
    public function mount()
    {
        // Only reviews or admin has access to this page
        if(!(Auth::user()->is_admin || Auth::user()->is_reviewer)){
            return abort(404);
        }

    }
    public function render()
    {
        return view('livewire.idea.index', [
            'ideas' => Idea::where('title', 'like', '%'.$this->search.'%')->paginate(8),
        ]);
    }

    // Reset paginator on every new search
    public function updatingSearch()
    {
        $this->resetPage();
    }
}
