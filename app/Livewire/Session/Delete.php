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
            $this->dispatch('status','you can`t close your current session')->to(Index::class);
        }else{
            Session::destroy($this->session_id);

            $this->dispatch('delete');
        }


        
    }

    public function render()
    {
        return view('livewire..session.delete');
    }
}
