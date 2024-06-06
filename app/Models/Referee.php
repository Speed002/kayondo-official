<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referee extends Model
{
    use HasFactory;
    protected $fillable = [
        'referee1name',
        'referee1relation',
        'referee1contact',
        'referee2name',
        'referee2relation',
        'referee2contact',
        'st_chairname',
        'st_chaircontact',
        'lc_chairname',
        'lc_chaircontact',
    ];
}
