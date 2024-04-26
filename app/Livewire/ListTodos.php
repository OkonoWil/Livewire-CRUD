<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Title;
use Livewire\Component;

class ListTodos extends Component
{
    public Collection $todos;

    public function mount()
    {
        $this->todos = auth()->user()->todos()->latest()->get();
    }

    #[Title('Todo List')]
    public function render()
    {
        return view('livewire.list-todos');
    }
}
