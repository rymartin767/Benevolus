<?php

namespace App\Http\Livewire;

use App\Models\Source;
use Livewire\Component;

class Reading extends Component
{
    public $sources;

    public $validated = false;

    public $source_id;
    public $quoteOne;
    public $quoteTwo;
    public $quoteThree;
    public $passage;
    
    public function mount()
    {
        $this->sources = Source::all();
    }

    public function rules()
    {
        return [
            'source_id' => 'numeric',
            'passage' => 'required|min:5',
            'quoteOne' => 'required|min:5',
            'quoteTwo' => 'required|min:5',
            'quoteThree' => 'required|min:5'
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
            'reading' => [
                'source' => $this->source_id,
                'quotes' => [
                    $this->quoteOne,
                    $this->quoteTwo,
                    $this->quoteThree
                ],
                'passage' => $this->passage
            ]
        ];

        $this->emit('updateEntry', $collection);
    }

    public function render()
    {
        return view('livewire.reading');
    }
}
