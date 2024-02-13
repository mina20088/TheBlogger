<?php

namespace App\Livewire;

use App\Models\Session;
use Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard',['session_count'=>count(Session::where('user_id',Auth::user()->id)->get())]);
    }
}
