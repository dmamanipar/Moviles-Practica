<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    //Relación 1 a 1
    public function periodo(){
        return $this->hasOne(Periodo::class);
    }

    public function persona(){
        return $this->hasOne(Persona::class);
    }
}
