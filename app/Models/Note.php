<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['sender', 'receiver', 'stamp', 'key', 'note', 'noteNumber'];

    protected static function boot()
    {
        parent::boot();
    }

    protected $casts = [
        'note' => 'encrypted',
    ];
}
