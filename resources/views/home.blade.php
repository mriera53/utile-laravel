@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
@include('header')
                <div class="panel-body">
<!--                  <form class="form-horizontal" method="POST" action="/home"-->
                  <form class="form-horizontal" method="POST" action="/reserva/agregar">
                        {{ csrf_field() }}
                        <div class="container">
<!--
1----------------------- desde create.blade.php
                          <form id="agregarReserva" name="agregarReserva" method="POST" action="/reserva/agregar" enctype="multipart/form-data">
                              {{ csrf_field() }}
                              <div>
                                  <label for="fecha">Fecha De Evento</label>
                                  <input type="date" value="{{ old('fecha') }}" name="fecha" id="fecha"/>
                              </div>
                              <div>
                                  <label for="cantidadDePersonas">Cantidad De Personas</label>
                                  <input type="number" value="{{ old('cantidadDePersonas') }}" name="cantidadDePersonas" id="cantidadDePersonas"/>
                              </div>
                              <div>
                                  <label for="ubicacion">Ubicacion</label>
                                  <input type="text"  value="{{ old('ubicacion') }}" name="ubicacion" id="ubicacion"/>
                              </div>
                              <div>
                                  <label for="tipoDeFiesta">Tipo De Fiesta</label>
                                  <input type="text" value="{{ old('tipoDeFiesta') }}"   name="tipoDeFiesta" id="tipoDeFiesta"/>
                              </div>
                              <input type="submit" value="Agregar Reserva" name="submit"/>
                          </form>
1--------------------------->

@if (count($errors))
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<section class="form-banner">
  <div class="row">
    <form class="form-inline col-md-8 col-md-offset-2" action="/reserva/agregar" method="post">
      <div class="form-group col-md-3">
        <input type="date" class="form-control" id="fecha" name="fecha" placeholder="Fecha De Evento" value=""/>
      </div>
      <div class="form-group col-md-3">
        <input type="number" class="form-control" id="cantidadDePersonas" name="cantidadDePersonas" placeholder="Cantidad Personas" value=""/>
      </div>
      <div class="form-group col-md-3">
        <input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="ubicacion" value=""/>
      </div>
      <div class="form-group col-md-3">
        <input type="text" class="form-control" id="tipoDeFiesta" name="tipoDeFiesta" placeholder="Tipo Fiesta" value=""/>
      </div>
      <div class="form-group col-md-3">
        <input type="submit" value="Enviar" name="submit"/>
      </div>
    </form>
  </div>

</section>


<!-- 2--------------------------- Situación anterior a la modificación
                    		<section class="form-banner">
                    			<div class="row">
                    				<form class="form-inline col-md-8 col-md-offset-2" action="index.html" method="post">
                    					<div class="form-group col-md-3">
                    						<input type="text" class="form-control" id="direccion" placeholder="Donde es?" value="">
                    					</div>
                    					<div class="form-group col-md-3">
                    						<input type="text" class="form-control" id="horario" placeholder="A que hora es?" value="">
                    					</div>
                    					<div class="form-group col-md-3">
                    							<input type="text" class="form-control" id="personas" placeholder="Cuantos son?" value="">
                    					</div>
                    					<div class="form-group col-md-3">
                    						<button class="button btn success col-xs-12" type="button" name="enviar">Enviar</button>
                    					</div>
                    				</form>
                    			</div>

                    	  </section>
