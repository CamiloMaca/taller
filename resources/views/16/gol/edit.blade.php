<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Gol</title>
</head>
<body>
    <h1>Editar Gol</h1>
    <form action="{{ route('gol.update', $gol->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>
            Jugador
            <br>
            <select name="jugador_id">
                <option value="" disabled>Selecciona un jugador</option>
                @foreach ($jugadores as $jugador)
                    <option value="{{ $jugador->id }}" {{ old('jugador_id', $gol->jugador_id) == $jugador->id ? 'selected' : '' }}>
                        {{ $jugador->nombre }}
                    </option>
                @endforeach
            </select>
            @error('jugador_id')
            <div>{{ $message }}</div>
            @enderror
        </label>
        <br>

        <label>
            Minuto
            <br>
            <input type="number" name="min" value="{{ old('min', $gol->min) }}">
            @error('min')
            <div>{{ $message }}</div>
            @enderror
        </label>
        <br>

        <label>
            Descripción
            <br>
            <textarea name="descripcion" rows="5">{{ old('descripcion', $gol->descripcion) }}</textarea>
            @error('descripcion')
            <div>{{ $message }}</div>
            @enderror
        </label>
        <br>

        <button type="submit">Actualizar Gol</button>
    </form>
</body>
</html>
