<?php

namespace App\Livewire\Session;

use App\Models\Session;
use Auth;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Component
{
    #[Computed()]
    public function sessions(){
        return Session::whereBelongsTo(Auth::user())->get();
    }
    public function render()
    {
        return view('livewire..session.index');
    }
}
