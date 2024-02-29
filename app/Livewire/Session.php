<?php

namespace App\Livewire;

use App\Models\Session as Sessions;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class Session extends Component
{
    public array $checked;

    #[Computed]
    public function sessions(){
        return Sessions::whereBelongsTo(Auth::user())->paginate(2);
    }

    #[Computed]
    public function isCurrentSession(){
        return $this->sessions->id;
    }

    
    public function selectedSessions($id = 0){

        if(isset($this->checked)){
            $this->dispatch('confirm',[
                'title' => 'are you sure',
                'html' => 'you want to delete this sessions',
                'checked' => $this->checked
            ]);
        }
        if($id > 0){
            $this->dispatch('confirm',[
                'title' => 'are you sure',
                'html' => 'you want to delete this sessions',
                'checked' => $id
            ]);
        }

    }

    #[On('deleteSelected')]
    public function delete($id){
        Sessions::destroy($id);
    }


    public function render()
    {
        return view('livewire.session');
    }
}