2---------------------------->

                        <section id="catering">
                          <div class="row">
                            <div class="large-12 columns">
                            	<h2 style="text-align: center" id="c">Catering</h2>
                            	<h4 style="text-align: right">Ver todo</h4>
                              <div class="owl-carousel owl-theme">
                                <div class="item">
                                  <img src="/imagenes/catering/cat1.jpg" alt="Catering1" >
                                  <h4>PICADITAS</h4>
                                </div>
                                <div class="item">
                                  <img src="imagenes/catering/cat3.jpg" alt="Catering3" >
                                  <h4>EAT</h4>
                                </div>
                                <div class="item">
                                  <img src="imagenes/catering/cat4.jpg" alt="Catering4" >
                                  <h4>LAS BRAZAS</h4>
                                </div>
                                <div class="item">
                                  <img src="imagenes/catering/cat5.jpg" alt="Catering5" >
                                  <h4>EMPACHADOS</h4>
                                </div>
                                <div class="item">
                                  <img src="imagenes/catering/cat6.jpg" alt="Catering6" >
                                  <h4>DULZONES</h4>
                                </div>
                              </div>
                              <a class="button" name="button" href='/productos/agregar'> Agregar producto </a>


                            </div>
                          </div>
                        </section>

                    		<section id="barras">
                    	    <div class="row">
                    	      <div class="large-12 columns">
                        		<h2 style="text-align: center" id="b">Barras</h2>
                              	<h4 style="text-align: right">Ver todo</h4>
                    	        <div class="owl-carousel owl-theme">
                    	          <div class="item">
                    	            <img src="imagenes/barra/barra1.jpg" alt="Barra1" >
                    	            <h4>SHAKE IT</h4>
                    	          </div>
                    	          <div class="item">
                    	            <img src="imagenes/barra/barra2.jpg" alt="Barra2" >
                    	            <h4>VODKA TONIFICA</h4>
                    	          </div>
                    	          <div class="item">
                    	            <img src="imagenes/barra/barra3.jpg" alt="Barra3" >
                    	            <h4>MANDALA</h4>
                    	          </div>
                    	          <div class="item">
                    	            <img src="imagenes/barra/barra4.jpg" alt="Barra4" >
                    	            <h4>TEQUILA</h4>
                    	          </div>
                    	          <div class="item">
                    	            <img src="imagenes/barra/barra5.jpg" alt="Barra5" >
                    	            <h4>MOJIÑO</h4>
                    	          </div>
                    	          <div class="item">
                    	            <img src="imagenes/barra/barra6.jpg" alt="Barra6" >
                    	            <h4>ESKA</h4>
                    	          </div>
                    	          <div class="item">
                    	            <img src="imagenes/barra/barra7.jpg" alt="Barra7" >
                    	            <h4>MASTERS</h4>
                    	          </div>
                    	          <div class="item">
                    	            <img src="imagenes/barra/barra8.jpg" alt="Barra8" >
                    	            <h4>Barra8</h4>
                    	          </div>
                    	        </div>
                            <a class="button" name="button" href='/productos/agregar'> Agregar producto </a>


                    	      </div>
                    	    </div>
                    	  </section>


                            <section id="dj">
                              <div class="row">
                                <div class="large-12 columns">
                                	<h2 style="text-align: center" id="d">Dj's</h2>
                                	<h4 style="text-align: right">Ver todo</h4>
                                  <div class="owl-carousel owl-theme">
                                    <div class="item">
                                      <img src="imagenes/djs/dj1.jpg" alt="dj1" >
                                      <h4>SOLOMUN</h4>
                                    </div>
                                    <div class="item">
                                      <img src="imagenes/djs/dj2.jpg" alt="dj2" >
                                      <h4>SKRILLEX</h4>
                                    </div>
                                    <div class="item">
                                      <img src="imagenes/djs/dj3.jpg" alt="dj3" >
                                      <h4>SEPH</h4>
                                    </div>
                                    <div class="item">
                                      <img src="imagenes/djs/dj4.jpg" alt="dj4" >
                                      <h4>MATADOR</h4>
                                    </div>
                                    <div class="item">
                                      <img src="imagenes/djs/dj5.jpg" alt="dj5" >
                                      <h4>MACEO PLEX</h4>
                                    </div>
                                    <div class="item">
                                      <img src="imagenes/djs/dj6.jpg" alt="dj6" >
                                      <h4>LUCSON</h4>
                                    </div>
                                  </div>
                              <a class="button" name="button" href='/productos/agregar'> Agregar producto </a>

                                </div>
                              </div>
                            </section>

                      </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
  $(document).ready(function() {


      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: false,
        responsive: {
          0: {
            items: 2,
            nav: true
          },
          600: {
            items: 3,
            nav: false
          },
          1000: {
            items: 3,
            nav: true,
            loop: false,
            margin: 20
          }
        }
      })

      /*

      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: false,
        responsive: {
          0: {
            items: 2,
            nav: true
          },
          600: {
            items: 3,
            nav: false
          },
          1000: {
            items: 3,
            nav: true,
            loop: false,
            margin: 20
          }
        }
      })



      $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: false,
        responsive: {
          0: {
            items: 2,
            nav: true
          },
          600: {
            items: 3,
            nav: false
          },
          1000: {
            items: 3,
            nav: true,
            loop: false,
            margin: 20
          }
        }
      })


      */











})





</script>
@endsection
