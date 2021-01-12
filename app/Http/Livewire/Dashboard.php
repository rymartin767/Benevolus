<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Entry;

class Dashboard extends Component
{
    public $step = 1;
    
    public $datetime;
    public $location;
    public $mood;
    public $grateful;

    protected $listeners = ['updateStep', 'updateEntry'];

    public function mount()
    {
        $this->grateful = collect();
    }

    public function updateStep($step)
    {
        $this->step = $step;
    }

    public function updateEntry($attribute, $value)
    {
        $attribute === 'gratefulOne' || $attribute === 'gratefulTwo' || $attribute === 'gratefulThree' ? 
            $this->grateful->push($value) : 
            $this->$attribute = $value;
    }

    protected function formData()
    {
        return [
            'datetime' => $this->datetime,
            'location' => $this->location,
            'mood' => $this->mood,
            'grateful' => json_encode($this->grateful),
            'source_id' => null,
            'source_passage' => null
        ];
    }

    public function submitForm()
    {
        $entry = Entry::create($this->formData());
        if($entry) {
            $this->reset();
        }
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
