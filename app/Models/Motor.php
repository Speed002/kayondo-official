<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'make',
        'registration',
        'color',
        'engine',
        'chasis',
        'condition',
        'registered_names'
    ];

}
