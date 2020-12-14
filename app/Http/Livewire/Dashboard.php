<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Source;
use Carbon\Carbon;

class Dashboard extends Component
{
    public $sources;

    public $step = 1;
    public $new_date = false;

    public $entry_date;

    public $image;

    
    public function mount()
    {
        $this->sources = Source::all();
        $this->entry_date = Carbon::now()->format('F d Y');
    }

    

    public function updateImage()
    {
        if($this->feeling_number === "1") {
            $this->image = 'bg-red-400';
        }
        if($this->feeling_number === "2") {
            $this->image = 'bg-yellow-400';
        }
        if($this->feeling_number === "3") {
            $this->image = 'bg-blue-400';
        }
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
