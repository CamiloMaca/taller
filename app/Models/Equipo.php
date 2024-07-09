<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    public function jugador(){
        $this->belongsTo(Jugador::class);
    }

    public function presidente(){
        $this->belongsTo(Presidente::class);
    }

    public function partidos(){
        $this->belongsToMany(Partido::class);
    }
}
