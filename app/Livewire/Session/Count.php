<?php

namespace App\Livewire\Session;

use App\Models\Session;
use Auth;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class Count extends Component
{

    #[Reactive]
    public $count;

    public function render()
    {
        return view('livewire..session.count');
    }
}
