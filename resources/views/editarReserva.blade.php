<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="container">
      <h1>Editando: {{$reserva->tipoDeFiesta}}</h1>
      @if (count($errors) > 0)
        		<div class="alert alert-danger">
            		<ul>
    	            @foreach ($errors->all() as $error)
    	                <li>{{ $error }}</li>
    	            @endforeach
        		   </ul>
    	    </div>
    	@endif

      <form class="" action="/editarReserva/{{$reserva->id}}" method="post">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="">Tipo De Fiesta</label>
          <input class="form-control" type="text" name="tipoDeFiesta" value="{{$reserva->tipoDeFiesta}}">
        </div>
        <div class="form-group">
          <label for="">Cantidad De Personas</label>
          <input class="form-control" type="number" name="cantidadDePersonas" value="{{$reserva->cantidadDePersonas}}">
        </div>
        <div class="form-group">
          <label for="">Ubicacion</label>
          <input class="form-control" type="text" name="ubicacion" value="{{$reserva->ubicacion}}">
        </div>
        <div class="form-group">
          <label for="">Fecha Del Evento</label>
          <input class="form-control" type="date" name="fecha" value="{{$reserva->fecha}}">
        </div>
        <div class="form-group">
          <input class="btn btn-primary" type="submit" name="" value="Guardar Cambios">
        </div>
    </form>
    </div>

  </body>
</html>
