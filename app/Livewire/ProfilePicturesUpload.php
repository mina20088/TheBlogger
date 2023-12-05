<?php

namespace App\Livewire;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfilePicturesUpload extends Component
{

    use WithFileUploads;

    #[Validate('required')]
    public $file;


    public function upload()
    {
         $this->validate();

    }
    public function render(): View|\Illuminate\Foundation\Application|Factory|Application
    {
        return view('livewire.profile-pictures-upload');
    }
}
