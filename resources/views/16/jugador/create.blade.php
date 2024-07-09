<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jugador create</title>
</head>
<body>
    <h1>ingresar un nuevo jugador</h1>
    <a href="{{route('jugador.index')}}">jugador-index</a>
    <br>
    <form action="{{route('jugador.store')}}" method="POST">
        @csrf

        <label>
            fecha de nacimiento
            <br>
            <input type="date" name="fecha_nac" value="{{old('fecha_nac')}}">
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
            <input type="text" name="nombre" value="{{old('nombre')}}">
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
                <option>selecciona una posicion</option>
                @foreach ($posiciones as $posicion)
                <option value="{{ $posicion }}" {{ old('posicion') == $posicion ? 'selected' : '' }}>{{ ucfirst($posicion) }}</option>
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