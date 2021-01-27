<?php

namespace App\Http\Livewire;

use App\Http\Forms\FormData;
use Livewire\Component;
use App\Models\Entry;

class Dashboard extends Component
{
    public $step = 4;

    public $entries;
    public $formData;

    protected $listeners = ['updateEntry'];

    public function mount()
    {
        $this->entries = Entry::all();
        $this->formData = collect();
    }

    public function updateEntry($e)
    {
        $this->step++;
        $this->formData->push($e);
    }

    public function submitForm()
    {
        $form = new FormData($this->formData);
        $saved = $form->save();
        if($saved) {
            $this->reset();
        }
    }

    public function removeAll()
    {
        $entries = Entry::all();
        $entries->map(fn($e) => $e->delete());
        $this->reset();
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
