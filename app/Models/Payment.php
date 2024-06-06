<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = [
        'initial_deposit',
        'weekly_deposit',
        'agreed_months',
        'total_weeks',
        'selling_price',
        'dosw',
        'poa',
    ];
}
