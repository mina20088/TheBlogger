<?php

namespace App\Livewire\Dashboard;


use App\Models\Session;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard.dashboard',[
            'count'=>count(Session::where('user_id',Auth::user()->id)->get())
        ]);
    }
}
