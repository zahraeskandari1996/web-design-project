<?php

namespace App\Http\Livewire\Idea;

use Livewire\WithPagination;
use App\Models\Idea;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Show extends Component
{
    use WithPagination;
    public Idea $idea;
    public $comment;

    //Runs once, immediately after the component is instantiated, but before render() is called.
    public function mount(Idea $idea)
    {
        // Only reviews or admin or owner of idea has access to this page
        if(Auth::user()->is_admin || Auth::user()->is_reviewer || $idea->user_id == Auth::user()->id){
            $this->idea = $idea;
        }else return abort(404);

    }
    public function render()
    {
        return view('livewire.idea.show', ['User'=>User::class, 'comments'=>$this->idea->comments()->orderBy('created_at', 'desc')->paginate(5)]);
    }

    public function upVote()
    {
        // Check if user try to his own idea
        if($this->idea->user_id == Auth::user()->id){
            return;
        }
        //Enforce that referee can only rate each idea one time
        $this->idea->rateOnce(1);

    }

    public function downVote()
    {
        // Check if user try to his own idea
        if($this->idea->user_id == Auth::user()->id){
            return;
        }
        //Enforce that referee can only rate each idea one time
        $this->idea->rateOnce(-1);

    }

    public function download(){

        // if this idea has a file!
        if($this->idea->file_path){
            /**
            * The download method accepts a filename as the second argument to the method,
            * which will determine the filename that is seen by the user downloading the file
            */
            return Storage::download($this->idea->file_path, $this->idea->title);
        }

    }

    // save comment
    public function saveComment(){
        $rules = [
            'comment' => 'required|min:4'
        ];
        $fields = $this->validate($rules);
        // Execution doesn't reach here if validation fails.

        $this->idea->comment($fields['comment']);
        $this->comment = '';
        $this->updatingSearch();
        //show success message
        // $this->emit('success', "پیام شما با موفقیت اضافه شد", route('idea-show', ['idea'=>$this->idea->id]));



    }
        // Reset paginator on every new search
        public function updatingSearch()
        {
            $this->resetPage();
        }


}
