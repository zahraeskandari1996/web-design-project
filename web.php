<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Idea\Admin as AdminIdea;
use App\Http\Livewire\Idea\Create as CreateIdea;
use App\Http\Livewire\Idea\Index as IndexIdea;
use App\Http\Livewire\Idea\Show as ShowIdea;
use App\Http\Livewire\Ideashow\Admin as AdminIdeaShow;
use App\Http\Livewire\Ideashow\Create as CreateIdeaShow;
use App\Http\Livewire\Ideashow\Edit as EditIdeaShow;
use App\Http\Livewire\Ideashow\Index as IndexIdeaShow;
use App\Http\Livewire\Ideashow\Show as ShowIdeaShow;
use App\Http\Livewire\Landing\Home;
use App\Http\Livewire\Landing\Login;
use App\Http\Livewire\Landing\Register;
use App\Http\Livewire\User\Admin as UserAdmin;
use App\Http\Livewire\User\Profile as UserProfile;
use Illuminate\Support\Facades\Route;

// Home
Route::get('/', Home::class)->name('home');

// Auth
Route::get('/register', Register::class)->name('register');
Route::get('/login', Login::class)->name('loginView');

// Admin's Route (will be guarded in livewire mountFunction)
Route::get('/ideashow/admin',AdminIdeaShow::class)->name('ideashow-admin');
Route::get('/idea/admin',AdminIdea::class)->name('idea-admin');
Route::get('/user/admin',UserAdmin::class)->name('user-admin');

Route::group(['middleware'=>['auth:sanctum', 'verified']], function(){

    // dashboard
    Route::get('/main',Dashboard::class)->name('main');


    // idea's routes
    Route::get('/idea/{idea}',ShowIdea::class)->name('idea-show');
    Route::get('/idea/{ideashow}/create',CreateIdea::class)->name('idea-create');
    Route::get('/idea',IndexIdea::class)->name('idea');

    // user's profile
    Route::get('/profile',UserProfile::class)->name('profile');


    // ideashow's routes
    Route::get('/ideashow',IndexIdeaShow::class)->name('ideashow');
    Route::get('/ideashow/create',CreateIdeaShow::class)->name('ideashow-create');
    Route::get('/ideashow/{ideashow}/edit',EditIdeaShow::class)->name('ideashow-edit');
    Route::get('/ideashow/{ideashow}',ShowIdeaShow::class)->name('ideashow-show');

});
