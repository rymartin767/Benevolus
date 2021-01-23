<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Mood extends Component
{
    public $validated;
    
    public $mood;

    public function rules()
    {
        return [
            'mood' => 'required'
        ];
    }

    public function updated($propertyName)
    {
        $this->validated = false;
        $this->validateOnly($propertyName);
        $this->isValidated();
    }

    private function isValidated()
    {
        $this->validate();
        $this->validated = true;
    }

    public function sendAndStep()
    {
        $this->emit('updateEntry', $this->validate());
    }

    public function render()
    {
        return view('livewire.mood');
    }
}
