<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gol extends Model
{
    use HasFactory;

    public function jugador(){
        return $this->belongsTo(Jugador::class);
    }

    public function partidos(){
        return $this->hasMany(Partido::class);
    }

    protected $fillable = [
        'jugador_id',
        'min',
        'descripcion',
    ];
}
