<?php

namespace App\Livewire;

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
