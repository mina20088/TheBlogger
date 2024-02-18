<?php

namespace App\Livewire\Session;

use App\Models\Session;
use Auth;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{

    #[Locked]
    public $sessions;

    public function mount(){
        $this->sessions = Session::whereBelongsTo(Auth::user())->get();
    }


    #[On('status')]
    public function message($message){
        Session()->flash('message', $message);
    }

    #[On('delete')]
    public function update_sessions(){
        $this->sessions = Session::whereBelongsTo(Auth::user())->get();
    }

    public function render()
    {
        return view('livewire..session.index');
    }
}
