<?php

namespace App\Livewire;

use Livewire\Component;

class Todo extends Component
{
    public $todos = [];

    public $todo = '';

    public function addTodo()
    {
        if (trim($this->todo) === '') {
            return;
        }

        $this->todos[] = $this->todo;

        $this->reset('todo');
    }


    public function render()
    {
        return view('livewire.todo');
    }
}

