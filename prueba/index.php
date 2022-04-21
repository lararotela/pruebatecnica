<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario</title>
</head>
<body>
	<form method="post">
		<input type="text"name="nombre" placeholder="Nombre">
		<input type="text"name="apellido" placeholder="Apellido">
		<input type="text"name="correo" placeholder="Correo">
		<input type="password"name="contraseña"placeholder="Contraseña">
		<input type="password"name="contraseña"placeholder="Repetir Contraseña">
		<input type="submit"name="Enviar">
	</form>
	<?php
	include("registro.php");
	?>
	
</body>
</html>