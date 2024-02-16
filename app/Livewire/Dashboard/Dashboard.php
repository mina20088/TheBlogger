<?php

namespace App\Livewire\Dashboard;


use Cjmellor\BrowserSessions\Facades\BrowserSessions;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard.dashboard',[
            'session_count'=>count(BrowserSessions::sessions())
        ]);
    }
}
