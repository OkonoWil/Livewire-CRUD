<?php

namespace App\Livewire\Forms;

use App\Models\Todo;
use Livewire\Attributes\Validate;
use Livewire\Form;

class TodoForm extends Form
{

    #[Validate(['required', 'string', 'max:255'])]
    public string $name;

    #[Validate(['required', 'string', 'max:5000'])]
    public string $description;

    public function create(): void
    {
        Todo::create(array_merge($this->validate(), ['user_id' => auth()->id(), 'completed' => false]));
    }
}
