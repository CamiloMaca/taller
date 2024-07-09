<?php

namespace App\Http\Controllers;
use App\Models\Jugador;
use App\Models\Gol;
use Illuminate\Http\Request;

class GolController extends Controller
{
    public function create(){
        $jugadores = Jugador::all();
        return view('16.gol.create', compact('jugadores'));
    }

    public function store(Request $request){

        $request->validate([
            'jugador_id' => 'required|exists:jugadors,id',
            'min' => 'required|integer|min:0',
            'descripcion' => 'required|string|max:255',
        ]);

        Gol::create($request->all());
        return redirect()->route('gol.create');
    }

    public function index(){
        $gols=Gol::with('jugador')->orderBy('id','desc')->get();
        return view('16.gol.index', compact('gols'));
    }

    public function show(Gol $gol){
        return view('16.gol.show', compact('gol'));
    }

    public function destroy(Gol $gol){
        $gol->delete();
        return redirect()->route('gol.index');
    }

    public function edit(Gol $gol){
        $jugadores=Jugador::all();
        return view('16.gol.edit',compact('gol','jugadores'));
    }

    public function update(Request $request, Gol $gol){
        $request->validate([
            'jugador_id' => 'required|exists:jugadors,id',
            'min' => 'required|integer|min:0',
            'descripcion' => 'required|string|max:255',
        ]);

        $gol->update($request->all());
        return redirect()->route('gol.index');
    }
}
