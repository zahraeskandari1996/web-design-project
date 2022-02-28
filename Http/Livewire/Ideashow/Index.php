<?php

namespace App\Http\Livewire\Ideashow;

use App\Models\Ideashow;
use Livewire\Component;
use Livewire\WithPagination;
class Index extends Component
{
    use WithPagination;

    public $search;
    public function render()
    {
        return view('livewire.ideashow.index', [
            'ideashows' => Ideashow::where('title', 'like', '%'.$this->search.'%')->paginate(3),
        ]);
    }

    // Reset paginator on every new search
    public function updatingSearch()
    {
        $this->resetPage();
    }


}
