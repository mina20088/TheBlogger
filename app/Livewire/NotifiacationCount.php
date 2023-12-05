<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;

class NotifiacationCount extends Component
{

    #[Computed]
    public function notification_Count(): int
    {
        return count(Auth::user()->notifications);
    }

    public function render()
    {
        return view('livewire.notifiacation-count');
    }
}
