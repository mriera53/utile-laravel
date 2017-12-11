<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
		<link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
    <ul>
        @foreach ($reserva as $reservas)
			<li>{{$reserva}}</li>
		@endforeach
    </ul>
    </body>
</html>
