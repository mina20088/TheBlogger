<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class CreatePost extends Form
{
    #[validate('required')]
    public string $title = "";

    #[validate('required')]
    public string $user_id = "";

    #[validate('required')]
    public string $excrept = "";

    #[validate('required')]
    public string $content = "";

    #[validate('exists:categories,id')]
    public int $category;




}
