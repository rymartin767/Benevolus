<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Source;

class Dashboard extends Component
{
    public $sources;
    public $step;

    public $entry_date;
    public $feel_rating;
    public $feel_reason;
    public $gratitude;
    public $habits;

    
    public function mount()
    {
        $this->step = 1;
        $this->sources = Source::all();
    }

    public function rules()
    {
        return [
            'gratitude' => 'required|string|min:5|max:65353'
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
