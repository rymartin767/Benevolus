<?php

namespace App\Http\Livewire;

use App\Models\Entry;
use App\Models\Source;
use Livewire\Component;

class Dashboard extends Component
{
    public $sources;

    public $datetime;
    public $location;
    public $feeling_number;
    public $feeling_reasons;
    public $project;
    public $grateful;
    public $source_id;
    public $source_passage;

    public $image;

    
    public function mount()
    {
        $this->sources = Source::all();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
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

    public function rules()
    {
        return [
            'datetime' => 'required|date',
            'location' => 'required|string|min:5|max:35',
            'feeling_number' => 'required|numeric|between:1,5',
            'feeling_reasons'=> 'required|string|min:5|max:255',
            'project' => 'required|string|min:5|max:75',
            'grateful' => 'required|string|min:5|max:255',
            'source_id' => 'required|min:0|max:5',
            'source_passage' => 'exclude_if:source_id,0|required|string|min:5|max:53353'
        ];
    }

    public function submitForm()
    {
        $this->validate();

        Entry::create($this->formData());
        $this->reset();

        $this->sources = Source::all();
    }

    public function formData()
    {
        return [
            'datetime' => $this->datetime,
            'location' => $this->location,
            'feeling_number' => $this->feeling_number,
            'feeling_reasons'=> $this->feeling_reasons,
            'project' => $this->project,
            'grateful' => $this->grateful,
            'source_id' => $this->source_id,
            'source_passage' => $this->source_passage
        ];
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
