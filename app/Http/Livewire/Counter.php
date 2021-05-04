<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count;
    public $message = 'Hellow world';
    public $email = "";

    public function mount(){
        $this->count = auth()->user()->count;
    }
    public function increment()
    {
        $this->count++;
        auth()->user()->count = $this->count;
        auth()->user()->save();
    }
    public function decrement()
    {
        $this->count--;
        auth()->user()->count = $this->count;
        auth()->user()->save();
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
