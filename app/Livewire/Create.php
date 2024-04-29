<?php

namespace App\Livewire;

use App\Livewire\Forms\TodoForm;
use Livewire\Attributes\On;
use Livewire\Component;

class Create extends Component
{
    public TodoForm $form;

    public string $success;


    public function render()
    {
        return view('livewire.create');
    }

    public function create()
    {
        $this->form->create();

        $this->success = 'Todo created successfully.';

        $this->dispatch('todo:created');
    }

    public function removeSuccess()
    {
        unset($this->success);
    }

    #[On(['todo:deleted'])]
    public function addSuccess(string $message)
    {
        $this->success = $message;
    }
}
