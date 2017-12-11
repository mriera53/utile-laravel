<html>
    <head>
        <title>Agregar Reserva</title>
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <style type="text/css">
            div {margin-top: 20px}
            body {padding: 20px}
        </style>
    </head>
    <body>

        @if (count($errors))
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

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
    </body>
</html>
