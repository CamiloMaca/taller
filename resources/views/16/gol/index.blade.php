<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gol Index</title>
</head>
<body>
    <h1>Lista de Goles</h1>
    <a href="{{ route('gol.create') }}">Ingresar un nuevo gol</a>
    <hr>
        @foreach ($gols as $gol)
            <tr>
            <p><strong>jugador</strong>: {{$gol->jugador->nombre}}</p>                      
            <p><strong>minuto</strong>: {{$gol->min}}</p>
            <p><strong>descripcion</strong>: {{$gol->descripcion}}</p>
            <td><a href="{{route('gol.show',$gol->id)}}">Detalle</a></td>
            </tr>
            <form action="{{route('gol.destroy',$gol->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
                <br>
                <td><a href="{{route('gol.edit',$gol->id)}}">Editar</a></td>
            </form>
            <hr>
        @endforeach
</body>
</html>
