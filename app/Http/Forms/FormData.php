<?php

namespace App\Http\Forms;

use App\Models\Entry;
use Illuminate\Support\Collection;

class FormData 
{
    public $collection;

    public function __construct(Collection $collection)
    {
        $this->collection = $collection->mapWithKeys(fn($c) => $c);
    }

    public function save()
    {
        $entry = Entry::create([
            'date' => $this->collection['date'],
            'location' => $this->collection['location'],
            'mood' => $this->collection['mood'],
            'grateful' => json_encode($this->collection['grateful']),
            'source_id' => $this->collection['reading']['source'],
            'source_passage' => $this->collection['reading']['passage']
        ]);

        if($entry) {
            return true;
        }

        return false;
    }
}