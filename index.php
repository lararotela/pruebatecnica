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
		<h1>Suscribite</h1>
		<input type="text" name="name" placeholder="Nombre Completo">
		<input type="email" name="email" placeholder="Email">
		<input type="submit" name="registro">

	</form>
	<?php
	include("registro.php");

	?>
	
</body>
</html>