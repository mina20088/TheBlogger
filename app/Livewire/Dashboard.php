<?php

namespace App\Livewire;


use App\Models\Session;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Dashboard extends Component
{

    #[Computed]
    public function sessionsCount(){
        return count(Session::whereBelongsTo(Auth::user())->get());
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
