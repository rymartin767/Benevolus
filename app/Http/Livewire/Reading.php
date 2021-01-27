<?php

namespace App\Http\Livewire;

use App\Models\Source;
use Livewire\Component;

class Reading extends Component
{
    public $showModal = false;
    public $sources;

    public $activeQuote;
    public $quotesArray = [];

    public $source_id;
    public $passage;

    public $validated = false;
    
    public function mount()
    {
        $this->sources = Source::all();
    }

    public function modalDisplayed()
    {
        $this->dispatchBrowserEvent('confirming-modal-event');
        $this->showModal = true;
    }

    public function addQuote()
    {
        $this->validateOnly('activeQuote');
        array_push($this->quotesArray, $this->activeQuote);
        $this->activeQuote = '';
    }

    public function rules()
    {
        return [
            'source_id' => 'numeric',
            'passage' => 'required|min:5',
            'activeQuote' => 'min:5'
        ];
    }

    public function sendAndStep()
    {
        $collection = [
            'reading' => [
                'source' => $this->source_id,
                'quotes' => [
                    $this->quotesArray
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
