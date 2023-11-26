<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['sender', 'receiver', 'stamp', 'key', 'note'];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->key = Hash::make($model->key);
            $model->note = Hash::make($model->note);
        });
    }
}
