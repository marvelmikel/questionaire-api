<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questionaire extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'options', 'is_multi_choice', 'trigger'];
    protected $casts = [
        'options' => 'array'
    ];
}
