<?php

namespace App\Http\Livewire;

use App\Models\Ideashow;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {

        $ideas_id = DB::table('ideas')->select('id')->where('user_id', Auth::user()->id)->get()->toArray();
        // regular array
        $ideas_id = array_map(function($object){
            return (array) $object;
        }, $ideas_id);
        // user ideas sum rating
        $sum_rating = DB::table('ratings')->select('rating')->whereIn('rateable_id', $ideas_id)->sum('rating');
        $count_comments = DB::table('comments')->select('id')->whereIn('commentable_id', $ideas_id)->count();
        $ideashows = Ideashow::orderBy('updated_at', 'desc')->limit(3)->get();
        $comments = DB::table('comments')->whereIn('commentable_id', $ideas_id)->orderBy('updated_at', 'desc')->limit(5)->get();
        $User = User::class;
        return view('livewire.dashboard',compact('User', 'ideashows', 'count_comments', 'sum_rating', 'comments'));
    }
}
