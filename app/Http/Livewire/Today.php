<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Today extends Component
{
    public $datetime;
    public $location;

    public function rules()
    {
        return [
            'datetime' => 'required',
            'location' => 'required'
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        if($propertyName === 'datetime') {
            $this->emit('updateEntry', $propertyName, $this->datetime);
        } else {
            $this->emit('updateEntry', $propertyName, $this->location);
        }
    }
    
    public function render()
    {
        return view('livewire.today');
    }
}
