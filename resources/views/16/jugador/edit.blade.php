<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jugador edit</title>
</head>
<body>
    <h1>puedes editar a el jugador : {{$jugador->nombre}}</h1>
    <form action="{{route('jugador.update',$jugador)}}" method="POST">
        @csrf
        @method('put')

        <label>
            fecha de nacimiento
            <br>
            <input type="date" name="fecha_nac" value="{{old('fecha_nac', $jugador->fecha_nac)}}">
        </label>
        @error('fecha_nac')
        <br>
        <span>{{$message }}</span>
        <br>
        @enderror

        <br>
        <label>
            nombre
            <br>
            <input type="text" name="nombre" value="{{old('nombre', $jugador->nombre)}}">
        </label>
        @error('nombre')
        <br>
        <span>{{$message }}</span>
        <br>
        @enderror
        
        <br>
        <label>
            posicion
            <br>
            <select name="posicion">
                <option value="" disabled {{ old('posicion', $jugador->posicion) == '' ? 'selected' : '' }}>Selecciona una posición</option>
                @foreach ($posiciones as $posicion)
                <option value="{{ $posicion }}" {{ old('posicion', $jugador->posicion)== $posicion ? 'selected' : '' }}>{{ ucfirst($posicion) }}</option>
                @endforeach
            </select>
        </label>
        @error('posicion')
        <br>
        <span>{{$message }}</span>
        <br>
        @enderror

        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>