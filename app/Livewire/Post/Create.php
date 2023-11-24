<?php

namespace App\Livewire\Post;

use App\Livewire\Forms\CreatePost;
use App\Models\Category;
use Livewire\Component;



class Create extends Component
{

    public CreatePost $form;

    public function save()
    { 
         $this->validate();      
    }

    
    public function render()
    {
        return view('livewire.post.create',['categories'=> Category::all()]);
    }
}
