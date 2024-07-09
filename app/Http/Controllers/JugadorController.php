<?php

namespace App\Http\Controllers;
use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    public function create(){
        $posiciones = ['delantero', 'centrocampista', 'defensa', 'portero'];
        return view('16.jugador.create', compact('posiciones'));
    }

    public function store(Request $request){
        $request->validate([
            'fecha_nac' => 'required',
            'nombre' => 'required',
            'posicion' => 'required|in:delantero,centrocampista,defensa,portero'
        ]);

        Jugador::create($request->all());
        return redirect()->route('jugador.create');
    }

    public function index(){
        $jugadores=Jugador::orderBy('id', 'desc')->get();
        return view('16.jugador.index', compact('jugadores'));
    }

    public function show(Jugador $jugador){
        return view('16.jugador.show', compact('jugador'));
    }

    public function destroy(Jugador $jugador){
        $jugador->delete();
        return redirect()->route('jugador.index');
    }

    public function edit(Jugador $jugador){
        $posiciones = ['delantero', 'centrocampista', 'defensa', 'portero'];
        return view('16.jugador.edit', compact('jugador', 'posiciones'));
    }

    public function update(Request $request, Jugador $jugador){

    $request->validate([
        'fecha_nac' => 'required|date',
        'nombre' => 'required|string|max:255',
        'posicion' => 'required|in:delantero,centrocampista,defensa,portero',
    ]);

    $jugador->update($request->all());
    return redirect()->route('jugador.index');
    }
}
