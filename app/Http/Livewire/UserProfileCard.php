<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Blade;
use Illuminate\View\Compilers\BladeCompiler;
use Livewire\Component;
use Livewire\Livewire;

class UserProfileCard extends Component
{

    public string $firstName;
    
    public string $lastName;



    public function render()
    {
        return view('livewire.user-profile-card');
    }
}
