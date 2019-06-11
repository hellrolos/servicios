<!DOCTYPE html>
<html>
<head>
	<title>Error Page</title>
</head>
<body>
	<div id="container">
		<h1>Error {{ $code }}</h1>
		<hr>
		<h3>Mensaje: {{ $message }}</h3>
		<a href="{{ route('dashboard')}}">Inicio</a>
	</div>
</body>
</html>