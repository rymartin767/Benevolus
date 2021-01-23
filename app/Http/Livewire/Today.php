<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Today extends Component
{
    public $validated = false;

    public $date;
    public $location;

    public function rules()
    {
        return [
            'date' => 'required',
            'location' => 'required|min:3|max:50'
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
        return view('livewire.today');
    }
}
