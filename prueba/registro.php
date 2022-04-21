<?php
include("con.db.php");
if(isset($_POST['Enviar'])){
	if(strlen($_POST['nombre'])>=1 && 
	strlen($_POST['apellido'])>=1 && 
	strlen($_POST['correo'])>=1){
	$nombre = trim($_POST['nombre']);
	$apellido = trim($_POST['apellido']);
	$correo = trim($_POST['correo']);
	$contraseña = trim($_POST['contraseña']);
	$conencriptada= password_hash($contraseña,PASSWORD_BCRYPT);
	$consulta = "INSERT INTO `users`(name, surname, email, password) VALUES ('$nombre','$apellido','$correo','$conencriptada')";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado){
		?>
		<h3 class="ok">Te registraste correctamente!</h3>
		<?php
	}else{
		?>
		<h3 class="db"> Error en el registro</h3>
		<?php

	}
}else{
	?>
	<h3>Complete todos los campos</h3>
	<?php
	}
}


?>