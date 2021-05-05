<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Todo;

class Todos extends Component
{
    public $title = '';

    public function addTodo()
    {
        $this->validate([
            'title' => 'required',
        ]);

        Todo::create([
            'user_id' => auth()->id(),
            'title' => $this->title,
            'completed' => false
        ]);

        $this->title = '';
    }

    public function updateTodo($id, $title)
    {
        $todo = Todo::find($id);
        $todo->title = $title;
        $todo->save();
    }
    public function deleteTodo($id)
    {
        Todo::find($id)->delete();
    }
    public function toggleTodo($id)
    {
        $todo = Todo::find($id);

        $todo->completed = !$todo->completed;
        $todo->save();
    }
    public function render()
    {
        return view('livewire.todos', [
            'todos' => auth()->user()->todos
        ]);
    }
}
