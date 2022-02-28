<?php

namespace App\Http\Livewire\Ideashow;

use App\Models\Ideashow;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title, $content, $image;
    public $is_active = false;

    protected $rules = [
        'title' => 'required|min:4|string',
        'content' => 'required|min:15',
        'is_active' => 'required|boolean',
        'image' => 'required|image|max:2048',
    ];

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
        return view('livewire.ideashow.create');
    }


    public function submit()
    {
        $fields = $this->validate();
        // Execution doesn't reach here if validation fails.

        $fields['image'] = Storage::putFile('public/ideshow/posters', $fields['image']);

        Ideashow::create($fields);
        $this->emit('success', "{$this->title} با موفقیت ساخته شد", route('ideashow-admin'));

    }
}
