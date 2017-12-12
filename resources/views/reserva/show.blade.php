
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{$reserva->tipoDeFiesta}}</title>
  </head>
  <body>

  <h1>La mejor fiesta va a ser tu {{$reserva->tipoDeFiesta}}</h1>
  <ul>
    <li>El día: {{$reserva->fecha}}</li>
    <li>
      Tenemos confirmadas: {{$reserva->cantidadDePersonas ." personas"}}
    </li>
    <li>En: {{$reserva->ubicacion}}</li>
  </ul>

  <a href="/editarReserva/{{$reserva->id}}">
    <button type="button" name="button">Editar</button>
  </a>
  <a href="/eliminarReserva/{{$reserva->id}}">
    <button type="button" name="button">Eliminar</button>
  </a>
</body>
</html>
