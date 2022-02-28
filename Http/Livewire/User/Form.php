<?php


namespace App\Http\Livewire\User;
use Livewire\WithFileUploads;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Form extends Component
{

    public $tab_id;
    use WithFileUploads;

    public $name, $username, $email, $degree, $field, $profile_photo_path, $old_image;

    // Triggered before render, set profile details to edit-inputs
    public function mount()
    {
        $user = Auth::user();
        $this->name = $user->name;
        $this->username = $user->username;
        $this->email = $user->email;
        $this->degree = $user->degree;
        $this->field = $user->field;
        $this->old_image = $user->profile_photo_path;
    }
    public function render()
    {
        return view('livewire.user.form');
    }
    public function clearPic(){
        $this->profile_photo_path = null;
    }
    public function submitEdit()
    {
        $rules = [
            'username' => 'required|min:4|max:40|string|unique:users,username,'.Auth::user()->id,
            'email' => 'required|email|unique:users,email,'.Auth::user()->id,
            'name' => 'required|min:5|max:40',
            'degree' => 'min:3|max:40|alpha',
            'field' => 'min:3|max:40',
            'profile_photo_path' => 'image|max:1024|nullable',
        ];
        $fields = $this->validate($rules);
        // Execution doesn't reach here if validation fails.
        if($this->profile_photo_path){
            $fields['profile_photo_path'] = Storage::putFile('public/users/pic', $fields['profile_photo_path']);
        }else{
            $fields['profile_photo_path'] = $this->old_image;
        }
        if(Auth::user()->update($fields)) {
            $this->emit('success', 'مشخصات شما با موفقیت ویرایش شد');

        }
    }
}
