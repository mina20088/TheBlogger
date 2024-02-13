<?php

namespace App\Livewire;

use App\Models\Session;
use Auth;
use Cjmellor\BrowserSessions\Facades\BrowserSessions;
use Laravel\Dusk\Browser;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class Sessioncount extends Component
{

    #[Reactive]
    public  $session_count;


    public function render()
    {
       return view('livewire.sessioncount',['count'=> $this->session_count ]);
    }
}
