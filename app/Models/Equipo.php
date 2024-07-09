<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    public function jugador(){
        return $this->belongsTo(Jugador::class);
    }

    public function presidente(){
        return $this->belongsTo(Presidente::class);
    }

    public function partidos(){
        return $this->belongsToMany(Partido::class);
    }
}
