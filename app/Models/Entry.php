<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    use HasFactory;

    protected $fillable = [
        'datetime', 'location', 'mood', 'grateful', 'source_id', 'source_passage'
    ];

    public function Source()
    {
        return $this->belongsTo(Source::class);
    }
}
