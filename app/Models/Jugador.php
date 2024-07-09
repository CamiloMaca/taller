<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    public function gols(){
        return $this->hasMany(Gol::class);
    } 

    public function equipos(){
        return $this->hasMany(Equipo::class);
    }

    protected $fillable = [
        'fecha_nac',
        'nombre',
        'posicion',
    ];
}
