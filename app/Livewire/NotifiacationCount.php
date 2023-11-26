<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class NotifiacationCount extends Component
{


    public function render()
    {
        return view('livewire.notifiacation-count',['count'=>count(Auth::user()->notifications)]);
    }
}
