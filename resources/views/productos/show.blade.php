
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>{{$productos->servicio}}</title>
  </head>
  <body>

  <h1>Mi nombre es: {{$productos->name}}</h1>
  <ul>
    <li>
      Me dedico a: {{$productos->servicio}}
    </li>
    <li>Años de experiencia: {{$productos->anosExperiencia}}</li>
    <li>
      Calificacion: {{$productos->calificacion}}
    </li>
    <li>
      El precio por hora: {{$productos->precioXhora}}
    </li>
  </ul>

  <a href="/editarReserva/{{$productos->id}}">
    <button type="button" name="button">Editar</button>
  </a>
  <a href="/eliminarReserva/{{$productos->id}}">
    <button type="button" name="button">Eliminar</button>
  </a>
</body>
</html>
