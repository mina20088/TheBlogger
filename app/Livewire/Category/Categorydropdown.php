<?php

namespace App\Livewire\Category;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class Categorydropdown extends Component
{
    #[Modelable] 
    public $value;

    public  $categories;

    public function render()
    {
        return view('livewire.category.categorydropdown');
    }
}
