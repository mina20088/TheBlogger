<?php

namespace App\Livewire\Session;

use App\Models\Session;
use Auth;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Component;

class Index extends Component
{

    #[On('message')]
    public function message(string $message){
        session()->flash('message', $message);
    }

    #[On('re_render')]
    public function re_render(){
        
        $this->render();
    }

    public function render()
    {
        return view('livewire..session.index',['sessions'=>Session::whereBelongsTo(Auth::user())->get()]);
    }
}
