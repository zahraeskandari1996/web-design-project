<?php

namespace App\Http\Livewire\Ideashow;

use Livewire\Component;
use App\Models\Ideashow;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class Edit extends Component
{


    use WithFileUploads;

    public $title, $content, $image, $is_active, $old_url_path, $ideashow_id;

    protected $rules = [
        'title' => 'required|min:4|string',
        'content' => 'required|min:15',
        'is_active' => 'required|boolean',
        'image' => 'image|max:2048|nullable'
    ];


    //Runs once, immediately after the component is instantiated, but before render() is called.
    public function mount(Ideashow $ideashow)
    {
        $this->title = $ideashow->title;
        $this->content = $ideashow->content;
        $this->is_active = $ideashow->is_active;
        $this->old_url_path = $ideashow->image;
        $this->ideashow_id = $ideashow->id;

    }

    public function render()
    {
        return view('livewire.ideashow.edit');
    }


    public function submit()
    {
        $fields = $this->validate();
        // Execution doesn't reach here if validation fails.

        // check if new image uploaded.
        if($fields['image']){
            $fields['image'] = Storage::putFile('public/ideshow/posters', $fields['image']);
        }else{
            $fields['image'] = $this->old_url_path;
        }

        $ideashow = Ideashow::find($this->ideashow_id);
        $ideashow->update($fields);
        $this->emit('success', " {$this->title} با موفقیت ویرایش شد", route('ideashow-admin'));

    }
}
