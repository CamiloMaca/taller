<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
    use HasFactory;

    public function gol(){
        $this->belongsTo(Gol::class);
    }

    public function equipos(){
        $this->belongsToMany(Equipo::class);
    }
}
