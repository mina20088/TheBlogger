<?php

namespace App\Livewire;

use Cjmellor\BrowserSessions\Facades\BrowserSessions;
use Laravel\Dusk\Browser;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class SessionTable extends Component
{


    #[Reactive] #[Locked]
    public $sessions;

    public function mount(){
        $this->sessions = BrowserSessions::sessions();
    }

    
    public function render()
    {
        return view('livewire.session-table');
    }
}
