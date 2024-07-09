<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jugador index</title>
</head>
<body>
    <h1>lista de jugadores</h1>
    <a href="{{route('jugador.create')}}">ingresar un nuevo jugador</a>
    <br>
    <a href="{{route('gol.create')}}">asignar un gol a un jugador</a>
    <br>
    @foreach ($jugadores as $jugador)
        <tr>
            <br>
            <td>{{$jugador->fecha_nac}}</td>
            <td>{{$jugador->nombre}}</td>
            <td>{{$jugador->posicion}}</td>
            <br>
            <td><a href="{{route('jugador.show', $jugador->id)}}">Detalle</a></td>
            <form action="{{route('jugador.destroy',$jugador->id)}}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">Eliminar</button>
                <br>
                <td><a href="{{route('jugador.edit',$jugador->id)}}">Editar</a></td>
            </form>
        </tr>
    @endforeach
</body>
</html>