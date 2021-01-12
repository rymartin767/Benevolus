<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Mood extends Component
{
    public $mood;

    public function rules()
    {
        return [
            'mood' => 'required'
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        $this->emit('updateEntry', $propertyName, $this->mood);
    }

    public function render()
    {
        return view('livewire.mood');
    }
}
