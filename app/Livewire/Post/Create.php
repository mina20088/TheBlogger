<?php

namespace App\Livewire\Post;

use \session;
use App\Livewire\Forms\CreatePost;
use App\Models\Category;
use App\Models\Post;
use App\Notifications\NewpostNotificatin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;
use Livewire\Component;



class Create extends Component
{

    public CreatePost $form;

    public function mount(){
        $this->form->user_id = $this->user()->id;
     }

    #[Computed]
    public function user(){
        return Auth::user();
    }

    public function updated()
    {
        $this->form->slug = Str::slug($this->form->title);
    }

    public function save()
    { 
        $this->form->validate(); 
        
        $post =  Post::create($this->form->all());

        $followers = Auth::user()->follower;

        Notification::send($followers,new NewpostNotificatin($post));

        session()->flash('success','added succesfully');
    }

    
    public function render()
    {
        return view('livewire.post.create',['categories'=> Category::all()]);
    }
}
