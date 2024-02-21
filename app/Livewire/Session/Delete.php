<?php

namespace App\Livewire\Session;

use App\Models\Session;
use Auth;
use Laravel\Dusk\Browser;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Component;

class Delete extends Component
{   


    #[Locked]
    public $session_id;

    #[Computed]
    public function current()
    {
        return $this->session_id === session()->getId();
    }

    public function delete(){
        if($this->current()){
            $this->dispatch('message','you can`t close your own session');
        }else{
            Session::destroy($this->session_id);
            $this->dispatch('re_render');
        }
    }

    public function render()
    {
        return view('livewire..session.delete');
    }
}
