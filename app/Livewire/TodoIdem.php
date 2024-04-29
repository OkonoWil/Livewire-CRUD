<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoIdem extends Component
{
    public Todo $todo;

    public function mount(Todo $todo)
    {
        $this->todo = $todo;
    }
    public function render()
    {
        return view('livewire.todo-idem');
    }


    public function deleteTodo(Todo $todo)
    {
        $todo->delete();

        $this->dispatch('todo:deleted', message: 'Todo deleted successfully.');
    }

    public function toggle()
    {
        $this->todo->update(['completed' => ! $this->todo->completed]);
    }
}
