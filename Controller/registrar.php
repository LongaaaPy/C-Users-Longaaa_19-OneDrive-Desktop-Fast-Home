<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['rol']) >= 1 && strlen($_POST['password']) >= 1) {
        $rol = trim($_POST['rol']);
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
        $password = trim($_POST['password']);
	    $fechareg = date("d/m/y");
	    $consulta = "INSERT INTO datos(rol,nombre,email,password,fecha_reg) VALUES ('$rol','$name','$email','$password','$fechareg')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has registrado correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>