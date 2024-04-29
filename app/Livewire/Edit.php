<?php

namespace App\Livewire;

use App\Livewire\Forms\TodoForm;
use App\Models\Todo;
use Livewire\Attributes\Title;
use Livewire\Component;

class Edit extends Component
{
    public Todo $todo;

    public TodoForm $form;

    public string $success;

    public function mount(Todo $todo)
    {
        $this->todo = $todo;
        $this->form->name = $todo->name;
        $this->form->description = $todo->description;
    }

    public function update()
    {
        $this->todo->update($this->form->validate());

        $this->success = 'Todo updated successfully.';
        $this->dispatch('todo:updated');
    }

    #[Title('Edit Todo')]
    public function render()
    {
        return view('livewire.edit');
    }

    public function removwSuccess()
    {
        unset($this->success);
    }
}
