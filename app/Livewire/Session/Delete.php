<?php

namespace App\Livewire\Session;

use App\Models\Session;
use Laravel\Dusk\Browser;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Delete extends Component
{
    public function delete(){

        Session::destroy(session()->getId());
        
    }

    public function render()
    {
        return view('livewire..session.delete');
    }
}
