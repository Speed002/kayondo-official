<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'dob',
        'contact',
        'nin',
        'residence',
        'stage',
        'doa',
        'occupation',
        'father',
        'father_contact',
        'mother',
        'mother_contact'
    ];


    public function motor(){
        return $this->hasMany(Motor::class);
    }
    public function payment(){
        return $this->hasMany(Payment::class);
    }
    public function referee(){
        return $this->hasMany(Referee::class);
    }
}
