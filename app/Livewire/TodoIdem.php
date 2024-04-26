<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoIdem extends Component
{
    public Todo $todo;

    public function mount(Todo $todo){
        $this->todo = $todo;
    }
    public function render()
    {
        return view('livewire.todo-idem');
    }
}
