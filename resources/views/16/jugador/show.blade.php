<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>jugador show</title>
</head>
<body>
    <h1>Jugador :{{$jugador->nombre}}</h1>
    <p><strong>fecha_nacimiento</strong>: {{$jugador->fecha_nac}}</p>
    <p><strong>posicion en la que juega</strong>: {{$jugador->posicion}}</p>
</body>
</html>