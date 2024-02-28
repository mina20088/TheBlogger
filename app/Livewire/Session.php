<?php

namespace App\Livewire;

use App\Models\Session as Sessions;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Reactive;
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

    public function delete($id){
        Sessions::destroy($id);
    }

    public function deleteSelected(){
        Sessions::destroy($this->checked);
    }

    public function render()
    {
        return view('livewire.session');
    }
}
