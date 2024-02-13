<?php

namespace App\Livewire\Session;

use Cjmellor\BrowserSessions\Facades\BrowserSessions;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Show extends Component
{
    public function render()
    {
        return view('livewire.session.show',[
            'sessions' => BrowserSessions::sessions(),
        ]);
    }
}
