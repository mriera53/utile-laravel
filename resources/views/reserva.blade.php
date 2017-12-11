<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
		<link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
    <ul>
        @foreach ($reservas as $reserva)
			<li>{{$reserva}}</li>
		@endforeach
    </ul>
    </body>
</html>
