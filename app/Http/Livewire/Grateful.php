<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Grateful extends Component
{
    public $validated = false;
    
    public $gratefulOne;
    public $gratefulTwo;
    public $gratefulThree;

    public function rules()
    {
        return [
            'gratefulOne' => 'min:5',
            'gratefulTwo' => 'min:5',
            'gratefulThree' => 'min:5'
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
        $collection = [
            'grateful' => [
                $this->gratefulOne,
                $this->gratefulTwo,
                $this->gratefulThree
            ]
        ];

        $this->emit('updateEntry', $collection);
    }

    public function render()
    {
        return view('livewire.grateful');
    }
}
