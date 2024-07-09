<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gol extends Model
{
    use HasFactory;

    public function jugador(){
        $this->belongsTo(Jugador::class);
    }

    public function partidos(){
        $this->hasMany(Partido::class);
    }
}
