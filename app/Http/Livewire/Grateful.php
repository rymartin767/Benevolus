<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Grateful extends Component
{
    public $gratefulOne;
    public $gratefulTwo;
    public $gratefulThree;

    public function rules()
    {
        return [
            'gratefulOne' => 'required|min:5',
            'gratefulTwo' => 'required|min:5',
            'gratefulThree' => 'required|min:5'
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        $this->emit('updateEntry', $propertyName, $this->$propertyName);
    }

    public function render()
    {
        return view('livewire.grateful');
    }
}
