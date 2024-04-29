<?php

namespace App\Livewire;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
use Livewire\Component;

class ListTodos extends Component
{
    public Collection $todos;

    public function mount()
    {
        $this->getTodos();
    }

    #[On(['todo:deleted', 'todo:created', 'todo:updated'])]
    public function getTodos()
    {
        $this->todos = auth()->user()->todos()->latest()->get();
    }


    #[Title('Todo List')]
    public function render()
    {
        return view('livewire.list-todos');
    }
}
