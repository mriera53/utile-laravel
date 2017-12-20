@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
@include('header')


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
@endsection
