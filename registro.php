<?php

include("con.db.php");

if(isset($_POST['registro'])){
   if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1){
	$name  = trim($_POST['name']);
	$email = trim($_POST['email']);
	$fecha_reg= date("d/m/y");
	$consulta ="INSERT INTO `usuarios`(nombre, email, fecha_reg) VALUES ('$name','$email','$fecha_reg')";
	$resultado= mysqli_query($conex,$consulta);
	if($resultado){
		 ?>
		 <h3 class="ok"> Te registraste correctamente!</h3>
		
	        <?php
	}else {
		?>
		<h3 class="bad"> Error con el registro</h3>
	       <?php
	}
   } 	else{
	       ?>
	       <h3 class ="ok"> Complete los datos</h3>
	     <?php
	}
} 



?>