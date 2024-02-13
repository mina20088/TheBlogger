<?php

namespace App\Livewire;

use App\Models\Session;
use Cjmellor\BrowserSessions\Facades\BrowserSessions;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        //['session_count'=>count(Session::where('user_id',Auth::user()->id)->get())]
        return view('livewire.dashboard',[
            'session_count'=>count(BrowserSessions::sessions())
        ]);
    }
}
