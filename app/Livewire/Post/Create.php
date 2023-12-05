<?php

namespace App\Livewire\Post;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Notifications\Events\BroadcastNotificationCreated;
use session;
use App\Events\NewPost;
use App\Livewire\Forms\CreatePost;
use App\Models\Category;
use App\Models\Post;
use App\Notifications\NewpostNotification;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use Livewire\Attributes\Computed;
use Livewire\Component;




class Create extends Component
{

    public CreatePost $form;

    public function mount(): void
    {
        $this->form->user_id = Auth::user()->id;
    }

    public function updated(): void
    {
        $this->form->slug = Str::slug($this->form->title,'_');
    }

    public function save(): void
    {
        $this->form->validate();

        $post =  Post::create($this->form->all());

        $followers = $post->user->follower;

        Notification::send($followers, new NewpostNotification($post));

        foreach ($followers as $follower)
        {
            event(new  NewPost($post,$follower->id) );
        }

        session()->flash('success','added succesfully');
    }


    public function render(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('livewire.post.create',['categories'=>Category::all()]);
    }
}
