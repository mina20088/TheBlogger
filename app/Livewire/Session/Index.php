<?php

namespace App\Livewire\Session;

use App\Models\Session;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Locked;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class Index extends Component
{

    
    public bool $select ;

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
