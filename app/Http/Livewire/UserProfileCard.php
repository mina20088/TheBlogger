<?php

namespace App\Http\Livewire;

use Livewire\Component;

class UserProfileCard extends Component
{

    public string $firstName;
    
    public string $lastName;

    public function render()
    {
        return view('livewire.user-profile-card');
    }
}
