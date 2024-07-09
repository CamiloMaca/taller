<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gol create</title>
</head>
<body>
    <h1>registrar gol</h1>
    <a href="{{route('gol.index')}}">lista de goles</a>
    <hr>
    <form action="{{route('gol.store')}}" method="POST">
        @csrf
        
        <label>
            jugador
            <br>
            <select name="jugador_id" >
                <option>selecciona un jugador</option>
                @foreach ($jugadores as $jugador)
                    <option value="{{$jugador->id}}">{{$jugador->nombre}}</option>
                @endforeach
            </select>

            @error('jugador_id')
            <div>{{ $message }}</div>
            @enderror
        </label>
        <br>
        <label>
            minuto
            <br>
            <input type="number" name="min" value="{{old('min')}}">
            @error('min')
            <div>{{ $message }}</div>
            @enderror
        </label>
        <br>
        <label>
            descripcion
            <br>
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
            @error('descripcion')
            <div>{{ $message }}</div>
            @enderror
        </label>
        <br>

        <button type="submit">Registrar Gol</button>
    </form>

</body>
</html>