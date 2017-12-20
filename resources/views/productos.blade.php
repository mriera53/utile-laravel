@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
@include('header')

    <div class="container">
      <h1>Listado de productos</h1>
    <section id="catering">
      <div class="row">
        <div class="large-12 columns">
          @foreach ($productos as $productos)
            <div class="item">
          <h2>{{$productos->servicio}}</h2>
              <ul>
                <li  id="c">Nombre: {{$productos->name}}</li>
                <li  id="c">Calificacion: {{$productos->calificacion}}</li>
                <li  id="c">Precio por hora: {{$productos->precioXhora}}</li>
              </ul>

            </div>
          @endforeach


    </body>
</html>
@endsection
