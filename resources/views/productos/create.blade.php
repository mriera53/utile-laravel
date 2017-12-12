<html>
    <head>
        <title>Agregar Producto</title>
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

<h1>Agregar Productos</h1>
        <form id="agregarProducto" name="agregarProducto" method="POST" action="/productos/agregar" enctype="multipart/form-data">
            {{ csrf_field() }}

            <div>
                <label for="servicio">servicio</label>
                <input type="text" value="{{ old('servicio') }}" name="servicio" id="servicio"/>
            </div>

            <div>
                <label for="name">Nombre</label>
                <input type="text" value="{{ old('name') }}"   name="name" id="name"/>
            </div>

            <div>
                <label for="disponibilidad">disponibilidad</label>
                <input type="date" value="{{ old('disponibilidad') }}" name="disponibilidad" id="disponibilidad"/>
            </div>

            <div>
                <label for="anosExperiencia">Años de Experiencia</label>
                <input type="number"  value="{{ old('anosExperiencia') }}" name="anosExperiencia" id="anosExperiencia"/>
            </div>

            <div>
                <label for="calificacion">calificacion</label>
                <input type="number" value="{{ old('calificacion') }}"   name="calificacion" id="calificacion"/>
            </div>

            <div>
                <label for="precioXhora">Precio por Hora</label>
                <input type="number" value="{{ old('precioXhora') }}"   name="precioXhora" id="precioXhora"/>
            </div>


            <input type="submit" value="Agregar Producto" name="submit"/>
        </form>
    </body>
</html>
