<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>gol show</title>
</head>
<body>
    <h1>jugador a que pertecence el gol :{{$gol->jugador->nombre}}</h1>
    <p><strong>minuto del gol</strong>: {{$gol->min}}</p>
    <p><strong>descripcion del gol</strong>: {{$gol->descripcion}}</p>
    <a href="{{route('gol.index')}}">volver</a>
</body>
</html>