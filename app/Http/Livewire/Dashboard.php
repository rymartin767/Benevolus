<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Source;
use Carbon\Carbon;

class Dashboard extends Component
{
    public $sources;
    public $step = 1;

    public $entry_date;
    public $feel_rating;
    public $feel_reason;
    public $gratitude;

    
    public function mount()
    {
        $this->sources = Source::all();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
