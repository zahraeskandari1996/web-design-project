<?php

namespace App\Http\Livewire\Idea;

use App\Models\Idea;
use Livewire\Component;
use App\Models\Ideashow;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public Ideashow $ideashow;
    public $title, $content, $file_path;

    protected $rules = [
        'title' => 'required|min:4|string',
        'content' => 'required|min:15',
        'file_path' => 'file|mimes:zip|max:3072|nullable'
    ];

    //Runs once, immediately after the component is instantiated, but before render() is called.
    public function mount(Ideashow $ideashow)
    {
        if(!$ideashow->is_active){
            abort(404);
        }
        $this->ideashow = $ideashow;

    }

    public function render()
    {
        return view('livewire.idea.create');
    }


    public function submit()
    {
        // validate user's inputs
        $fields = $this->validate();

        // Execution doesn't reach here if validation fails.

        // check if new file uploaded.
        if($fields['file_path']){
            $fields['file_path'] = Storage::putFile('public/ideas/files', $fields['file_path']);
        }
        // add current user's id as owner of this idea
        $fields['user_id'] = Auth::user()->id;
        $fields['ideashow_id'] = $this->ideashow->id;
        $idea = Idea::create($fields);

        //redirect user to idea's page
        $this->emit('success', " {$this->title} با موفقیت افزوده شد", route('idea-show', ['idea'=>$idea->id]));

    }

}
